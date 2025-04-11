<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250409113823 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs

        $this->addSql('ALTER TABLE users ADD name VARCHAR(255) NOT NULL, ADD phone VARCHAR(255) NOT NULL, ADD role VARCHAR(20) NOT NULL, ADD code INT DEFAULT NULL, ADD is_blocked TINYINT(1) NOT NULL, DROP roles');
        $this->addSql('ALTER TABLE messenger_messages CHANGE created_at created_at DATETIME NOT NULL, CHANGE available_at available_at DATETIME NOT NULL, CHANGE delivered_at delivered_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reservations (reservation_id INT AUTO_INCREMENT NOT NULL, trajet_id INT NOT NULL, user_id INT NOT NULL, reservation_date DATETIME NOT NULL, number_of_seats INT NOT NULL, total_price NUMERIC(10, 2) NOT NULL, status VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_4DA239A76ED395 (user_id), INDEX IDX_4DA239D12A823 (trajet_id), PRIMARY KEY(reservation_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE avis (id INT AUTO_INCREMENT NOT NULL, note INT NOT NULL, commentaire VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, date_avis DATE NOT NULL, user_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE Maintenance (id INT NOT NULL, vehicleID INT NOT NULL, maintenanceDate DATETIME NOT NULL, serviceType VARCHAR(0) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, description VARCHAR(500) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, serviceProvider VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, cost INT NOT NULL, status INT NOT NULL, INDEX fk_vehicle (vehicleID), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_0900_ai_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reponse (id INT AUTO_INCREMENT NOT NULL, commentaire VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, date_reponse DATE NOT NULL, avis_id INT NOT NULL, user_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE Vehicle (id INT NOT NULL, type VARCHAR(20) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_0900_ai_ci`, model VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, brand VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, licensePlate VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, seats INT NOT NULL, image VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, color VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_0900_ai_ci`, year INT NOT NULL, airConditioning TINYINT(1) NOT NULL, isAvailable TINYINT(1) NOT NULL, driverID INT DEFAULT NULL, isVerified TINYINT(1) NOT NULL, UNIQUE INDEX unique_licensePlate (licensePlate), INDEX fk_driver (driverID), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_0900_ai_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE trajet (id INT AUTO_INCREMENT NOT NULL, departure VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, destination VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, distance DOUBLE PRECISION NOT NULL, duration VARCHAR(5) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, departure_time DATETIME NOT NULL, arrival_time DATETIME DEFAULT NULL, price DOUBLE PRECISION NOT NULL, vehicle_id INT DEFAULT NULL, type_transport VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, available_seats INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE messenger_messages CHANGE created_at created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE available_at available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE delivered_at delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE users ADD roles JSON NOT NULL, DROP name, DROP phone, DROP role, DROP code, DROP is_blocked');
    }
}
