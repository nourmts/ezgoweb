<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250412155800 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Fix database schema issues';
    }

    public function up(Schema $schema): void
    {
        // Drop existing tables
        $this->addSql('DROP TABLE IF EXISTS reservations');
        $this->addSql('DROP TABLE IF EXISTS voiture');

        // Create voiture table with correct primary key
        $this->addSql(<<<'SQL'
            CREATE TABLE voiture (
                IdVoiture INT AUTO_INCREMENT NOT NULL,
                image VARCHAR(255) DEFAULT NULL,
                immatriculation VARCHAR(255) NOT NULL,
                marque VARCHAR(255) NOT NULL,
                etat VARCHAR(255) NOT NULL,
                contrat VARCHAR(255) NOT NULL,
                PRIMARY KEY(IdVoiture)
            ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);

        // Create reservations table with correct foreign keys
        $this->addSql(<<<'SQL'
            CREATE TABLE reservations (
                IdRes INT AUTO_INCREMENT NOT NULL,
                IdVoiture INT NOT NULL,
                NameRes VARCHAR(255) NOT NULL,
                DateRes DATE NOT NULL,
                statut VARCHAR(50) NOT NULL,
                INDEX IDX_4DA239181A8BA (IdVoiture),
                PRIMARY KEY(IdRes)
            ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);

        // Add foreign key constraints
        $this->addSql('ALTER TABLE reservations ADD CONSTRAINT FK_4DA239181A8BA FOREIGN KEY (IdVoiture) REFERENCES voiture (IdVoiture)');

        // Create indexes for frequently queried fields
        $this->addSql('CREATE INDEX IDX_VOITURE_ETAT ON voiture (etat)');
        $this->addSql('CREATE INDEX IDX_RESERVATIONS_STATUT ON reservations (statut)');
        $this->addSql('CREATE INDEX IDX_RESERVATIONS_DATE ON reservations (DateRes)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE IF EXISTS reservations');
        $this->addSql('DROP TABLE IF EXISTS voiture');
    }
} 