<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230418085333 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE movie_has_people (id INT AUTO_INCREMENT NOT NULL, movie_id_id INT NOT NULL, type_id_id INT NOT NULL, people_id_id INT NOT NULL, role VARCHAR(255) NOT NULL, significance VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_EDC40D8110684CB (movie_id_id), UNIQUE INDEX UNIQ_EDC40D81714819A0 (type_id_id), UNIQUE INDEX UNIQ_EDC40D81B427E417 (people_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE movie_has_type (id INT AUTO_INCREMENT NOT NULL, movie_id_id INT NOT NULL, type_id_id INT NOT NULL, UNIQUE INDEX UNIQ_D7417FB10684CB (movie_id_id), UNIQUE INDEX UNIQ_D7417FB714819A0 (type_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE people (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, date_of_birth DATE NOT NULL, nationality VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE movie_has_people ADD CONSTRAINT FK_EDC40D8110684CB FOREIGN KEY (movie_id_id) REFERENCES movie (id)');
        $this->addSql('ALTER TABLE movie_has_people ADD CONSTRAINT FK_EDC40D81714819A0 FOREIGN KEY (type_id_id) REFERENCES type (id)');
        $this->addSql('ALTER TABLE movie_has_people ADD CONSTRAINT FK_EDC40D81B427E417 FOREIGN KEY (people_id_id) REFERENCES people (id)');
        $this->addSql('ALTER TABLE movie_has_type ADD CONSTRAINT FK_D7417FB10684CB FOREIGN KEY (movie_id_id) REFERENCES movie (id)');
        $this->addSql('ALTER TABLE movie_has_type ADD CONSTRAINT FK_D7417FB714819A0 FOREIGN KEY (type_id_id) REFERENCES type (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE movie_has_people DROP FOREIGN KEY FK_EDC40D8110684CB');
        $this->addSql('ALTER TABLE movie_has_people DROP FOREIGN KEY FK_EDC40D81714819A0');
        $this->addSql('ALTER TABLE movie_has_people DROP FOREIGN KEY FK_EDC40D81B427E417');
        $this->addSql('ALTER TABLE movie_has_type DROP FOREIGN KEY FK_D7417FB10684CB');
        $this->addSql('ALTER TABLE movie_has_type DROP FOREIGN KEY FK_D7417FB714819A0');
        $this->addSql('DROP TABLE movie_has_people');
        $this->addSql('DROP TABLE movie_has_type');
        $this->addSql('DROP TABLE people');
    }
}
