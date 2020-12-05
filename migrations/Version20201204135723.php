<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201204135723 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE clients_profile DROP FOREIGN KEY FK_BF3C0A00DC2902E0');
        $this->addSql('DROP INDEX UNIQ_BF3C0A00DC2902E0 ON clients_profile');
        $this->addSql('ALTER TABLE clients_profile CHANGE client_id_id client_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE clients_profile ADD CONSTRAINT FK_BF3C0A0019EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_BF3C0A0019EB6921 ON clients_profile (client_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE clients_profile DROP FOREIGN KEY FK_BF3C0A0019EB6921');
        $this->addSql('DROP INDEX UNIQ_BF3C0A0019EB6921 ON clients_profile');
        $this->addSql('ALTER TABLE clients_profile CHANGE client_id client_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE clients_profile ADD CONSTRAINT FK_BF3C0A00DC2902E0 FOREIGN KEY (client_id_id) REFERENCES client (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_BF3C0A00DC2902E0 ON clients_profile (client_id_id)');
    }
}
