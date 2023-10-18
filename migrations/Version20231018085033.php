<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231018085033 extends AbstractMigration
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
        $this->addSql('ALTER TABLE carpro ADD cart_id INT DEFAULT NULL');
        $this->addSql('CREATE INDEX IDX_CE33E5501AD5CDBF ON carpro (cart_id)');
        $this->addSql('ALTER TABLE cart DROP FOREIGN KEY FK_BA388B796248DF1');
        $this->addSql('DROP INDEX IDX_BA388B796248DF1 ON cart');
        $this->addSql('ALTER TABLE cart CHANGE carpro_id carpro_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE cart ADD CONSTRAINT FK_BA388B76069DE96 FOREIGN KEY (carpro_id_id) REFERENCES carpro (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_BA388B76069DE96 ON cart (carpro_id_id)');
        $this->addSql('ALTER TABLE products ADD prod_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE products ADD CONSTRAINT FK_B3BA5A5A1C83F75 FOREIGN KEY (prod_id) REFERENCES carpro (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_B3BA5A5A1C83F75 ON products (prod_id)');
    }
}
