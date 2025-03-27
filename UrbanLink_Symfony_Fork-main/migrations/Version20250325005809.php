<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250325005809 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE trajet (trajet_id INT AUTO_INCREMENT NOT NULL, departure VARCHAR(100) NOT NULL, destination VARCHAR(100) NOT NULL, distance DOUBLE PRECISION NOT NULL, duration VARCHAR(5) NOT NULL, departure_time DATETIME NOT NULL, arrival_time DATETIME DEFAULT NULL, price DOUBLE PRECISION NOT NULL, vehicle_id INT DEFAULT NULL, type_transport VARCHAR(20) NOT NULL, PRIMARY KEY(trajet_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE trajet');
    }
}
