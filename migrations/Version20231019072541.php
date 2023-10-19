<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231019072541 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE carpro DROP FOREIGN KEY FK_CE33E5506C8A81A9');
        $this->addSql('DROP INDEX IDX_CE33E5506C8A81A9 ON carpro');
        $this->addSql('ALTER TABLE carpro DROP products_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE carpro ADD products_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE carpro ADD CONSTRAINT FK_CE33E5506C8A81A9 FOREIGN KEY (products_id) REFERENCES products (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_CE33E5506C8A81A9 ON carpro (products_id)');
    }
}
