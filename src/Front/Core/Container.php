<?php

namespace  App\Front\Core;


class Container{



    public function get(string $idService){


        $services =[
          'controller.homepage' => function(){ return new \App\Front\Controller\HomepageController();},
          'controller.country' => function(){ return new \App\Front\Controller\CountryController();},
          'controller.not.found' => function(){ return new \App\Front\Controller\NotFoundController();},
        ];

        return $services[$idService]();
    }
}