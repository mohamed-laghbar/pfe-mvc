<?php

namespace app\models;


use app\core\Database;
use  app\controllers\LoginController;
use  app\controllers\AuthController;
use app\core\DbModel;
use app\core\Application;

class PackagesModel extends DbModel {

  
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
        $id = $_POST['id'];
        if($id){

        $test = $_SESSION['p_id'];
        array_push($test,$id);
        $_SESSION['p_id'] =  $test;

        //  ['']
             
           

        }
        
    }


    public function displayCart( ){

        if($_SESSION['p_id']){

        $id_list =  implode(',',$_SESSION['p_id']) ;
        $stmt = Application::$app->db->prepare("SELECT * FROM packages WHERE id IN ($id_list)");
        $stmt->execute();
        $fooo = $stmt->fetchAll();
        return $fooo;
    }
        
      
    }


    public function totalPrice(){

        
        if(!empty($_SESSION['p_id'])){

        $id_list =  implode(',',$_SESSION['p_id']) ;
        $stmt = Application::$app->db->prepare("SELECT price FROM packages WHERE id IN ($id_list)");
       $price = $stmt->execute();
        return $price ;
            exit();

    }else return '';

}
}








