<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250410195606 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reservations (reservation_id INT AUTO_INCREMENT NOT NULL, trajet_id INT NOT NULL, user_id INT NOT NULL, reservation_date DATETIME NOT NULL, number_of_seats INT NOT NULL, total_price NUMERIC(10, 2) NOT NULL, status VARCHAR(20) NOT NULL, INDEX IDX_4DA239D12A823 (trajet_id), INDEX IDX_4DA239A76ED395 (user_id), PRIMARY KEY(reservation_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE trajet (id INT AUTO_INCREMENT NOT NULL, departure VARCHAR(100) NOT NULL, destination VARCHAR(100) NOT NULL, distance DOUBLE PRECISION NOT NULL, duration VARCHAR(5) NOT NULL, departure_time DATETIME NOT NULL, arrival_time DATETIME DEFAULT NULL, price DOUBLE PRECISION NOT NULL, available_seats INT NOT NULL, vehicle_id INT DEFAULT NULL, type_transport VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reservations ADD CONSTRAINT FK_4DA239D12A823 FOREIGN KEY (trajet_id) REFERENCES trajet (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservations ADD CONSTRAINT FK_4DA239A76ED395 FOREIGN KEY (user_id) REFERENCES users (user_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE taxi DROP FOREIGN KEY FK_5F8463C2A76ED395');
        $this->addSql('ALTER TABLE rating DROP FOREIGN KEY FK_D8892622506FF81C');
        $this->addSql('ALTER TABLE rating DROP FOREIGN KEY FK_D8892622A76ED395');
        $this->addSql('ALTER TABLE course DROP FOREIGN KEY FK_169E6FB9506FF81C');
        $this->addSql('ALTER TABLE course DROP FOREIGN KEY FK_169E6FB9A76ED395');
       
        $this->addSql('ALTER TABLE messenger_messages CHANGE created_at created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE available_at available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE delivered_at delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE taxi (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, immatriculation VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, marque VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, modele VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, annee_fabrication INT DEFAULT NULL, capacite INT NOT NULL, zone_desserte VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, statut VARCHAR(20) CHARACTER SET utf8mb4 DEFAULT \'Disponible\' NOT NULL COLLATE `utf8mb4_unicode_ci`, licence_numero VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, licence_date_obtention DATE NOT NULL, tarif_base NUMERIC(10, 2) NOT NULL, INDEX IDX_5F8463C2A76ED395 (user_id), UNIQUE INDEX UNIQ_5F8463C22374CDE9 (licence_numero), UNIQUE INDEX UNIQ_5F8463C2BE73422E (immatriculation), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE rating (id INT AUTO_INCREMENT NOT NULL, taxi_id INT NOT NULL, user_id INT NOT NULL, note INT NOT NULL, commentaire LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, date_rating DATETIME NOT NULL, INDEX IDX_D8892622A76ED395 (user_id), INDEX IDX_D8892622506FF81C (taxi_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE course (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, taxi_id INT NOT NULL, date_reservation DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, date_course DATETIME NOT NULL, ville_depart VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ville_arrivee VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, distance_km NUMERIC(6, 2) NOT NULL, montant NUMERIC(10, 2) NOT NULL, statut VARCHAR(20) CHARACTER SET utf8mb4 DEFAULT \'En attente\' NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_169E6FB9506FF81C (taxi_id), INDEX IDX_169E6FB9A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE Vehicle (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, model VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, brand VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, licensePlate VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, seats INT NOT NULL, image VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, color VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, year INT NOT NULL, airConditioning TINYINT(1) NOT NULL, isAvailable TINYINT(1) NOT NULL, driverID INT DEFAULT NULL, isVerified TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE Maintenance (id INT AUTO_INCREMENT NOT NULL, vehicle_id INT NOT NULL, maintenance_date DATETIME NOT NULL, service_type VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description VARCHAR(500) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, service_provider VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, cost INT NOT NULL, status INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE taxi ADD CONSTRAINT FK_5F8463C2A76ED395 FOREIGN KEY (user_id) REFERENCES users (user_id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE rating ADD CONSTRAINT FK_D8892622506FF81C FOREIGN KEY (taxi_id) REFERENCES taxi (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE rating ADD CONSTRAINT FK_D8892622A76ED395 FOREIGN KEY (user_id) REFERENCES users (user_id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE course ADD CONSTRAINT FK_169E6FB9506FF81C FOREIGN KEY (taxi_id) REFERENCES taxi (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE course ADD CONSTRAINT FK_169E6FB9A76ED395 FOREIGN KEY (user_id) REFERENCES users (user_id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservations DROP FOREIGN KEY FK_4DA239D12A823');
        $this->addSql('ALTER TABLE reservations DROP FOREIGN KEY FK_4DA239A76ED395');
     
        $this->addSql('ALTER TABLE messenger_messages CHANGE created_at created_at DATETIME NOT NULL, CHANGE available_at available_at DATETIME NOT NULL, CHANGE delivered_at delivered_at DATETIME DEFAULT NULL');
    }
}
