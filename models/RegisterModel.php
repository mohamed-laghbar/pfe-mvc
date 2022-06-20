<?php

namespace app\models;

use app\core\Database;
use  app\controllers\LoginController;
use  app\controllers\AuthController;
use app\core\DbModel;
use app\core\Application;

class RegisterModel extends DbModel {

    public function tableName(): string
    {
        return 'login';
    }

    public function attributes(): array
    {
        return [];
    }
   
    public function rules(): array
    {
        return [];
    }


    public function Register_User()
    {     $username = $_POST['user_name'];
         $email = $_POST['user_email'];
         $adress = $_POST['user_adress'];
         $phone = $_POST['user_phone'];
         $password = $_POST['user_password'];

            $statement = Application::$app->db->prepare("INSERT INTO users (name, email, adress, phone, password) VALUES (:username, :email, :adress, :phone, :password)");
            $statement->bindValue(":username", $username );
            $statement->bindValue(":email", $email );
            $statement->bindValue(":adress", $adress );
            $statement->bindValue(":phone", $phone );
            $statement->bindValue(":password", $password );
            $statement->execute();
        
       
     



        // $statement = Application::$app->db->prepare("INSERT INTO login (name , email, phone , password ) VALUES (:name, :email, :phone, :password)");
        // $statement->bindValue(":email", $email );
        // $statement->bindValue(":password", $password );
        // $statement->bindValue(":name", $name );
        // $statement->bindValue(":phone", $phone );
        // $statement->execute();
     
        

  
   
    

    
}





}


