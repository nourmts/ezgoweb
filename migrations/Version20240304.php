<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20240304 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Création de la table rating';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE rating (
            id INT AUTO_INCREMENT NOT NULL,
            note INT NOT NULL,
            user_id INT NOT NULL,
            partenaire_id INT NOT NULL,
            PRIMARY KEY(id),
            CONSTRAINT FK_D8892622A76ED395 FOREIGN KEY (user_id) REFERENCES user (idUser),
            CONSTRAINT FK_D889262298DE13AC FOREIGN KEY (partenaire_id) REFERENCES partenaire (id_partenaire)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE rating');
    }
} 