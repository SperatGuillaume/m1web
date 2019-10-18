<?php

namespace App\Front\Controller;
use App\Front\Controller\AbstractController;

class NotFoundController extends AbstractController{

    public function index(array $uriVars = []){

        //$date = new \DateTime();
        $this->render('notfound/index');
    }

}