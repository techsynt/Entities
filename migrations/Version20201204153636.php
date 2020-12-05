<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201204153636 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE attributes ADD title VARCHAR(255) DEFAULT NULL, ADD table_name VARCHAR(255) DEFAULT NULL, ADD options LONGTEXT DEFAULT NULL, ADD active SMALLINT NOT NULL');
        $this->addSql('ALTER TABLE attributes_fields ADD attributes_id INT DEFAULT NULL, ADD alias VARCHAR(1500) DEFAULT NULL, ADD name VARCHAR(100) DEFAULT NULL, ADD desctiption VARCHAR(255) DEFAULT NULL, ADD required SMALLINT NOT NULL, ADD readobly SMALLINT NOT NULL, ADD output_type VARCHAR(25) DEFAULT NULL, ADD value VARCHAR(1000) DEFAULT NULL, ADD common SMALLINT DEFAULT NULL, ADD show_in_filter SMALLINT DEFAULT NULL, ADD open SMALLINT DEFAULT NULL, ADD type VARCHAR(255) DEFAULT NULL, ADD default_value VARCHAR(255) DEFAULT NULL, ADD orderr SMALLINT DEFAULT NULL');
        $this->addSql('ALTER TABLE attributes_fields ADD CONSTRAINT FK_A2932AD6BAAF4009 FOREIGN KEY (attributes_id) REFERENCES attributes (id)');
        $this->addSql('CREATE INDEX IDX_A2932AD6BAAF4009 ON attributes_fields (attributes_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE attributes DROP title, DROP table_name, DROP options, DROP active');
        $this->addSql('ALTER TABLE attributes_fields DROP FOREIGN KEY FK_A2932AD6BAAF4009');
        $this->addSql('DROP INDEX IDX_A2932AD6BAAF4009 ON attributes_fields');
        $this->addSql('ALTER TABLE attributes_fields DROP attributes_id, DROP alias, DROP name, DROP desctiption, DROP required, DROP readobly, DROP output_type, DROP value, DROP common, DROP show_in_filter, DROP open, DROP type, DROP default_value, DROP orderr');
    }
}
