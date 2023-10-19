<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231019073936 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE products ADD carpro_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE products ADD CONSTRAINT FK_B3BA5A5A6C8A81A9 FOREIGN KEY (carpro_id) REFERENCES carpro (id)');
        $this->addSql('CREATE INDEX IDX_B3BA5A5A6C8A81A9 ON products (carpro_id)');
        $this->addSql('ALTER TABLE cart DROP FOREIGN KEY FK_BA388B796248DF1');
        $this->addSql('DROP INDEX IDX_BA388B796248DF1 ON cart');
        $this->addSql('ALTER TABLE cart DROP carpro_id');
    }
    
    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE products DROP FOREIGN KEY FK_B3BA5A5A6C8A81A9');
        $this->addSql('DROP INDEX IDX_B3BA5A5A6C8A81A9 ON products');
        $this->addSql('ALTER TABLE products DROP carpro_id');
        $this->addSql('ALTER TABLE cart ADD carpro_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE cart ADD CONSTRAINT FK_BA388B796248DF1 FOREIGN KEY (carpro_id) REFERENCES carpro (id)');
        $this->addSql('CREATE INDEX IDX_BA388B796248DF1 ON cart (carpro_id)');
    }
    
}
