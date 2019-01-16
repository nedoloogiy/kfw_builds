<?php
/**
 * Created by PhpStorm.
 * User: Kosoy
 * Date: 16.01.2019
 * Time: 3:53
 */

namespace kfw;


class App
{
    public static $app;

    public function __construct()
    {
        session_start();
        $query = trim($_SERVER['QUERY_STRING'], '/');
        self::$app = Registry::instance();
        $this->getParams();
    }

    protected function getParams(){
        $params = require_once CONFIGS.'/params.php';
        foreach ($params as $key => $value){
            self::$app->setProperty($key, $value);
        }
    }
}