<?php


namespace  App\API\Migrations;

use App\API\Migrations\AbstractMigrations;

require_once 'vendor/autoload.php';

class Migrations20191019 extends AbstractMigrations {

    protected  $sql = "
        INSERT INTO destination.city
        VALUES
          (NULL, 'paris', 'paris.jpg'),
          (NULL, 'madrid', 'lyon.jpg'),
          (NULL, 'londre', 'annecy.jpg')
        ;
    ";



}