<?php

namespace App\Command;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'app:check-schema',
    description: 'Checks the database schema',
)]
class CheckSchemaCommand extends Command
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct();
        $this->entityManager = $entityManager;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $schemaManager = $this->entityManager->getConnection()->createSchemaManager();
        $tables = $schemaManager->listTables();

        $output->writeln('Database tables:');
        foreach ($tables as $table) {
            $output->writeln(sprintf('- %s', $table->getName()));
            $columns = $table->getColumns();
            foreach ($columns as $column) {
                $output->writeln(sprintf('  - %s: %s', $column->getName(), $column->getType()->getName()));
            }
        }

        return Command::SUCCESS;
    }
} 