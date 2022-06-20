<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\models\PackagesModel;
use app\core\Database;
use app\core\Request;
use app\models\CardModel;;

class CheckoutController extends CardController
{
 
    public function checkout_form(){
        $this->newObj    = new PackagesModel ;
        $this->fooo = $this->newObj->display_product_cart();
        $this->totalPrice = $this->newObj->total_price_cart();
        
                    //   print_r($totalPrice) ;
                     $this->setLayout('main');
                     return $this->render('checkout',[  'fooo'  =>  $this->fooo , 'totalPrice' => $this->totalPrice ] );
    }

   
            
    

        



}






