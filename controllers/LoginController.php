<?php
namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\models\loginModel;
use app\core\Database;
use app\core\Request;

class LoginController extends  Controller{
public function LoginAttempt(Request $request){
    $login = new loginModel();
if($request->isPost())  {
     $login->GetUser();
     
}  

}


}