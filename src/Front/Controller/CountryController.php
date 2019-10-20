<?php

namespace App\Front\Controller;
use App\API\Repository\CityRepository;
use App\API\Repository\CountryRepository;
class CountryController extends AbstractController
{

    /**
     * @param array $uriVars
     */
    public function index(array $uriVars = [])
    {

        $this->render('country/index');
    }
}