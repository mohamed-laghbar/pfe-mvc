<?php

namespace app\models;


use app\core\Database;
use  app\controllers\LoginController;
use  app\controllers\AuthController;
use app\core\DbModel;
use app\core\Application;

class CheckoutModel extends DbModel {

  
    public function tableName(): string
    {
        return 'login';
    }

    public function attributes
    (): array
    {
        return [];
    }
   
    public function rules(): array
    {
        return [];
    }

    
}








