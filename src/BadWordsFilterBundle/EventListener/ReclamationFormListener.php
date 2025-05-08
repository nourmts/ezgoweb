<?php

namespace App\BadWordsFilterBundle\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormError;
use App\BadWordsFilterBundle\Service\BadWordsFilter;
use Psr\Log\LoggerInterface;

final class ReclamationFormListener implements EventSubscriberInterface
{
    private BadWordsFilter $badWordsFilter;
    private ?LoggerInterface $logger;

    public function __construct(BadWordsFilter $badWordsFilter, LoggerInterface $logger = null)
    {
        $this->badWordsFilter = $badWordsFilter;
        $this->logger = $logger;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            FormEvents::PRE_SUBMIT => 'onPreSubmit',
            FormEvents::POST_SUBMIT => 'onPostSubmit',
        ];
    }

    public function onPreSubmit(FormEvent $event): void
    {
        $data = $event->getData();
        // Skip processing if data is not an array or doesn't contain reclamation field
        if (!is_array($data) || !isset($data['reclamation'])) {
            return;
        }

        // Check if reclamation data is not null
        $reclamationText = $data['reclamation'] ?? null;
        if ($reclamationText === null) {
            return;
        }

        $result = $this->badWordsFilter->filter($reclamationText);
        
        if ($this->logger) {
            $this->logger->info('Bad words filter result', ['result' => $result, 'text' => $reclamationText]);
        }
        
        if (!empty($result['badWords'])) {
            $form = $event->getForm();
            $form->addError(new FormError(
                'Votre message contient des mots inappropriés. Veuillez les retirer'
            ));
            
            // Also add error to the specific field
            if ($form->has('reclamation')) {
                $form->get('reclamation')->addError(new FormError(
                    'Mot(s) inapproprié(s) détecté(s)'
                ));
            }
        }

        $event->setData($data);
    }
    
    public function onPostSubmit(FormEvent $event): void
    {
        $form = $event->getForm();
        if (!$form->isValid() && $form->has('reclamation')) {
            $data = $form->getData();
            if ($data === null) {
                return;
            }
            
            if (method_exists($data, 'getReclamation')) {
                $text = $data->getReclamation();
                if ($text === null) {
                    return;
                }
                
                $result = $this->badWordsFilter->filter($text);
                
                if (!empty($result['badWords'])) {
                    if ($form->has('reclamation')) {
                        $form->get('reclamation')->addError(new FormError(
                            'Mot(s) inapproprié(s) détecté(s)'
                        ));
                    }
                }
            }
        }
    }
} 