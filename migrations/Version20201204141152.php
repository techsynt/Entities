<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201204141152 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE client_clients_groups (client_id INT NOT NULL, clients_groups_id INT NOT NULL, INDEX IDX_D479AF1819EB6921 (client_id), INDEX IDX_D479AF185E79BC83 (clients_groups_id), PRIMARY KEY(client_id, clients_groups_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE client_clients_groups ADD CONSTRAINT FK_D479AF1819EB6921 FOREIGN KEY (client_id) REFERENCES client (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE client_clients_groups ADD CONSTRAINT FK_D479AF185E79BC83 FOREIGN KEY (clients_groups_id) REFERENCES clients_groups (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE client_organisations');
        $this->addSql('ALTER TABLE client ADD org_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE client ADD CONSTRAINT FK_C7440455F4837C1B FOREIGN KEY (org_id) REFERENCES organisations (id)');
        $this->addSql('CREATE INDEX IDX_C7440455F4837C1B ON client (org_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE client_organisations (client_id INT NOT NULL, organisations_id INT NOT NULL, INDEX IDX_A05263987A3DA19F (organisations_id), INDEX IDX_A052639819EB6921 (client_id), PRIMARY KEY(client_id, organisations_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE client_organisations ADD CONSTRAINT FK_A052639819EB6921 FOREIGN KEY (client_id) REFERENCES client (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE client_organisations ADD CONSTRAINT FK_A05263987A3DA19F FOREIGN KEY (organisations_id) REFERENCES organisations (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE client_clients_groups');
        $this->addSql('ALTER TABLE client DROP FOREIGN KEY FK_C7440455F4837C1B');
        $this->addSql('DROP INDEX IDX_C7440455F4837C1B ON client');
        $this->addSql('ALTER TABLE client DROP org_id');
    }
}
