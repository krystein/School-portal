<?php

spl_autoload_register('autoLoader');

function autoLoader($className)
{
    $url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    $className = strtolower($className);

    if (strpos($url, "includes")) {
        $path = '../classes/';
    } else {
        $path = './classes/';
    }

    $extension = ".class.php";

    $file = $path . $className . $extension;

    if (!file_exists($file)) {
        return false;
    }

    require_once $file;
}