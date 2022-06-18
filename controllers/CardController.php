<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\models\PackagesModel;
use app\core\Database;
use app\core\Request;
use app\models\CardModel;;

class CardController extends PackagesController
{
   public $newObj ;
   public $fooo ;  
   public $totalPrice ;

    public function card(){
$this->newObj    = new PackagesModel ;
$this->fooo = $this->newObj->displayCart();
$this->totalPrice = $this->newObj->totalPrice();

            //   print_r($totalPrice) ;
             $this->setLayout('main');
             return $this->render('card',[  'fooo'  =>  $this->fooo , 'totalPrice' => $this->totalPrice] );
        
    }

    public function removeProduct(){
       
        $obj = new CardModel;
        if(!empty($_POST['delete_id'])){
        $p_id = $_POST['delete_id'];
          $obj->remove_id_from_session($p_id);
         return $this ->card();


        }
    }
     

    



}






