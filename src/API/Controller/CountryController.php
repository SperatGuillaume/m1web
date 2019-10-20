<?php


namespace App\API\Controller;

use App\API\Controller\AbstractController;
use App\API\Repository\CountryRepository;
use App\API\Repository\CityRepository;

class CountryController extends AbstractController{


    private $cityRepository;
    private $countryRepository;

    public function __construct(CountryRepository $countryRepository, CityRepository $cityRepository){
        $this->countryRepository = $countryRepository;
        $this->cityRepository = $cityRepository;

    }

    public function index(array $uriVars = []){




        $this->render([
            'countries' => $this->countryRepository->findAll()
        ]);
    }
}