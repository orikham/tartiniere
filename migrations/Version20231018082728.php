<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231018082728 extends AbstractMigration
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
        $this->addSql('ALTER TABLE format_carpro DROP FOREIGN KEY FK_B09D03AAD629F605');
        $this->addSql('ALTER TABLE format_carpro DROP FOREIGN KEY FK_B09D03AA96248DF1');
        $this->addSql('ALTER TABLE pproducts DROP FOREIGN KEY FK_C03252486C8A81A9');
        $this->addSql('DROP TABLE format_carpro');
        $this->addSql('DROP TABLE pproducts');
        $this->addSql('ALTER TABLE carpro DROP FOREIGN KEY FK_CE33E5501AD5CDBF');
        $this->addSql('DROP INDEX IDX_CE33E5501AD5CDBF ON carpro');
        $this->addSql('ALTER TABLE carpro DROP cart_id');
        $this->addSql('ALTER TABLE products DROP FOREIGN KEY FK_B3BA5A5A1C83F75');
        $this->addSql('DROP INDEX IDX_B3BA5A5A1C83F75 ON products');
        $this->addSql('ALTER TABLE products DROP prod_id');
    }
}
