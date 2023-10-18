<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231018070143 extends AbstractMigration
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
        $this->addSql('DROP TABLE format');
        $this->addSql('DROP TABLE format_carpro');
    }
}
