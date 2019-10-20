<?php


namespace  App\Front\Controller;

abstract class AbstractController{


    protected function render(string $view, array $uriVars = []):void{


        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
        extract($uriVars);
        require_once __DIR__."/../../../templates/$view.php";
    }
}