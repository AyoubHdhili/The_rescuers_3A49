<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230209132028 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE emplacement (code_postal INT AUTO_INCREMENT NOT NULL, ville VARCHAR(255) NOT NULL, delegation VARCHAR(255) NOT NULL, PRIMARY KEY(code_postal)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE seance ADD emplacement_id INT NOT NULL');
        $this->addSql('ALTER TABLE seance ADD CONSTRAINT FK_DF7DFD0EC4598A51 FOREIGN KEY (emplacement_id) REFERENCES emplacement (code_postal)');
        $this->addSql('CREATE INDEX IDX_DF7DFD0EC4598A51 ON seance (emplacement_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE seance DROP FOREIGN KEY FK_DF7DFD0EC4598A51');
        $this->addSql('DROP TABLE emplacement');
        $this->addSql('DROP INDEX IDX_DF7DFD0EC4598A51 ON seance');
        $this->addSql('ALTER TABLE seance DROP emplacement_id');
    }
}
