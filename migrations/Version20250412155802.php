<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250412155802 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Recreate tables with original data';
    }

    public function up(Schema $schema): void
    {
        // Drop existing tables
        $this->addSql('DROP TABLE IF EXISTS reservations');
        $this->addSql('DROP TABLE IF EXISTS voiture');

        // Create voiture table
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

        // Insert original cars
        $this->addSql(<<<'SQL'
            INSERT INTO voiture (immatriculation, marque, etat, contrat, image) VALUES 
            ('123-TUN-456', 'BMW', 'disponible', 'Contrat Standard', 'car-1.jpg'),
            ('789-TUN-012', 'Mercedes', 'disponible', 'Contrat Premium', 'car-2.jpg'),
            ('345-TUN-678', 'Audi', 'disponible', 'Contrat Standard', 'car-3.jpg'),
            ('901-TUN-234', 'Volkswagen', 'disponible', 'Contrat Économique', 'car-4.jpg'),
            ('567-TUN-890', 'Toyota', 'disponible', 'Contrat Standard', 'car-5.jpg'),
            ('234-TUN-567', 'Honda', 'disponible', 'Contrat Standard', 'car-6.jpg'),
            ('890-TUN-123', 'Ford', 'disponible', 'Contrat Économique', 'car-7.jpg'),
            ('456-TUN-789', 'Renault', 'disponible', 'Contrat Standard', 'car-8.jpg'),
            ('012-TUN-345', 'Peugeot', 'disponible', 'Contrat Standard', 'car-9.jpg'),
            ('678-TUN-901', 'Citroën', 'disponible', 'Contrat Premium', 'car-10.jpg'),
            ('135-TUN-246', 'Hyundai', 'disponible', 'Contrat Économique', 'car-11.jpg'),
            ('579-TUN-802', 'Kia', 'disponible', 'Contrat Standard', 'car-12.jpg'),
            ('246-TUN-135', 'Nissan', 'disponible', 'Contrat Standard', 'car-1.jpg'),
            ('802-TUN-579', 'Mazda', 'disponible', 'Contrat Premium', 'car-2.jpg'),
            ('357-TUN-468', 'Volvo', 'disponible', 'Contrat Standard', 'car-3.jpg')
        SQL);

        // Create reservations table
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

        // Add foreign key constraint
        $this->addSql('ALTER TABLE reservations ADD CONSTRAINT FK_4DA239181A8BA FOREIGN KEY (IdVoiture) REFERENCES voiture (IdVoiture)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE IF EXISTS reservations');
        $this->addSql('DROP TABLE IF EXISTS voiture');
    }
} 