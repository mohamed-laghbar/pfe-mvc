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

      
             
           

        }
        
    }


    public function display_product_cart( ){

        if(!empty($_SESSION['p_id'])){

        $id_list =  implode(',',$_SESSION['p_id']) ;
        $stmt = Application::$app->db->prepare("SELECT * FROM packages WHERE id IN ($id_list)");
        $stmt->execute();
        $fooo = $stmt->fetchAll();
        return $fooo;
    }
        
      
    }


    public function total_price_cart()
    {

        
        if(!empty($_SESSION['p_id'])){

        $id_list =  implode(',',$_SESSION['p_id']) ;
        $stmt = Application::$app->db->prepare("SELECT price FROM packages WHERE id IN ($id_list)");
       $price = $stmt->execute();
        return $price ;
            exit();

    }else return '';

    }


    public function insert_packages()
     {

        if (isset($_POST['insert'])) {
            $image = $_FILES['image']['name'];


            // Location
            $target_file = './assets/img/'.$image;

            move_uploaded_file($_FILES['image']['tmp_name'],$target_file);

                $title = $_POST['title'];
                $description = $_POST['description'];
                $price = $_POST['price'];
                
          
             
                
                $statement = Application::$app->db->prepare("INSERT INTO packages (image, title, description, price) VALUES (:image, :title, :description, :price)");
                $statement->bindValue(":image", $image );
                $statement->bindValue(":title", $title );
                $statement->bindValue(":description", $description );
                $statement->bindValue(":price", $price );
                $statement->execute();
      
            }
     }


     public function delete_package(){
        $id = $_POST['id'];
        $statement = Application::$app->db->prepare("DELETE FROM packages WHERE id = $id ");
        $statement->execute();

     }







}



 
  

