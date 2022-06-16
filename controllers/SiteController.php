<?php 

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{

    public function home()
    {   
        if(!isset($_SESSION['p_id']))
        {
            $_SESSION['p_id'] = array();
        }
      
        return $this->render('home');
        //  return Application::$app->router->renderView('home', $params);
    }

    public function about()
    {
        $params = [
            'pagetitle' => "About"
        ];
        return $this->render('about', $params);
        // return Application::$app->router->renderView('home', $params);
    }

   

    public function contact()
    {
        return $this->render('contact');
        // return Application::$app->router->renderView('contact');
    }

    public function handleContact(Request $request)
    {
        $body = $request->getBody();
        // echo "<pre>";
        // var_dump($body);
        // echo "</pre>";
        // exit;
        return 'Handling submitted data';
    }
}