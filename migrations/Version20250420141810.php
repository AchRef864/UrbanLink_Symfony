<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250420141810 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
       
        $this->addSql(<<<'SQL'
            ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF0506FF81C FOREIGN KEY (taxi_id) REFERENCES taxi (id) ON DELETE SET NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE maintenance CHANGE maintenance_date maintenance_date DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)'
        SQL);
    
        $this->addSql(<<<'SQL'
            ALTER TABLE trajet ADD CONSTRAINT FK_2B5BA98C545317D1 FOREIGN KEY (vehicle_id) REFERENCES Vehicle (id) ON DELETE SET NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE trajet RENAME INDEX fk_vehicule TO IDX_2B5BA98C545317D1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE users CHANGE joining_date joining_date DATETIME NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE messenger_messages CHANGE created_at created_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', CHANGE available_at available_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', CHANGE delivered_at delivered_at DATETIME DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)'
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
       
        $this->addSql(<<<'SQL'
            ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF0506FF81C FOREIGN KEY (taxi_id) REFERENCES taxi (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE maintenance CHANGE maintenance_date maintenance_date DATETIME NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE messenger_messages CHANGE created_at created_at DATETIME NOT NULL, CHANGE available_at available_at DATETIME NOT NULL, CHANGE delivered_at delivered_at DATETIME DEFAULT NULL
        SQL);
       
        $this->addSql(<<<'SQL'
            ALTER TABLE trajet ADD CONSTRAINT fk_vehicule FOREIGN KEY (vehicle_id) REFERENCES Vehicle (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE trajet RENAME INDEX idx_2b5ba98c545317d1 TO fk_vehicule
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE users CHANGE joining_date joining_date DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL
        SQL);
    }
}
