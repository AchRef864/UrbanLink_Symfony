<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250427130113 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE abonnement ADD etat VARCHAR(255) NOT NULL, DROP is_cancelled
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reponse DROP rate
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE abonnement ADD is_cancelled TINYINT(1) DEFAULT 0 NOT NULL, DROP etat
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reponse ADD rate INT DEFAULT NULL
        SQL);
    }
}
