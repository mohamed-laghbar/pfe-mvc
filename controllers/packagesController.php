<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\models\PackagesModel;
use app\core\Database;
use app\core\Request;
use app\controllers\CardController;
use app\controllers\CardModel;

class PackagesController extends Controller
{
    


    
    public function FetchPackages(){
        $foo = new PackagesModel(); 
        $packages =   $foo->GetPackages();
    // echo $Packages['title']; 
     $this->setLayout('main');
     return $this->render('Packages',[  'packages'  =>  $packages ] );
    
    
}



public function storedID(){
    
    $foo = new PackagesModel(); 
    $packages =   $foo->GetPackages();

       $foo->getID();
     $foo->display_product_cart(); // stored the selected packages that the user add to cart and save them in $fooo as format of array

    $this->setLayout('main');
    return $this->render('Packages',[  'packages'  =>  $packages , 'alert' => 'Successfully added to your Shopping Cart']);
    
    
    }


    public function display_packages_admin(){
        if(!empty($_SESSION['admin_id'])){
          
            $foo = new PackagesModel(); 
            $packages =   $foo->GetPackages();
         $this->setLayout('sidebar');
         return $this->render('products_espace',[  'packages'  =>  $packages ] );
  
  
         }else   header('location:admin');
     
    
    }

    public function post_check(){
        if(isset($_POST['delete'])){
             $foo = new PackagesModel(); 
              $foo->delete_package();
               return $this->display_packages_admin();
                exit();

        }

        if(isset($_POST['edit'])){
            $data = [
            'id' => $_POST['id'],
            'title' => $_POST['title'],
            'description' => $_POST['description'],
            'price' => $_POST['price'],
            
            ];
            $this->setLayout('sidebar');
          return  $this->render('product_edit' , [  'data'  =>  $data ]);
          exit();
        }


    }

    public function display_edit(){
        if(!empty($_SESSION['admin_id'])){
          
            $foo = new PackagesModel(); 
            $packages =   $foo->GetPackages();
            $this->setLayout('sidebar');
            return $this->render('product_edit' );
  
  
         }else   header('location:admin');
     
    
        
    }

    public function insert_product(){
        $foo = new PackagesModel;
        $foo->insert_packages();
        return header('location:http://localhost:8080/products_espace');
    }



    
    
   

    

}






