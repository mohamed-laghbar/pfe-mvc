<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\models\PackagesModel;
use app\core\Database;
use app\core\Request;
use app\models\CardModel;
use app\models\OrdersModel;

;

class OrdersController extends Controller{
public function render_orders(){
    $ord = new OrdersModel;
        if(!empty($_SESSION['admin_id'])){
          $orders =  $ord->select_all_orders() ;


        $this->setLayout('sidebar');
        return $this->render('orders',[  'orders'  =>  $orders ]);

       }else   header('location:admin');
        
    

}







}