<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250403175717 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE course (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, taxi_id INT NOT NULL, date_reservation DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, date_course DATETIME NOT NULL, ville_depart VARCHAR(50) NOT NULL, ville_arrivee VARCHAR(50) NOT NULL, distance_km NUMERIC(6, 2) NOT NULL, montant NUMERIC(10, 2) NOT NULL, statut VARCHAR(20) DEFAULT \'En attente\' NOT NULL, INDEX IDX_169E6FB9A76ED395 (user_id), INDEX IDX_169E6FB9506FF81C (taxi_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE taxi (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, immatriculation VARCHAR(20) NOT NULL, marque VARCHAR(50) NOT NULL, modele VARCHAR(50) NOT NULL, annee_fabrication INT DEFAULT NULL, capacite INT NOT NULL, zone_desserte VARCHAR(100) NOT NULL, statut VARCHAR(20) DEFAULT \'Disponible\' NOT NULL, licence_numero VARCHAR(50) NOT NULL, licence_date_obtention DATE NOT NULL, tarif_base NUMERIC(10, 2) NOT NULL, UNIQUE INDEX UNIQ_5F8463C2BE73422E (immatriculation), UNIQUE INDEX UNIQ_5F8463C22374CDE9 (licence_numero), INDEX IDX_5F8463C2A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, password VARCHAR(255) NOT NULL, roles JSON NOT NULL COMMENT \'(DC2Type:json)\', UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE course ADD CONSTRAINT FK_169E6FB9A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE course ADD CONSTRAINT FK_169E6FB9506FF81C FOREIGN KEY (taxi_id) REFERENCES taxi (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE taxi ADD CONSTRAINT FK_5F8463C2A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE course DROP FOREIGN KEY FK_169E6FB9A76ED395');
        $this->addSql('ALTER TABLE course DROP FOREIGN KEY FK_169E6FB9506FF81C');
        $this->addSql('ALTER TABLE taxi DROP FOREIGN KEY FK_5F8463C2A76ED395');
        $this->addSql('DROP TABLE course');
        $this->addSql('DROP TABLE taxi');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
