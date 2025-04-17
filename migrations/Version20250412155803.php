<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250412155803 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add sample reservations';
    }

    public function up(Schema $schema): void
    {
        // Insert sample reservations
        $this->addSql(<<<'SQL'
            INSERT INTO reservations (IdVoiture, NameRes, DateRes, statut) VALUES 
            (1, 'Ahmed Ben Ali', '2024-04-15', 'confirmé'),
            (2, 'Sarah Trabelsi', '2024-04-16', 'en attente'),
            (3, 'Mohamed Mansour', '2024-04-17', 'confirmé'),
            (4, 'Leila Gharbi', '2024-04-18', 'confirmé'),
            (5, 'Karim Bouazizi', '2024-04-19', 'en attente'),
            (6, 'Fatma Ben Salem', '2024-04-20', 'confirmé'),
            (7, 'Youssef Chahed', '2024-04-21', 'en attente'),
            (8, 'Amira Mejri', '2024-04-22', 'confirmé'),
            (9, 'Slim Ben Ammar', '2024-04-23', 'confirmé'),
            (10, 'Rania Belhadj', '2024-04-24', 'en attente')
        SQL);
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DELETE FROM reservations');
    }
} 