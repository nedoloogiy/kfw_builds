<?php
/**
 * Created by PhpStorm.
 * User: Kosoy
 * Date: 16.01.2019
 * Time: 4:06
 */

namespace kfw;


class Registry
{
    use TSinglethone;

    public static $properties = [];

    public function setProperty($name, $value){
        self::$properties[$name] = $value;
        return true;
    }

    public function getProperty($name){
        if(array_key_exists($name, self::$properties)){
            return self::$properties[$name];
        }
    }

    public function setProperties($array){}

    public function getProperties(){
        return self::$properties;
    }
    
}