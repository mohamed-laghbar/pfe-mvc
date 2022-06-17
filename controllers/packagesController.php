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
    $fooo =  $foo->displayCart(); // stored the selected packages that the user add to cart and save them in $fooo as format of array

    $this->setLayout('main');
    return $this->render('Packages',[  'packages'  =>  $packages , 'alert' => 'Successfully added to your Shopping Cart']);
    
    
    }


    
    
   

    

}






