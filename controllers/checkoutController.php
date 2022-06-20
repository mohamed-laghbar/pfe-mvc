<?php


namespace app\controllers;


use app\models\PackagesModel;
use app\core\Database;
use app\core\Request;
use app\models\CardModel;;
use app\core\Application;
use app\core\Controller;

class checkoutController extends Controller
{
    public function index()
    {
        $this->setLayout('main');
        return $this->render('checkout');
    }
}