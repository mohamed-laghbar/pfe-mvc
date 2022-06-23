<?php

namespace app\models;


use app\core\Database;
use  app\controllers\LoginController;
use  app\controllers\AuthController;
use app\core\DbModel;
use app\core\Application;

class OrdersModel extends DbModel{

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

    public function select_all_orders(){
        $db = Application::$app->db;
        $SQL = "SELECT orders.quantity, orders.order_time, users.name, users.adress, packages.price,packages.title FROM (( orders INNER JOIN users ON orders.user_id = users.id) INNER JOIN packages on orders.product_id = packages.id  )";
        $stmt = $db->pdo->prepare($SQL);
        $stmt->execute();
        $orders = $stmt->fetchAll();
        return $orders;



    }








}