<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201204111542 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE admin_users_profile DROP FOREIGN KEY FK_AF9501A2A76ED395');
        $this->addSql('ALTER TABLE catalog_import DROP FOREIGN KEY FK_2F4AD654A76ED395');
        $this->addSql('ALTER TABLE orders DROP FOREIGN KEY FK_E52FFDEE783E3463');
        $this->addSql('ALTER TABLE orders_history DROP FOREIGN KEY FK_D6CF0230783E3463');
        $this->addSql('ALTER TABLE organisations DROP FOREIGN KEY FK_D7E459AC783E3463');
        $this->addSql('ALTER TABLE attributes_fields DROP FOREIGN KEY FK_A2932AD6BAAF4009');
        $this->addSql('ALTER TABLE categories DROP FOREIGN KEY FK_3AF34668B6E62EFA');
        $this->addSql('ALTER TABLE cart DROP FOREIGN KEY FK_BA388B74584665A');
        $this->addSql('ALTER TABLE catalog_price DROP FOREIGN KEY FK_73DB43604584665A');
        $this->addSql('ALTER TABLE orders_products DROP FOREIGN KEY FK_749C879C4584665A');
        $this->addSql('ALTER TABLE promo_catalog DROP FOREIGN KEY FK_13588A75CC3C66FC');
        $this->addSql('ALTER TABLE catalog DROP FOREIGN KEY FK_1B2C324712469DE2');
        $this->addSql('ALTER TABLE categories DROP FOREIGN KEY FK_3AF34668727ACA70');
        $this->addSql('ALTER TABLE categories DROP FOREIGN KEY FK_3AF34668A977936C');
        $this->addSql('ALTER TABLE promo DROP FOREIGN KEY FK_B0139AFB12469DE2');
        $this->addSql('ALTER TABLE access_token DROP FOREIGN KEY FK_B6A2DD6819EB6921');
        $this->addSql('ALTER TABLE cart DROP FOREIGN KEY FK_BA388B719EB6921');
        $this->addSql('ALTER TABLE clients_profile DROP FOREIGN KEY FK_BF3C0A0019EB6921');
        $this->addSql('ALTER TABLE orders DROP FOREIGN KEY FK_E52FFDEE19EB6921');
        $this->addSql('ALTER TABLE orders_history DROP FOREIGN KEY FK_D6CF023019EB6921');
        $this->addSql('ALTER TABLE client DROP FOREIGN KEY FK_C74404551D829221');
        $this->addSql('ALTER TABLE orders_history DROP FOREIGN KEY FK_D6CF02307742FDB3');
        $this->addSql('ALTER TABLE orders_products DROP FOREIGN KEY FK_749C879C7742FDB3');
        $this->addSql('ALTER TABLE orders DROP FOREIGN KEY FK_E52FFDEE6BF700BD');
        $this->addSql('ALTER TABLE orders_history DROP FOREIGN KEY FK_D6CF02306BF700BD');
        $this->addSql('ALTER TABLE client DROP FOREIGN KEY FK_C7440455F4837C1B');
        $this->addSql('ALTER TABLE client DROP FOREIGN KEY FK_C7440455AE6A44CF');
        $this->addSql('ALTER TABLE promo_catalog DROP FOREIGN KEY FK_13588A75D0C07AFF');
        $this->addSql('DROP TABLE access_token');
        $this->addSql('DROP TABLE admin_user');
        $this->addSql('DROP TABLE admin_users_profile');
        $this->addSql('DROP TABLE attributes');
        $this->addSql('DROP TABLE attributes_fields');
        $this->addSql('DROP TABLE cart');
        $this->addSql('DROP TABLE catalog');
        $this->addSql('DROP TABLE catalog_import');
        $this->addSql('DROP TABLE catalog_price');
        $this->addSql('DROP TABLE categories');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE clients_groups');
        $this->addSql('DROP TABLE clients_profile');
        $this->addSql('DROP TABLE crm_sync');
        $this->addSql('DROP TABLE orders');
        $this->addSql('DROP TABLE orders_history');
        $this->addSql('DROP TABLE orders_products');
        $this->addSql('DROP TABLE orders_status');
        $this->addSql('DROP TABLE organisations');
        $this->addSql('DROP TABLE price_type');
        $this->addSql('DROP TABLE promo');
        $this->addSql('DROP TABLE promo_catalog');
        $this->addSql('ALTER TABLE brands CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE active active SMALLINT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE access_token (id INT UNSIGNED AUTO_INCREMENT NOT NULL, client_id INT UNSIGNED DEFAULT NULL, token VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, title VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, options VARCHAR(1000) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, expired_at INT DEFAULT NULL, created_at INT NOT NULL, updated_at INT NOT NULL, UNIQUE INDEX UNIQ_B6A2DD6819EB6921 (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE admin_user (id INT UNSIGNED AUTO_INCREMENT NOT NULL, login VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, email VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, name VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, auth_key VARCHAR(32) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, options VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, password_hash VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, password_reset_token VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, active TINYINT(1) NOT NULL, created_at INT NOT NULL, updated_at INT NOT NULL, UNIQUE INDEX UNIQ_AD8A54A9E7927C74 (email), UNIQUE INDEX UNIQ_AD8A54A9187D9ED4 (auth_key), UNIQUE INDEX UNIQ_AD8A54A9AA08CB10 (login), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE admin_users_profile (id INT UNSIGNED AUTO_INCREMENT NOT NULL, user_id INT UNSIGNED NOT NULL, phone NUMERIC(10, 0) DEFAULT NULL, phone_vercode VARCHAR(20) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, UNIQUE INDEX UNIQ_AF9501A2A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE attributes (id INT UNSIGNED AUTO_INCREMENT NOT NULL, title VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, table_name VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, options LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, active TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE attributes_fields (id INT UNSIGNED AUTO_INCREMENT NOT NULL, attributes_id INT UNSIGNED DEFAULT NULL, alias VARCHAR(1500) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, name VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, description VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, required TINYINT(1) NOT NULL, readonly TINYINT(1) NOT NULL, output_type VARCHAR(25) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, value VARCHAR(1000) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, common SMALLINT DEFAULT NULL, show_in_filter SMALLINT DEFAULT NULL, open SMALLINT DEFAULT NULL, type VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, default_value VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, orderr SMALLINT DEFAULT NULL, INDEX IDX_A2932AD6BAAF4009 (attributes_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE cart (id INT UNSIGNED AUTO_INCREMENT NOT NULL, client_id INT UNSIGNED DEFAULT NULL, product_id INT UNSIGNED DEFAULT NULL, amount INT DEFAULT NULL, price NUMERIC(15, 2) DEFAULT NULL, price_client NUMERIC(15, 2) DEFAULT NULL, created_at INT NOT NULL, updated_at INT NOT NULL, INDEX IDX_BA388B74584665A (product_id), INDEX IDX_BA388B719EB6921 (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE catalog (id INT UNSIGNED AUTO_INCREMENT NOT NULL, brand_id INT UNSIGNED DEFAULT NULL, category_id INT UNSIGNED DEFAULT NULL, sku VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, name VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, short_info LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, description LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, images LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, active TINYINT(1) NOT NULL, created_at INT NOT NULL, updated_at INT NOT NULL, uid VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, options LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:json)\', INDEX IDX_1B2C324744F5D008 (brand_id), INDEX IDX_1B2C324712469DE2 (category_id), UNIQUE INDEX UNIQ_1B2C3247539B0606 (uid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE catalog_import (id INT UNSIGNED AUTO_INCREMENT NOT NULL, user_id INT UNSIGNED DEFAULT NULL, file_name VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, date INT DEFAULT NULL, result VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, options LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_2F4AD654A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE catalog_price (id INT AUTO_INCREMENT NOT NULL, product_id INT UNSIGNED DEFAULT NULL, price NUMERIC(15, 2) DEFAULT NULL, created_at INT NOT NULL, updated_at INT NOT NULL, UNIQUE INDEX UNIQ_73DB43604584665A (product_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE categories (id INT UNSIGNED AUTO_INCREMENT NOT NULL, attribute_id INT UNSIGNED DEFAULT NULL, tree_root INT UNSIGNED DEFAULT NULL, parent_id INT UNSIGNED DEFAULT NULL, title VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, description LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, options LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, sys_lft INT DEFAULT NULL, sys_rgt INT DEFAULT NULL, sys_level INT DEFAULT NULL, active TINYINT(1) DEFAULT NULL, created_at INT NOT NULL, updated_at INT NOT NULL, INDEX IDX_3AF34668A977936C (tree_root), INDEX IDX_3AF34668727ACA70 (parent_id), INDEX IDX_3AF34668B6E62EFA (attribute_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE client (id INT UNSIGNED AUTO_INCREMENT NOT NULL, groupp_id INT UNSIGNED DEFAULT NULL, org_id INT UNSIGNED DEFAULT NULL, price_type_id INT UNSIGNED DEFAULT NULL, login VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, email VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, name VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, options LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, auth_key VARCHAR(32) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, verify_code VARCHAR(7) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, password_hash VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, password_reset_token VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, active TINYINT(1) NOT NULL, created_at INT NOT NULL, updated_at INT NOT NULL, UNIQUE INDEX UNIQ_C7440455187D9ED4 (auth_key), INDEX IDX_C7440455AE6A44CF (price_type_id), INDEX IDX_C74404551D829221 (groupp_id), UNIQUE INDEX UNIQ_C7440455AA08CB10 (login), INDEX IDX_C7440455F4837C1B (org_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE clients_groups (id INT UNSIGNED AUTO_INCREMENT NOT NULL, title VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, info LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, active TINYINT(1) NOT NULL, created_at INT NOT NULL, updated_at INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE clients_profile (id INT UNSIGNED AUTO_INCREMENT NOT NULL, client_id INT UNSIGNED DEFAULT NULL, phone NUMERIC(10, 0) DEFAULT NULL, social_whatsapp VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, phone_vercode VARCHAR(20) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, UNIQUE INDEX UNIQ_BF3C0A0019EB6921 (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE crm_sync (id INT UNSIGNED AUTO_INCREMENT NOT NULL, title VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, options LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, updated_at INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE orders (id INT UNSIGNED AUTO_INCREMENT NOT NULL, client_id INT UNSIGNED DEFAULT NULL, manager_id INT UNSIGNED DEFAULT NULL, status_id INT UNSIGNED DEFAULT NULL, price NUMERIC(15, 2) DEFAULT NULL, price_client NUMERIC(15, 2) DEFAULT NULL, can_edit TINYINT(1) DEFAULT NULL, options VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, can_cancel TINYINT(1) DEFAULT NULL, created_at INT NOT NULL, updated_at INT NOT NULL, INDEX IDX_E52FFDEE783E3463 (manager_id), INDEX IDX_E52FFDEE6BF700BD (status_id), INDEX IDX_E52FFDEE19EB6921 (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE orders_history (id INT UNSIGNED AUTO_INCREMENT NOT NULL, orderr_id INT UNSIGNED DEFAULT NULL, client_id INT UNSIGNED DEFAULT NULL, manager_id INT UNSIGNED DEFAULT NULL, status_id INT UNSIGNED DEFAULT NULL, action VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, initiator SMALLINT DEFAULT NULL, params_old LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, params_new LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, options LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, created_at INT NOT NULL, updated_at INT NOT NULL, INDEX IDX_D6CF023019EB6921 (client_id), INDEX IDX_D6CF0230783E3463 (manager_id), UNIQUE INDEX UNIQ_D6CF02307742FDB3 (orderr_id), INDEX IDX_D6CF02306BF700BD (status_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE orders_products (id INT UNSIGNED AUTO_INCREMENT NOT NULL, orderr_id INT UNSIGNED DEFAULT NULL, product_id INT UNSIGNED DEFAULT NULL, amount INT DEFAULT NULL, price NUMERIC(15, 2) DEFAULT NULL, price_client NUMERIC(15, 2) DEFAULT NULL, status TINYINT(1) DEFAULT NULL, can_edit TINYINT(1) DEFAULT NULL, can_cancel TINYINT(1) DEFAULT NULL, created_at INT NOT NULL, updated_at INT NOT NULL, INDEX IDX_749C879C4584665A (product_id), INDEX IDX_749C879C7742FDB3 (orderr_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE orders_status (id INT UNSIGNED AUTO_INCREMENT NOT NULL, title VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, color VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, type VARCHAR(1) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, crm_amo_id INT DEFAULT NULL, crm_amo_title VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, active TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE organisations (id INT UNSIGNED AUTO_INCREMENT NOT NULL, manager_id INT UNSIGNED DEFAULT NULL, title VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, info LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, social_instagram VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, country VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, region VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, city VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, geo_location VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, address VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, active TINYINT(1) NOT NULL, created_at INT NOT NULL, updated_at INT NOT NULL, INDEX IDX_D7E459AC783E3463 (manager_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE price_type (id INT UNSIGNED AUTO_INCREMENT NOT NULL, title VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, system TINYINT(1) DEFAULT NULL, active TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE promo (id INT UNSIGNED AUTO_INCREMENT NOT NULL, category_id INT UNSIGNED DEFAULT NULL, title VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, text LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, images LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, options LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, discount_controller VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, start INT DEFAULT NULL, end INT DEFAULT NULL, active TINYINT(1) DEFAULT NULL, INDEX IDX_B0139AFB12469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE promo_catalog (promo_id INT UNSIGNED NOT NULL, catalog_id INT UNSIGNED NOT NULL, INDEX IDX_13588A75D0C07AFF (promo_id), INDEX IDX_13588A75CC3C66FC (catalog_id), PRIMARY KEY(promo_id, catalog_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE access_token ADD CONSTRAINT FK_B6A2DD6819EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE admin_users_profile ADD CONSTRAINT FK_AF9501A2A76ED395 FOREIGN KEY (user_id) REFERENCES admin_user (id)');
        $this->addSql('ALTER TABLE attributes_fields ADD CONSTRAINT FK_A2932AD6BAAF4009 FOREIGN KEY (attributes_id) REFERENCES attributes (id)');
        $this->addSql('ALTER TABLE cart ADD CONSTRAINT FK_BA388B719EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE cart ADD CONSTRAINT FK_BA388B74584665A FOREIGN KEY (product_id) REFERENCES catalog (id)');
        $this->addSql('ALTER TABLE catalog ADD CONSTRAINT FK_1B2C324712469DE2 FOREIGN KEY (category_id) REFERENCES categories (id)');
        $this->addSql('ALTER TABLE catalog ADD CONSTRAINT FK_1B2C324744F5D008 FOREIGN KEY (brand_id) REFERENCES brands (id)');
        $this->addSql('ALTER TABLE catalog_import ADD CONSTRAINT FK_2F4AD654A76ED395 FOREIGN KEY (user_id) REFERENCES admin_user (id)');
        $this->addSql('ALTER TABLE catalog_price ADD CONSTRAINT FK_73DB43604584665A FOREIGN KEY (product_id) REFERENCES catalog (id)');
        $this->addSql('ALTER TABLE categories ADD CONSTRAINT FK_3AF34668727ACA70 FOREIGN KEY (parent_id) REFERENCES categories (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE categories ADD CONSTRAINT FK_3AF34668A977936C FOREIGN KEY (tree_root) REFERENCES categories (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE categories ADD CONSTRAINT FK_3AF34668B6E62EFA FOREIGN KEY (attribute_id) REFERENCES attributes (id)');
        $this->addSql('ALTER TABLE client ADD CONSTRAINT FK_C74404551D829221 FOREIGN KEY (groupp_id) REFERENCES clients_groups (id)');
        $this->addSql('ALTER TABLE client ADD CONSTRAINT FK_C7440455AE6A44CF FOREIGN KEY (price_type_id) REFERENCES price_type (id)');
        $this->addSql('ALTER TABLE client ADD CONSTRAINT FK_C7440455F4837C1B FOREIGN KEY (org_id) REFERENCES organisations (id)');
        $this->addSql('ALTER TABLE clients_profile ADD CONSTRAINT FK_BF3C0A0019EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT FK_E52FFDEE19EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT FK_E52FFDEE6BF700BD FOREIGN KEY (status_id) REFERENCES orders_status (id)');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT FK_E52FFDEE783E3463 FOREIGN KEY (manager_id) REFERENCES admin_user (id)');
        $this->addSql('ALTER TABLE orders_history ADD CONSTRAINT FK_D6CF023019EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE orders_history ADD CONSTRAINT FK_D6CF02306BF700BD FOREIGN KEY (status_id) REFERENCES orders_status (id)');
        $this->addSql('ALTER TABLE orders_history ADD CONSTRAINT FK_D6CF02307742FDB3 FOREIGN KEY (orderr_id) REFERENCES orders (id)');
        $this->addSql('ALTER TABLE orders_history ADD CONSTRAINT FK_D6CF0230783E3463 FOREIGN KEY (manager_id) REFERENCES admin_user (id)');
        $this->addSql('ALTER TABLE orders_products ADD CONSTRAINT FK_749C879C4584665A FOREIGN KEY (product_id) REFERENCES catalog (id)');
        $this->addSql('ALTER TABLE orders_products ADD CONSTRAINT FK_749C879C7742FDB3 FOREIGN KEY (orderr_id) REFERENCES orders (id)');
        $this->addSql('ALTER TABLE organisations ADD CONSTRAINT FK_D7E459AC783E3463 FOREIGN KEY (manager_id) REFERENCES admin_user (id)');
        $this->addSql('ALTER TABLE promo ADD CONSTRAINT FK_B0139AFB12469DE2 FOREIGN KEY (category_id) REFERENCES categories (id)');
        $this->addSql('ALTER TABLE promo_catalog ADD CONSTRAINT FK_13588A75CC3C66FC FOREIGN KEY (catalog_id) REFERENCES catalog (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE promo_catalog ADD CONSTRAINT FK_13588A75D0C07AFF FOREIGN KEY (promo_id) REFERENCES promo (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE brands CHANGE id id INT UNSIGNED AUTO_INCREMENT NOT NULL, CHANGE active active TINYINT(1) NOT NULL');
    }
}
