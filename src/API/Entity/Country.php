<?php

namespace App\API\Entity;

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


    public function jsonSerialize(){
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'city_id' => $this->getCityId()
        ];
    }

}