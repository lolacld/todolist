<?php

spl_autoload_register(function ($class_name) {

    if(strpos($class_name, 'Model') !== false){
        require_once 'model/' . $class_name . '.php';
    }elseif(strpos($class_name, 'Controller') !== false){
        require_once 'controller/' . $class_name . '.php';
    }else{
        require_once 'helper/' . $class_name . '.php';
    }
});