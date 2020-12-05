<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201204125617 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, price_type_id_id INT DEFAULT NULL, login VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, options LONGTEXT DEFAULT NULL, auth_key VARCHAR(32) DEFAULT NULL, verify_code VARCHAR(7) DEFAULT NULL, password_hash VARCHAR(255) NOT NULL, password_reset_token VARCHAR(255) DEFAULT NULL, active SMALLINT NOT NULL, created_at INT NOT NULL, updated_at INT NOT NULL, INDEX IDX_C7440455C5C016A4 (price_type_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE client_organisations (client_id INT NOT NULL, organisations_id INT NOT NULL, INDEX IDX_A052639819EB6921 (client_id), INDEX IDX_A05263987A3DA19F (organisations_id), PRIMARY KEY(client_id, organisations_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE clients_groups (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, info LONGTEXT DEFAULT NULL, active SMALLINT NOT NULL, created_at INT NOT NULL, updated_at INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE clients_profile (id INT AUTO_INCREMENT NOT NULL, client_id_id INT DEFAULT NULL, phone NUMERIC(10, 0) DEFAULT NULL, social_whatsapp VARCHAR(255) DEFAULT NULL, phone_vercode VARCHAR(20) DEFAULT NULL, UNIQUE INDEX UNIQ_BF3C0A00DC2902E0 (client_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE organisations (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, info LONGTEXT DEFAULT NULL, social_instagram VARCHAR(255) DEFAULT NULL, country VARCHAR(255) DEFAULT NULL, region VARCHAR(255) DEFAULT NULL, city VARCHAR(255) DEFAULT NULL, geo_location VARCHAR(255) DEFAULT NULL, address VARCHAR(255) DEFAULT NULL, active SMALLINT NOT NULL, created_at INT NOT NULL, updated_at INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE price_type (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, system SMALLINT DEFAULT NULL, active SMALLINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE client ADD CONSTRAINT FK_C7440455C5C016A4 FOREIGN KEY (price_type_id_id) REFERENCES price_type (id)');
        $this->addSql('ALTER TABLE client_organisations ADD CONSTRAINT FK_A052639819EB6921 FOREIGN KEY (client_id) REFERENCES client (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE client_organisations ADD CONSTRAINT FK_A05263987A3DA19F FOREIGN KEY (organisations_id) REFERENCES organisations (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE clients_profile ADD CONSTRAINT FK_BF3C0A00DC2902E0 FOREIGN KEY (client_id_id) REFERENCES client (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client_organisations DROP FOREIGN KEY FK_A052639819EB6921');
        $this->addSql('ALTER TABLE clients_profile DROP FOREIGN KEY FK_BF3C0A00DC2902E0');
        $this->addSql('ALTER TABLE client_organisations DROP FOREIGN KEY FK_A05263987A3DA19F');
        $this->addSql('ALTER TABLE client DROP FOREIGN KEY FK_C7440455C5C016A4');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE client_organisations');
        $this->addSql('DROP TABLE clients_groups');
        $this->addSql('DROP TABLE clients_profile');
        $this->addSql('DROP TABLE organisations');
        $this->addSql('DROP TABLE price_type');
    }
}
