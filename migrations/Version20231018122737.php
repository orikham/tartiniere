<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231018122737 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE format_products (format_id INT NOT NULL, products_id INT NOT NULL, INDEX IDX_14806A8ED629F605 (format_id), INDEX IDX_14806A8E6C8A81A9 (products_id), PRIMARY KEY(format_id, products_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE format_products ADD CONSTRAINT FK_14806A8ED629F605 FOREIGN KEY (format_id) REFERENCES format (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE format_products ADD CONSTRAINT FK_14806A8E6C8A81A9 FOREIGN KEY (products_id) REFERENCES products (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE format_products DROP FOREIGN KEY FK_14806A8ED629F605');
        $this->addSql('ALTER TABLE format_products DROP FOREIGN KEY FK_14806A8E6C8A81A9');
        $this->addSql('DROP TABLE format_products');
    }
}
