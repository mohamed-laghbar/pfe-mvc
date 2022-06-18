<?php

namespace app\models;


use app\core\Database;
use  app\controllers\LoginController;
use  app\controllers\AuthController;
use app\core\DbModel;
use app\core\Application;

class CardModel extends DbModel {

  
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

    public function remove_id_from_session($id){
     

      $_SESSION['p_id'] = array_diff($_SESSION['p_id'] , [$id]);
      }
   
}








