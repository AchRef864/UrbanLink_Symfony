<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250416101514 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs


    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE rating (id INT AUTO_INCREMENT NOT NULL, taxi_id INT NOT NULL, user_id INT NOT NULL, note INT NOT NULL, commentaire LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, date_rating DATETIME NOT NULL, INDEX IDX_D8892622A76ED395 (user_id), INDEX IDX_D8892622506FF81C (taxi_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reservations (reservation_id INT AUTO_INCREMENT NOT NULL, trajet_id INT DEFAULT NULL, user_id INT NOT NULL, reservation_date DATETIME NOT NULL, number_of_seats INT NOT NULL, total_price NUMERIC(10, 2) NOT NULL, status VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, is_cancelled TINYINT(1) NOT NULL, cancellation_reason LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, cancellation_date DATETIME DEFAULT NULL, trajet_deleted TINYINT(1) NOT NULL, trajet_deleted_at DATETIME DEFAULT NULL, trajet_deleted_info LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_4DA239D12A823 (trajet_id), INDEX IDX_4DA239A76ED395 (user_id), PRIMARY KEY(reservation_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE trajet (id INT AUTO_INCREMENT NOT NULL, departure VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, destination VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, distance DOUBLE PRECISION NOT NULL, duration VARCHAR(5) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, departure_time DATETIME NOT NULL, arrival_time DATETIME DEFAULT NULL, price DOUBLE PRECISION NOT NULL, available_seats INT NOT NULL, vehicle_id INT DEFAULT NULL, type_transport VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE rating ADD CONSTRAINT FK_D8892622506FF81C FOREIGN KEY (taxi_id) REFERENCES taxi (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE rating ADD CONSTRAINT FK_D8892622A76ED395 FOREIGN KEY (user_id) REFERENCES users (user_id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE reservations ADD CONSTRAINT FK_4DA239A76ED395 FOREIGN KEY (user_id) REFERENCES users (user_id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservations ADD CONSTRAINT FK_4DA239D12A823 FOREIGN KEY (trajet_id) REFERENCES trajet (id) ON UPDATE NO ACTION ON DELETE SET NULL');
        $this->addSql('ALTER TABLE taxi ADD longitude NUMERIC(10, 6) DEFAULT NULL, ADD latitude NUMERIC(10, 6) DEFAULT NULL, CHANGE licence_date_obtention licence_date_obtention DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE users ADD license VARCHAR(255) DEFAULT NULL, ADD joining_date DATETIME NOT NULL, CHANGE phone phone VARCHAR(255) NOT NULL');
    }
}
