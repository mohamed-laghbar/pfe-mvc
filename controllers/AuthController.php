<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\User;

class AuthController extends Controller
{
    public function orders()
    {
        $this->setLayout('sidebar');
        return $this->render('orders');
    }



    public function login()
    {
        $this->setLayout('auth');
        return $this->render('login');
    }
    public function products()
    {
        $this->setLayout('main');
        return $this->render('products');
    }

    public function card()
    {
        $this->setLayout('main');
        return $this->render('card');
    }

    public function packages()
    {
        $this->setLayout('main');
        return $this->render('packages');
    }

    public function build_your_system()
    {
        $this->setLayout('main');
        return $this->render('build-your-system');
    }



    public function shop()
    {
        $this->setLayout('main');
        return $this->render('shop');
    }

    public function register(Request $request)
    {
        $user = new User();
        if($request->isPost())
        {
            $user->loadData($request->getBody());

            if ($user->validate() && $user->save()){
                Application::$app->session->sefFlash('success', 'Thanks for registreing');
                Application::$app->response->redirect('/');
            }

            return $this->render('register', [
                'model' => $user
            ]);
        }
        $this->setLayout('auth');

        return $this->render('register', [
            'model' => $user
        ]);    
    }

    
}