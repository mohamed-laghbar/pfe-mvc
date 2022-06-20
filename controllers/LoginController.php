<?php
namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\models\loginModel;
use app\core\Database;
use app\core\Request;

class LoginController extends  Controller{
public function admin_login(){

    $login = new loginModel();
    if($login->GetUser() == 1){
        $this->setLayout('sidebar');
        return $this->render('orders');
        
   
    } else{
        $this->setLayout('auth');
        return $this->render('login',['errors'=>'Invalid Email or Password!']);

    }
    
}


}