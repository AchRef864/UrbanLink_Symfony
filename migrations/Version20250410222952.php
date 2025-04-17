<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250410222952 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE course (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, taxi_id INT NOT NULL, date_reservation DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, date_course DATETIME NOT NULL, ville_depart VARCHAR(50) NOT NULL, ville_arrivee VARCHAR(50) NOT NULL, distance_km NUMERIC(6, 2) NOT NULL, montant NUMERIC(10, 2) NOT NULL, statut VARCHAR(20) DEFAULT \'En attente\' NOT NULL, INDEX IDX_169E6FB9A76ED395 (user_id), INDEX IDX_169E6FB9506FF81C (taxi_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rating (id INT AUTO_INCREMENT NOT NULL, taxi_id INT NOT NULL, user_id INT NOT NULL, note INT NOT NULL, commentaire LONGTEXT DEFAULT NULL, date_rating DATETIME NOT NULL, INDEX IDX_D8892622506FF81C (taxi_id), INDEX IDX_D8892622A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE taxi (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, immatriculation VARCHAR(20) NOT NULL, marque VARCHAR(50) NOT NULL, modele VARCHAR(50) NOT NULL, annee_fabrication INT DEFAULT NULL, capacite INT NOT NULL, zone_desserte VARCHAR(100) NOT NULL, statut VARCHAR(20) DEFAULT \'Disponible\' NOT NULL, licence_numero VARCHAR(50) NOT NULL, licence_date_obtention DATE NOT NULL, tarif_base NUMERIC(10, 2) NOT NULL, UNIQUE INDEX UNIQ_5F8463C2BE73422E (immatriculation), UNIQUE INDEX UNIQ_5F8463C22374CDE9 (licence_numero), INDEX IDX_5F8463C2A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE course ADD CONSTRAINT FK_169E6FB9A76ED395 FOREIGN KEY (user_id) REFERENCES users (user_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE course ADD CONSTRAINT FK_169E6FB9506FF81C FOREIGN KEY (taxi_id) REFERENCES taxi (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE rating ADD CONSTRAINT FK_D8892622506FF81C FOREIGN KEY (taxi_id) REFERENCES taxi (id)');
        $this->addSql('ALTER TABLE rating ADD CONSTRAINT FK_D8892622A76ED395 FOREIGN KEY (user_id) REFERENCES users (user_id)');
        $this->addSql('ALTER TABLE taxi ADD CONSTRAINT FK_5F8463C2A76ED395 FOREIGN KEY (user_id) REFERENCES users (user_id)');
        $this->addSql('ALTER TABLE users CHANGE phone phone VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE messenger_messages CHANGE created_at created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE available_at available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE delivered_at delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
    }

    public function down(Schema $schema): void
    {
        
        $this->addSql('ALTER TABLE course DROP FOREIGN KEY FK_169E6FB9A76ED395');
        $this->addSql('ALTER TABLE course DROP FOREIGN KEY FK_169E6FB9506FF81C');
        $this->addSql('ALTER TABLE rating DROP FOREIGN KEY FK_D8892622506FF81C');
        $this->addSql('ALTER TABLE rating DROP FOREIGN KEY FK_D8892622A76ED395');
        $this->addSql('ALTER TABLE taxi DROP FOREIGN KEY FK_5F8463C2A76ED395');
        $this->addSql('DROP TABLE course');
        $this->addSql('DROP TABLE rating');
        $this->addSql('DROP TABLE taxi');
        $this->addSql('ALTER TABLE messenger_messages CHANGE created_at created_at DATETIME NOT NULL, CHANGE available_at available_at DATETIME NOT NULL, CHANGE delivered_at delivered_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE users CHANGE phone phone VARCHAR(15) NOT NULL');
    }
}
