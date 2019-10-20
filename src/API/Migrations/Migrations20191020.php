<?php


namespace  App\API\Migrations;

use App\API\Migrations\AbstractMigrations;

require_once 'vendor/autoload.php';

class Migrations20191020 extends AbstractMigrations {

    protected  $sql = "
        INSERT INTO destination.country
        VALUES
          (NULL, 'France', 1),
          (NULL, 'Espagne', 2),
          (NULL, 'Angleterre', 3)
        ;
    ";



}