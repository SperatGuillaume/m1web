<?php


namespace App\API\Repository;

use App\API\Core\Database;


class CityRepository{

    private $database;

    private $connection;

    public function __construct(Database $database){
        $this->database = $database;
        $this->connection = $this->database->connect();
    }

    public function findAll():array{

        $sql = "
            SELECT city.*
            FROM destination.city;
        ";

        $query = $this->connection->prepare($sql);
        $query->execute();

        $results = $query->fetchAll(\PDO::FETCH_CLASS, 'App\API\Entity\City');

        return $results;

    }

    public function findById(int $id){
        $sql = "
            SELECT country.*
            FROM destination.country
            WHERE country.id=$id;
        ";
        $query = $this->connection->prepare($sql);
        $query->execute([
            'id'=>$id
        ]);

        $results = $query->fetchObject('App\API\Entity\City');

        return $results;
    }

}