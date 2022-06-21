<?php


namespace app\controllers;


use app\controllers\LoginController;
use app\core\Database;
use app\core\Request;
use app\models\CardModel;;
use app\core\Application;
use app\core\Controller;
use app\models\RegisterModel;

class RegisterController extends Controller
{
    public function index ()
    {
        $this->setLayout('main');
        return $this->render('register');
    }



    public function register ()
    {
        $register = new RegisterModel();
         $register->register_user();
        header('Location:login');

    }

    public function logout(){
        unset($_SESSION['user_name']);    
      
        $this->setLayout('main');
        return $this->render('home');
    }
}