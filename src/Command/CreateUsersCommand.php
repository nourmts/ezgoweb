<?php

namespace App\Command;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[AsCommand(
    name: 'app:create-users',
    description: 'Creates admin and client users',
)]
class CreateUsersCommand extends Command
{
    private EntityManagerInterface $entityManager;
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher)
    {
        parent::__construct();
        $this->entityManager = $entityManager;
        $this->passwordHasher = $passwordHasher;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        try {
            // Create Admin User
            $admin = new User();
            $admin->setNom('Admin');
            $admin->setPrenom('System');
            $admin->setAge(30);
            $admin->setMail('admin@example.com');
            $admin->setNumTel(12345678);
            $admin->setGenre('M');
            $admin->setRoleId(2); // Admin role

            // Hash the password
            $hashedPassword = $this->passwordHasher->hashPassword($admin, 'admin123');
            $admin->setPassword($hashedPassword);

            // Create Client User
            $client = new User();
            $client->setNom('Client');
            $client->setPrenom('Test');
            $client->setAge(25);
            $client->setMail('client@example.com');
            $client->setNumTel(87654321);
            $client->setGenre('F');
            $client->setRoleId(1); // Client role

            // Hash the password
            $hashedPassword = $this->passwordHasher->hashPassword($client, 'client123');
            $client->setPassword($hashedPassword);

            // Persist users
            $this->entityManager->persist($admin);
            $this->entityManager->persist($client);
            $this->entityManager->flush();

            $output->writeln('Users created successfully!');
            $output->writeln('Admin credentials:');
            $output->writeln('Email: admin@example.com');
            $output->writeln('Password: admin123');
            $output->writeln('');
            $output->writeln('Client credentials:');
            $output->writeln('Email: client@example.com');
            $output->writeln('Password: client123');

            return Command::SUCCESS;
        } catch (\Exception $e) {
            $output->writeln('Error creating users: ' . $e->getMessage());
            return Command::FAILURE;
        }
    }
} 