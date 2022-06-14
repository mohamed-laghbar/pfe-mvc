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
    $packages=   $foo->GetPackages();
    // echo $packages['title'];
     $this->setLayout('main');
     return $this->render('packages',[  'packages'  =>  $packages]);
    
    
}

// foreach($packages as $value){
//     echo $value['title'] ;
//     echo $value['description'];
//     echo $value['price'];
//     echo $value['image'];
// }






}