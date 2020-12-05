<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201204144648 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE organisations ADD manager_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE organisations ADD CONSTRAINT FK_D7E459AC783E3463 FOREIGN KEY (manager_id) REFERENCES admin_user (id)');
        $this->addSql('CREATE INDEX IDX_D7E459AC783E3463 ON organisations (manager_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE organisations DROP FOREIGN KEY FK_D7E459AC783E3463');
        $this->addSql('DROP INDEX IDX_D7E459AC783E3463 ON organisations');
        $this->addSql('ALTER TABLE organisations DROP manager_id');
    }
}
