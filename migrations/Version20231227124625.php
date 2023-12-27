<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231227124625 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD roles JSON NOT NULL, ADD password VARCHAR(255) NOT NULL, ADD is_verified TINYINT(1) NOT NULL, CHANGE username username VARCHAR(180) NOT NULL, CHANGE name name VARCHAR(180) NOT NULL, CHANGE first_name first_name VARCHAR(180) NOT NULL, CHANGE mail mail VARCHAR(180) NOT NULL, CHANGE birthday birthday DATETIME NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649F85E0677 ON user (username)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D6495126AC48 ON user (mail)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_8D93D649F85E0677 ON user');
        $this->addSql('DROP INDEX UNIQ_8D93D6495126AC48 ON user');
        $this->addSql('ALTER TABLE user DROP roles, DROP password, DROP is_verified, CHANGE username username VARCHAR(20) NOT NULL, CHANGE name name VARCHAR(20) NOT NULL, CHANGE first_name first_name VARCHAR(20) NOT NULL, CHANGE mail mail VARCHAR(40) NOT NULL, CHANGE birthday birthday DATE NOT NULL');
    }
}
