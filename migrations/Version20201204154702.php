<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201204154702 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categories ADD attribute_id INT DEFAULT NULL, ADD title VARCHAR(255) DEFAULT NULL, ADD desctiption LONGTEXT DEFAULT NULL, ADD options LONGTEXT DEFAULT NULL, ADD sys_lft INT DEFAULT NULL, ADD sys_rgt INT DEFAULT NULL, ADD sys_level INT DEFAULT NULL, ADD active SMALLINT DEFAULT NULL, ADD created_at INT NOT NULL, ADD updated_at INT NOT NULL');
        $this->addSql('ALTER TABLE categories ADD CONSTRAINT FK_3AF34668B6E62EFA FOREIGN KEY (attribute_id) REFERENCES attributes (id)');
        $this->addSql('CREATE INDEX IDX_3AF34668B6E62EFA ON categories (attribute_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categories DROP FOREIGN KEY FK_3AF34668B6E62EFA');
        $this->addSql('DROP INDEX IDX_3AF34668B6E62EFA ON categories');
        $this->addSql('ALTER TABLE categories DROP attribute_id, DROP title, DROP desctiption, DROP options, DROP sys_lft, DROP sys_rgt, DROP sys_level, DROP active, DROP created_at, DROP updated_at');
    }
}
