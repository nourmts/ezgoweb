<?php

namespace App\Command;

use App\Repository\LocationRepository;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'app:test-statistics',
    description: 'Tests the statistics queries',
)]
class TestStatisticsCommand extends Command
{
    private $locationRepository;

    public function __construct(LocationRepository $locationRepository)
    {
        parent::__construct();
        $this->locationRepository = $locationRepository;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Testing statistics queries...');

        // Test locations per partner
        $locationsPerPartner = $this->locationRepository->getLocationsParPartenaire();
        $output->writeln("\nLocations per partner:");
        foreach ($locationsPerPartner as $item) {
            $output->writeln(sprintf('- %s: %d locations', $item['partenaire'], $item['nombre_locations']));
        }

        // Test services per partner
        $servicesPerPartner = $this->locationRepository->getServicesParPartenaire();
        $output->writeln("\nServices per partner:");
        foreach ($servicesPerPartner as $item) {
            $output->writeln(sprintf('- %s: %d services', $item['partenaire'], $item['nombre_services']));
        }

        // Test most requested brands
        $marquesPlusDemandees = $this->locationRepository->getMarquesPlusDemandees();
        $output->writeln("\nMost requested brands:");
        foreach ($marquesPlusDemandees as $item) {
            $output->writeln(sprintf('- %s: %d locations', $item['marque'], $item['nombre_locations']));
        }

        // Test service distribution
        $repartitionServices = $this->locationRepository->getRepartitionServices();
        $output->writeln("\nService distribution:");
        foreach ($repartitionServices as $item) {
            $output->writeln(sprintf('- %s: %d locations', $item['service'], $item['nombre_locations']));
        }

        return Command::SUCCESS;
    }
} 