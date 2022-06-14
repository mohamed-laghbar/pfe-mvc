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

        $params = "Email or Password incorect";
        $email = $_POST['email'];
        $password = $_POST['password'];

        $statement = Application::$app->db->prepare("SELECT * FROM login WHERE email = :email AND password = :password");
        $statement->bindValue(":email", $email );
        $statement->bindValue(":password", $password );
        $statement->execute();
        $count = $statement->rowCount();
        if($count==1)
        {
            header('location:orders');
        }

        


    }

    
}








