<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200324162052 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE equipe (id_equipe INT AUTO_INCREMENT NOT NULL, nom_equipe VARCHAR(50) NOT NULL, nb_victoire INT DEFAULT NULL, nb_defaite INT DEFAULT NULL, nb_points INT NOT NULL, PRIMARY KEY(id_equipe)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE matchs (id_match INT AUTO_INCREMENT NOT NULL, date_match VARCHAR(15) NOT NULL, elim_directe VARCHAR(3) NOT NULL, type VARCHAR(30) NOT NULL, score_equipe1 INT NOT NULL, score_equipe2 INT NOT NULL, id_equipe1 INT NOT NULL, id_equipe2 INT NOT NULL, PRIMARY KEY(id_match)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE joueur ADD poste_joueur VARCHAR(11) NOT NULL, CHANGE nom_joueur nom_joueur VARCHAR(50) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE equipe');
        $this->addSql('DROP TABLE matchs');
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE joueur DROP poste_joueur, CHANGE nom_joueur nom_joueur VARCHAR(11) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
