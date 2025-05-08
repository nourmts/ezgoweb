<?php

namespace App\Controller;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use App\Repository\StationRepository;
use App\Repository\BusRepository;
use App\Repository\UserRepository;
use App\Entity\Ticket;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Psr\Log\LoggerInterface;

use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;

use Endroid\QrCode\Builder\QrCodeBuilder;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;






use Endroid\QrCode\Label\Label;

use Endroid\QrCode\Builder\BuilderInterface;
use Endroid\QrCode\Writer\AbstractGdWriter;
use Endroid\QrCode\QrCode;
use Vtiful\Kernel\Format;



#[Route('/pi')]

final class HomeController extends AbstractController
{

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    #[Route('/home', name: 'app_index')]
    public function index(): Response
    {
        return $this->render('fronte/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('fronte/about.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/pricing', name: 'app_pricing')]
    public function pricing(): Response
    {
        return $this->render('fronte/pricing.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/our_car', name: 'app_our_car')]
    public function our_car(): Response
    {
        return $this->render('fronte/our_car.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/blog', name: 'app_blog')]
    public function blog(): Response
    {
        return $this->render('fronte/blog.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/contact', name: 'app_contact')]
    public function contact(StationRepository $stationRepository, BusRepository $busRepository): Response
    {
        $stations = $stationRepository->findAll();
        $buses = $busRepository->findAll();
        
        $busesArray = array_map(function($bus) {
            return [
                'imatriculation' => $bus->getImatriculation(),
                'idStation' => $bus->getIdStation(),
                'nbPlace' => $bus->getNbPlace(),
                'dateArrive' => $bus->getDateArrive()->format('Y-m-d H:i:s'),
                'dateSortie' => $bus->getDateSortie()->format('Y-m-d H:i:s'),
                'categorie' => $bus->getCategorie()
            ];
        }, $buses);

        return $this->render('fronte/contact.html.twig', [
            'controller_name' => 'HomeController',
            'stations' => $stations,
            'buses' => $busesArray,
        ]);
    }

    #[Route('/get-buses/{stationId}', name: 'app_get_buses', methods: ['GET'])]
    public function getBuses(int $stationId, BusRepository $busRepository): JsonResponse
    {
        $buses = $busRepository->findByStation($stationId);
        return $this->json($buses);
    }
    #[Route('/qrcode/{ticketid}', name: 'app_qrcode', methods: ['GET'])]
    public function create_qrcode($ticketid)
    {
        $ticket = $this->entityManager->getRepository(Ticket::class)->find($ticketid);
        
        if (!$ticket) {
            throw $this->createNotFoundException('Ticket not found');
        }
    
      
        $bus = $ticket->getBus(); 
        
        $data = sprintf(
            "Ticket ID: %s\nBus: %s\nPrice: %s DT\nDate: %s",
            $ticket->getTicketid(),
            $bus->getImatriculation(),
            $ticket->getPrix(),
            $ticket->getDateAchat()->format('Y-m-d')
        );
        
        $result = Builder::create()
    ->writer(new PngWriter())
    ->data($data)
    ->encoding(new Encoding('UTF-8'))
    ->errorCorrectionLevel(ErrorCorrectionLevel::High)
    ->size(300)
    ->margin(10)
    ->build();
        
        $qrDir = $this->getParameter('kernel.project_dir') . '/public/qr_codes';
        if (!is_dir($qrDir)) {
            mkdir($qrDir, 0755, true);
        }
        
        $qrFilename = $ticket->getTicketid() . '.png';
        file_put_contents($qrDir . '/' . $qrFilename, $result->getString());
        
        return new Response(file_get_contents($qrDir . '/' . $qrFilename), 200, [
            'Content-Type' => 'image/png',
        ]);
    
        
    }

    #[Route('/purchase-ticket/{busId}', name: 'app_purchase_ticket', methods: ['POST'])]
    public function purchaseTicket(
        Request $request,
        int $busId,
        EntityManagerInterface $entityManager,
        BusRepository $busRepository,
        MailerInterface $mailer,
        LoggerInterface $logger,
        UserRepository $userRepository
    ): JsonResponse {
        try {
            $bus = $busRepository->find($busId);
            if (!$bus) {
                $logger->error('Bus not found with ID: ' . $busId);
                return new JsonResponse([
                    'success' => false,
                    'message' => 'Bus non trouvé'
                ], 404);
            }

            // Get the last user from database
            $lastUser = $userRepository->findOneBy([], ['id' => 'DESC']);
            if (!$lastUser) {
                $logger->error('No users found in database');
                return new JsonResponse([
                    'success' => false,
                    'message' => 'Aucun utilisateur trouvé dans la base de données'
                ], 404);
            }

            $logger->info('Found last user with email: ' . $lastUser->getMail());
    
            $ticket = new Ticket();
            $ticket->setBus($bus);
            $ticket->setPrix(30); 
            $ticket->setDateAchat(new \DateTime());

            $entityManager->persist($ticket);
            $entityManager->flush();

            //qr
            //$this->create_qrcode($ticket->getTicketid());

            $email = (new Email())
                ->from('mohamedaljia006@gmail.com')
                ->to($lastUser->getMail())
                ->subject('Confirmation d\'achat de ticket')
                ->text('Merci pour votre achat!')
                ->html('
                    <h2>Confirmation d\'achat de ticket</h2>
                    <p>Bonjour,</p>
                    <p>Nous vous confirmons l\'achat de votre ticket  :</p>
                    <p>Merci de votre confiance !</p>
                ');
    
            try {
                $logger->info('Attempting to send email to: ' . $lastUser->getMail());
                $mailer->send($email);
                $logger->info('Email sent successfully to ' . $lastUser->getMail());
            } catch (TransportExceptionInterface $e) {
                $logger->error('Email sending failed: ' . $e->getMessage());
                $logger->error('Email configuration: ' . $_ENV['MAILER_DSN']);
                $logger->error('Full error details: ' . $e->getTraceAsString());
                throw $e;
            }

            $qrCodeUrl = '/qr_codes/' . $ticket->getTicketid() . '.png';

            return new JsonResponse([
                'success' => true,
                'message' => 'Ticket acheté et email envoyé avec succès!',
                'ticket' => [
                    'id' => $ticket->getTicketid(),
                    'busId' => $ticket->getBusId(),
                    'prix' => $ticket->getPrix(),
                    'dateAchat' => $ticket->getDateAchat()->format('Y-m-d H:i:s'),
                    'qrCodeUrl' => $qrCodeUrl,
                ]
            ]);
        } catch (\Exception $e) {
            $logger->error('Error in purchaseTicket: ' . $e->getMessage());
            $logger->error('Stack trace: ' . $e->getTraceAsString());
            return new JsonResponse([
                'success' => false,
                'message' => 'Une erreur est survenue lors de l\'achat du ticket: ' . $e->getMessage()
            ], 500);
        }
    }
    
}
