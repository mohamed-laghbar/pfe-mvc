<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\models\packagesModel;
use app\core\Database;
use app\core\Request;

class packagesController extends Controller
{

 

    
    public function FetchPackages(){
        $foo = new packagesModel(); 
        $packages =   $foo->GetPackages();
    // echo $packages['title'];
     $this->setLayout('main');
     return $this->render('packages',[  'packages'  =>  $packages]);
    
    
}



public function storeID(Request $request){
    $foo = new packagesModel(); 

        return $foo->getID();

    

}






}