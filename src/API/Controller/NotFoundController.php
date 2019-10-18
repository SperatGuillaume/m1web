<?php

namespace App\API\Controller;
use App\API\Controller\AbstractController;

class NotFoundController extends AbstractController{

    public function index(array $uriVars = []){

        //$date = new \DateTime();
        $this->render('notfound/index');
    }

}