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

        $email = $_POST['email'];
        $password = $_POST['password'];

        $test = $this->validateEmail($email);
        if($test){                

            $statement = Application::$app->db->prepare("SELECT * FROM login WHERE email = :email AND password = :password");
            $statement->bindValue(":email", $email );
            $statement->bindValue(":password", $password );
            $statement->execute();
            $count = $statement->rowCount();
            return  $count==1;
        }else
            return false;
    }

  
       public function validateEmail($email) {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return true;
            }
            else {
               return false;
            }
        }
    

    
}








