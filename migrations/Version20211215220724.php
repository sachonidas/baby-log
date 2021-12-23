<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211215220724 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE night_awakenings (id INT AUTO_INCREMENT NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', time DATE NOT NULL, how_awake VARCHAR(255) NOT NULL, duration_sleep VARCHAR(255) NOT NULL, what_we_do_awake VARCHAR(255) NOT NULL, sleep_again DATETIME NOT NULL, how_to_sleep_again VARCHAR(255) NOT NULL, elapsed_time_between_sleeps DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE routine (id INT AUTO_INCREMENT NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', time VARCHAR(255) NOT NULL, what_we_do VARCHAR(255) NOT NULL, activity_level VARCHAR(255) NOT NULL, noise_level VARCHAR(255) NOT NULL, light_level VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE night_awakenings');
        $this->addSql('DROP TABLE routine');
    }
}
