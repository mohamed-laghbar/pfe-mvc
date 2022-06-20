<?php
namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\models\loginModel;
use app\core\Database;
use app\core\Request;

class LoginController extends  Controller{

    public function login()
    {
        
        $this->setLayout('main');
        return $this->render('login');
    }



    public function admin_login()
    {

        $login = new loginModel();
        $stmt = $login->GetUser();
        if($stmt->rowCount() == 1){
            $result = $stmt->fetch();
            $_SESSION['name'] = $result['email'];
            $_SESSION['user_id'] = $result['id'];
            header("location:checkout");
        } else{
            $this->setLayout('main');
            return $this->render('login',['errors'=>'Invalid Email or Password!']);

        }
    }




    public function is_user_logged()
    {
        if(isset($_SESSION['user_id'])){
            return true;
        } else{
            return false;
        }
    }
    



}