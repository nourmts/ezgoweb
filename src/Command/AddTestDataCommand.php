<?php

namespace App\Command;

use App\Entity\Location;
use App\Entity\Partenaire;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'app:add-test-data',
    description: 'Adds test data for statistics',
)]
class AddTestDataCommand extends Command
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct();
        $this->entityManager = $entityManager;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // Create test partners
        $partners = [
            ['nom' => 'AutoPlus', 'specialite' => 'Location de voitures', 'tarif' => 150.0, 'regions' => ['Tunis', 'Sousse']],
            ['nom' => 'CarRent', 'specialite' => 'Location de voitures', 'tarif' => 180.0, 'regions' => ['Sfax', 'Monastir']],
            ['nom' => 'DriveEasy', 'specialite' => 'Location de voitures', 'tarif' => 200.0, 'regions' => ['Tunis', 'Sfax']],
        ];

        $partnerEntities = [];
        foreach ($partners as $partnerData) {
            $partner = new Partenaire();
            $partner->setNom($partnerData['nom']);
            $partner->setSpecialite($partnerData['specialite']);
            $partner->setTarif($partnerData['tarif']);
            $partner->setRegions($partnerData['regions']);
            $this->entityManager->persist($partner);
            $partnerEntities[] = $partner;
        }

        // Create test locations
        $locations = [
            ['partenaire' => 0, 'service' => 'Location voiture', 'marque' => 'Toyota', 'dateDebut' => '-1 month', 'dateFin' => 'now'],
            ['partenaire' => 0, 'service' => 'Location voiture', 'marque' => 'Renault', 'dateDebut' => '-2 weeks', 'dateFin' => 'now'],
            ['partenaire' => 1, 'service' => 'Location voiture', 'marque' => 'Peugeot', 'dateDebut' => '-1 week', 'dateFin' => 'now'],
            ['partenaire' => 1, 'service' => 'Location voiture', 'marque' => 'Toyota', 'dateDebut' => '-3 days', 'dateFin' => 'now'],
            ['partenaire' => 2, 'service' => 'Location voiture', 'marque' => 'Renault', 'dateDebut' => '-2 days', 'dateFin' => 'now'],
            ['partenaire' => 2, 'service' => 'Location voiture', 'marque' => 'Peugeot', 'dateDebut' => '-1 day', 'dateFin' => 'now'],
        ];

        foreach ($locations as $locationData) {
            $location = new Location();
            $location->setPartenaire($partnerEntities[$locationData['partenaire']]);
            $location->setService($locationData['service']);
            $location->setMarque($locationData['marque']);
            $location->setDateDebut(new \DateTime($locationData['dateDebut']));
            $location->setDateFin(new \DateTime($locationData['dateFin']));
            $location->setPrixTotal(100.0);
            $this->entityManager->persist($location);
        }

        $this->entityManager->flush();

        $output->writeln('Test data added successfully!');

        return Command::SUCCESS;
    }
} 