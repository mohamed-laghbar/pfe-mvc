<?php

namespace app\models;

use app\core\Database;
use  app\controllers\LoginController;
use  app\controllers\AuthController;
use app\core\DbModel;
use app\core\Application;

class loginModel extends DbModel {

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


    public function GetUser( )
    {

        $email = $_POST['user_email'];
        $password = $_POST['user_password'];

                  

            $statement = Application::$app->db->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
            $statement->bindValue(":email", $email );
            $statement->bindValue(":password", $password );
            $statement->execute();
            return $statement;
            // $count = $statement->rowCount();
            // return  $count;
           
             
    }


    public function get_admin_account($email , $password )
    {    

            $statement = Application::$app->db->prepare("SELECT * FROM admin WHERE email = :email AND password = :password");
            $statement->bindValue(":email", $email );
            $statement->bindValue(":password", $password );
            $statement->execute();
            return $statement;
            
           
             
    }


}








