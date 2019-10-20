<?php


namespace App\API\Controller;

use App\API\Controller\AbstractController;
use App\API\Repository\CountryRepository;
use App\API\Repository\CityRepository;

class CountryController extends AbstractController{


    private $cityRespository;
    private $countryRepository;

    public function __construct(CountryRepository $countryRepository){
        $this->countryRepository = $countryRepository;
    }

    public function index(array $uriVars = []){

        //dump($this->cityRepository->findAll());
        /*$countries = $this->countryRepository->findAll();
        foreach ($countries as $k=>$country){

            $id=$country->getCityId();
            $city = $this->cityRespository->findById($id);
            dump($id);
        }*/
        //dump($results);


        $this->render([
            'countries' => $this->countryRepository->findAll()
        ]);
    }
}