<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231019091605 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE carpro ADD cart_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE carpro ADD CONSTRAINT FK_CE33E5501AD5CDBF FOREIGN KEY (cart_id) REFERENCES cart (id)');
        $this->addSql('CREATE INDEX IDX_CE33E5501AD5CDBF ON carpro (cart_id)');
        $this->addSql('ALTER TABLE cart DROP FOREIGN KEY FK_BA388B7A76ED395');
        $this->addSql('DROP INDEX IDX_BA388B779F37AE5 ON cart');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE carpro DROP FOREIGN KEY FK_CE33E5501AD5CDBF');
        $this->addSql('DROP INDEX IDX_CE33E5501AD5CDBF ON carpro');
        $this->addSql('ALTER TABLE carpro DROP cart_id');
        $this->addSql('CREATE INDEX IDX_BA388B779F37AE5 ON cart (user_id)');
    }
}
