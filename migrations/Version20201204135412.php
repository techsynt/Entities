<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201204135412 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client DROP FOREIGN KEY FK_C7440455C5C016A4');
        $this->addSql('DROP INDEX IDX_C7440455C5C016A4 ON client');
        $this->addSql('ALTER TABLE client CHANGE price_type_id_id price_type_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE client ADD CONSTRAINT FK_C7440455AE6A44CF FOREIGN KEY (price_type_id) REFERENCES price_type (id)');
        $this->addSql('CREATE INDEX IDX_C7440455AE6A44CF ON client (price_type_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client DROP FOREIGN KEY FK_C7440455AE6A44CF');
        $this->addSql('DROP INDEX IDX_C7440455AE6A44CF ON client');
        $this->addSql('ALTER TABLE client CHANGE price_type_id price_type_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE client ADD CONSTRAINT FK_C7440455C5C016A4 FOREIGN KEY (price_type_id_id) REFERENCES price_type (id)');
        $this->addSql('CREATE INDEX IDX_C7440455C5C016A4 ON client (price_type_id_id)');
    }
}
