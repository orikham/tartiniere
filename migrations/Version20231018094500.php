<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231018094500 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE products_categories (products_id INT NOT NULL, categories_id INT NOT NULL, INDEX IDX_E8ACBE766C8A81A9 (products_id), INDEX IDX_E8ACBE76A21214B7 (categories_id), PRIMARY KEY(products_id, categories_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE products_categories ADD CONSTRAINT FK_E8ACBE766C8A81A9 FOREIGN KEY (products_id) REFERENCES products (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE products_categories ADD CONSTRAINT FK_E8ACBE76A21214B7 FOREIGN KEY (categories_id) REFERENCES categories (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE format_carpro DROP FOREIGN KEY FK_B09D03AAD629F605');
        $this->addSql('ALTER TABLE format_carpro DROP FOREIGN KEY FK_B09D03AA96248DF1');
        $this->addSql('ALTER TABLE pproducts DROP FOREIGN KEY FK_C03252486C8A81A9');
        $this->addSql('DROP TABLE format_carpro');
        $this->addSql('DROP TABLE pproducts');
        $this->addSql('ALTER TABLE carpro DROP FOREIGN KEY FK_CE33E5501AD5CDBF');
        $this->addSql('DROP INDEX IDX_CE33E5501AD5CDBF ON carpro');
        $this->addSql('ALTER TABLE carpro DROP cart_id');
    }
}
