<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250412155801 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Insert original car data';
    }

    public function up(Schema $schema): void
    {
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
    }

    public function down(Schema $schema): void
    {
        // Remove all cars
        $this->addSql('DELETE FROM voiture');
    }
} 