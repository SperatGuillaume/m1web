<?php

namespace App\API\Entity;

use App\API\Core\Container;

class Country implements \JsonSerializable {

    private $id;

    private $name;

    private $city_id;

    /**
     * @return mixed
     */
    public function getId():?int
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id):?int
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName():string
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name):string
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getCityId():?int
    {
       return $this->city_id;

    }

    /**
     * @param mixed $city_id
     */
    public function setCityId($city_id):?int
    {
        $this->city_id = $city_id;
    }


    public function getCity(){
        $container = new Container();
        $city = $container->get('repository.city');

        $test = $city->findById($this->city_id);
        return $test;
    }


    public function jsonSerialize(){
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'city_id' => $this->getCityId(),
            'city' => $this->getCity()
        ];
    }

}