<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250412133454 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE Maintenance (id INT AUTO_INCREMENT NOT NULL, vehicle_id INT NOT NULL, maintenance_date DATETIME NOT NULL, service_type VARCHAR(255) NOT NULL, description VARCHAR(500) NOT NULL, service_provider VARCHAR(255) NOT NULL, cost INT NOT NULL, status INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE Vehicle (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, model VARCHAR(50) NOT NULL, brand VARCHAR(50) NOT NULL, licensePlate VARCHAR(50) NOT NULL, seats INT NOT NULL, image VARCHAR(255) NOT NULL, color VARCHAR(50) DEFAULT NULL, year INT NOT NULL, airConditioning TINYINT(1) NOT NULL, isAvailable TINYINT(1) NOT NULL, driverID INT DEFAULT NULL, isVerified TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE users (user_id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, email VARCHAR(180) NOT NULL, phone VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, role VARCHAR(20) NOT NULL, code INT DEFAULT NULL, is_blocked TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_1483A5E9E7927C74 (email), PRIMARY KEY(user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE Maintenance');
        $this->addSql('DROP TABLE Vehicle');
        $this->addSql('DROP TABLE users');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
