<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201204191413 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE catalog_import (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, file_name VARCHAR(255) DEFAULT NULL, date INT DEFAULT NULL, result VARCHAR(255) DEFAULT NULL, options LONGTEXT DEFAULT NULL, INDEX IDX_2F4AD654A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE catalog_import ADD CONSTRAINT FK_2F4AD654A76ED395 FOREIGN KEY (user_id) REFERENCES admin_user (id)');
        $this->addSql('ALTER TABLE catalog_price ADD product_id INT DEFAULT NULL, ADD price NUMERIC(15, 2) NOT NULL, ADD created_at INT NOT NULL, ADD updated_at INT NOT NULL');
        $this->addSql('ALTER TABLE catalog_price ADD CONSTRAINT FK_73DB43604584665A FOREIGN KEY (product_id) REFERENCES catalog (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_73DB43604584665A ON catalog_price (product_id)');
        $this->addSql('ALTER TABLE orders ADD client_id INT DEFAULT NULL, ADD manager_id INT DEFAULT NULL, ADD status_id INT DEFAULT NULL, ADD orders_history_id INT DEFAULT NULL, ADD price NUMERIC(15, 2) DEFAULT NULL, ADD price_client NUMERIC(15, 2) DEFAULT NULL, ADD can_edit SMALLINT DEFAULT NULL, ADD options VARCHAR(255) DEFAULT NULL, ADD can_cancel SMALLINT DEFAULT NULL, ADD created_at INT NOT NULL, ADD updated_at INT NOT NULL');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT FK_E52FFDEE19EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT FK_E52FFDEE783E3463 FOREIGN KEY (manager_id) REFERENCES admin_user (id)');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT FK_E52FFDEE6BF700BD FOREIGN KEY (status_id) REFERENCES orders_status (id)');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT FK_E52FFDEE7BC79DD5 FOREIGN KEY (orders_history_id) REFERENCES orders_history (id)');
        $this->addSql('CREATE INDEX IDX_E52FFDEE19EB6921 ON orders (client_id)');
        $this->addSql('CREATE INDEX IDX_E52FFDEE783E3463 ON orders (manager_id)');
        $this->addSql('CREATE INDEX IDX_E52FFDEE6BF700BD ON orders (status_id)');
        $this->addSql('CREATE INDEX IDX_E52FFDEE7BC79DD5 ON orders (orders_history_id)');
        $this->addSql('ALTER TABLE orders_history ADD client_id INT DEFAULT NULL, ADD manager_id INT DEFAULT NULL, ADD status_id INT DEFAULT NULL, ADD action VARCHAR(255) DEFAULT NULL, ADD initiator SMALLINT DEFAULT NULL, ADD params_old LONGTEXT DEFAULT NULL, ADD params_new LONGTEXT NOT NULL, ADD options LONGTEXT DEFAULT NULL, ADD created_at INT NOT NULL, ADD updated_at INT NOT NULL');
        $this->addSql('ALTER TABLE orders_history ADD CONSTRAINT FK_D6CF023019EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE orders_history ADD CONSTRAINT FK_D6CF0230783E3463 FOREIGN KEY (manager_id) REFERENCES admin_user (id)');
        $this->addSql('ALTER TABLE orders_history ADD CONSTRAINT FK_D6CF02306BF700BD FOREIGN KEY (status_id) REFERENCES orders_status (id)');
        $this->addSql('CREATE INDEX IDX_D6CF023019EB6921 ON orders_history (client_id)');
        $this->addSql('CREATE INDEX IDX_D6CF0230783E3463 ON orders_history (manager_id)');
        $this->addSql('CREATE INDEX IDX_D6CF02306BF700BD ON orders_history (status_id)');
        $this->addSql('ALTER TABLE orders_status ADD title VARCHAR(255) DEFAULT NULL, ADD color VARCHAR(255) DEFAULT NULL, ADD type VARCHAR(1) DEFAULT NULL, ADD crm_amo_id INT DEFAULT NULL, ADD crm_amo_title VARCHAR(255) DEFAULT NULL, ADD active SMALLINT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE catalog_import');
        $this->addSql('ALTER TABLE catalog_price DROP FOREIGN KEY FK_73DB43604584665A');
        $this->addSql('DROP INDEX UNIQ_73DB43604584665A ON catalog_price');
        $this->addSql('ALTER TABLE catalog_price DROP product_id, DROP price, DROP created_at, DROP updated_at');
        $this->addSql('ALTER TABLE orders DROP FOREIGN KEY FK_E52FFDEE19EB6921');
        $this->addSql('ALTER TABLE orders DROP FOREIGN KEY FK_E52FFDEE783E3463');
        $this->addSql('ALTER TABLE orders DROP FOREIGN KEY FK_E52FFDEE6BF700BD');
        $this->addSql('ALTER TABLE orders DROP FOREIGN KEY FK_E52FFDEE7BC79DD5');
        $this->addSql('DROP INDEX IDX_E52FFDEE19EB6921 ON orders');
        $this->addSql('DROP INDEX IDX_E52FFDEE783E3463 ON orders');
        $this->addSql('DROP INDEX IDX_E52FFDEE6BF700BD ON orders');
        $this->addSql('DROP INDEX IDX_E52FFDEE7BC79DD5 ON orders');
        $this->addSql('ALTER TABLE orders DROP client_id, DROP manager_id, DROP status_id, DROP orders_history_id, DROP price, DROP price_client, DROP can_edit, DROP options, DROP can_cancel, DROP created_at, DROP updated_at');
        $this->addSql('ALTER TABLE orders_history DROP FOREIGN KEY FK_D6CF023019EB6921');
        $this->addSql('ALTER TABLE orders_history DROP FOREIGN KEY FK_D6CF0230783E3463');
        $this->addSql('ALTER TABLE orders_history DROP FOREIGN KEY FK_D6CF02306BF700BD');
        $this->addSql('DROP INDEX IDX_D6CF023019EB6921 ON orders_history');
        $this->addSql('DROP INDEX IDX_D6CF0230783E3463 ON orders_history');
        $this->addSql('DROP INDEX IDX_D6CF02306BF700BD ON orders_history');
        $this->addSql('ALTER TABLE orders_history DROP client_id, DROP manager_id, DROP status_id, DROP action, DROP initiator, DROP params_old, DROP params_new, DROP options, DROP created_at, DROP updated_at');
        $this->addSql('ALTER TABLE orders_status DROP title, DROP color, DROP type, DROP crm_amo_id, DROP crm_amo_title, DROP active');
    }
}
