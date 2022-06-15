<?php

namespace app\models;

use app\core\Database;
use  app\controllers\LoginController;
use  app\controllers\AuthController;
use app\core\DbModel;
use app\core\Application;

class packagesModel extends DbModel {

  
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


    public function GetPackages(){

        $statement = Application::$app->db->prepare("SELECT * FROM packages");
         $statement->execute();
         $packages = $statement->fetchAll();
        return $packages;


    }

    public function getID(){

        return "hgcjhqsgcjhsqgcjhsqgcjhsqgc";

    }



    
}








