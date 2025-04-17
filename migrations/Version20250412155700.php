<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250412155700 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Update car images';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("UPDATE voiture SET image = 'bmw.jpg' WHERE marque = 'BMW'");
        $this->addSql("UPDATE voiture SET image = 'mercedes.jpg' WHERE marque = 'Mercedes'");
        $this->addSql("UPDATE voiture SET image = 'audi.jpg' WHERE marque = 'Audi'");
        $this->addSql("UPDATE voiture SET image = 'vw.jpg' WHERE marque = 'Volkswagen'");
        $this->addSql("UPDATE voiture SET image = 'toyota.jpg' WHERE marque = 'Toyota'");
    }

    public function down(Schema $schema): void
    {
        $this->addSql("UPDATE voiture SET image = NULL");
    }
} 