<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201204183751 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE brands ADD catalog_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE brands ADD CONSTRAINT FK_7EA24434CC3C66FC FOREIGN KEY (catalog_id) REFERENCES catalog (id)');
        $this->addSql('CREATE INDEX IDX_7EA24434CC3C66FC ON brands (catalog_id)');
        $this->addSql('ALTER TABLE catalog ADD сфcaty_id INT DEFAULT NULL, ADD sku VARCHAR(255) DEFAULT NULL, ADD name VARCHAR(255) DEFAULT NULL, ADD short_info LONGTEXT DEFAULT NULL, ADD description LONGTEXT DEFAULT NULL, ADD images LONGTEXT DEFAULT NULL, ADD active SMALLINT NOT NULL, ADD created_at INT NOT NULL, ADD updated_at INT NOT NULL, ADD uid VARCHAR(255) DEFAULT NULL, ADD options LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:json)\'');
        $this->addSql('ALTER TABLE catalog ADD CONSTRAINT FK_1B2C3247820F054E FOREIGN KEY (сфcaty_id) REFERENCES categories (id)');
        $this->addSql('CREATE INDEX IDX_1B2C3247820F054E ON catalog (сфcaty_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE brands DROP FOREIGN KEY FK_7EA24434CC3C66FC');
        $this->addSql('DROP INDEX IDX_7EA24434CC3C66FC ON brands');
        $this->addSql('ALTER TABLE brands DROP catalog_id');
        $this->addSql('ALTER TABLE catalog DROP FOREIGN KEY FK_1B2C3247820F054E');
        $this->addSql('DROP INDEX IDX_1B2C3247820F054E ON catalog');
        $this->addSql('ALTER TABLE catalog DROP сфcaty_id, DROP sku, DROP name, DROP short_info, DROP description, DROP images, DROP active, DROP created_at, DROP updated_at, DROP uid, DROP options');
    }
}
