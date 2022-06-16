<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\models\PackagesModel;
use app\core\Database;
use app\core\Request;

class CardController extends PackagesController
{

    public function card(){
        $newObj = new PackagesModel;
        $fooo =   $newObj->displayCart();
      
       
            $this->setLayout('main');
            return $this->render('card',[  'fooo'  =>  $fooo]);
        
    


    }




}






