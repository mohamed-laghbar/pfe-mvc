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



    public function user_login()
    {

        $login = new loginModel();
        $stmt = $login->GetUser();
        if($stmt->rowCount() == 1){
            $result = $stmt->fetch();
            $_SESSION['user_name'] = $result['name'];
            $_SESSION['user_id'] = $result['id'];
            $_SESSION['user_email'] = $result['email'];
            $_SESSION['user_phone'] = $result['phone'];
            $_SESSION['user_adress'] = $result['adress'];
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


    public function login_admin(){
        if(!empty($_SESSION['admin_id'])){
            $this->setLayout('sidebar');
            return $this->render('orders'); 

        }else
        $this->setLayout('auth');
        return $this->render('admin'); 
     }
    

     public function check_admin_login(){
        $loginModel = new loginModel;
       $stmt= $loginModel->get_admin_account($_POST['username'],$_POST['password']);
     $result = count($stmt->fetchAll()) ;

       if($result == 1){
        $_SESSION['admin_id'] = $_POST['username'];
        $this->setLayout('sidebar');
        return $this->render('orders');
         }else $this->setLayout('auth');
       return $this->render('admin', ['errors'=>'Invalid Email or Password!']); 
         
     }

     public function admin_lougout(){

        unset($_SESSION['admin_id']);
        header('location:/');
     }





}