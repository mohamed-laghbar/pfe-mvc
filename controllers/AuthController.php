<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\User;

class AuthController extends Controller
{



    public function products()
    {
        $this->setLayout('main');
        return $this->render('products');
    }


   

    public function build_your_system()
    {
        $this->setLayout('main');
        return $this->render('build-your-system');
    }



    public function shop()
    {
        $this->setLayout('main');
        return $this->render('shop');
    }

   
    
}