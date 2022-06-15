<?php

namespace app\core\form;
use app\core\Model;

class Form 
{
    public static function begin($action, $method)
    {
        echo sprintf('<form action="%s" method="%s">', $action, $method);
        return new Form();
    }

    public static function end()
    {
        echo '</form>';
        // header('location:login');
        exit;
    }

    public function field(Model $model, $attribute)
    {
        return new Field($model, $attribute);
    }
}