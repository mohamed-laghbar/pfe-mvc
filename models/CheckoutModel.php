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

    public function insert_orders(){
        $id_list =  implode(',',$_SESSION['p_id']) ;


        $db = Application::$app->db;
        $SQL = "INSERT INTO orders(user_id, product_id, quantity ) VALUES (:user_id, :product_id, :quantity)";
        $stmt = $db->pdo->prepare($SQL);
        $stmt->bindParam(':user_id', $_SESSION['user_id']);
        $stmt->bindParam(':product_id', $id_list);
        $stmt->bindParam(':quantity', $_POST['quantity']);

        $stmt->execute();
        header('location:thankyou');
    }

    public function my_account(){
        header('location:my_account');
    }
}








