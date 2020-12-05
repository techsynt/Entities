<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201205074426 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE orders_products (id INT AUTO_INCREMENT NOT NULL, orderr_id INT DEFAULT NULL, product_id INT DEFAULT NULL, amount INT DEFAULT NULL, price NUMERIC(15, 2) DEFAULT NULL, price_client NUMERIC(15, 2) DEFAULT NULL, status SMALLINT DEFAULT NULL, can_edit SMALLINT DEFAULT NULL, can_cancel SMALLINT DEFAULT NULL, created_at SMALLINT NOT NULL, updated_at INT NOT NULL, INDEX IDX_749C879C7742FDB3 (orderr_id), INDEX IDX_749C879C4584665A (product_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE orders_products ADD CONSTRAINT FK_749C879C7742FDB3 FOREIGN KEY (orderr_id) REFERENCES orders (id)');
        $this->addSql('ALTER TABLE orders_products ADD CONSTRAINT FK_749C879C4584665A FOREIGN KEY (product_id) REFERENCES catalog (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE orders_products');
    }
}
