<?php

function dd($value):void
{
    echo "<pre>";

    var_dump($value);

    echo "</pre>";

    die();
}

function urlIs($value):bool{
     
    return $_SERVER['REQUEST_URI'] === $value;
}

function abort($code = Response::NOT_FOUND):void
{

    http_response_code($code);

    require "./views/{$code}.php";

    die();
}

function routeToController($uri, $routes):void
{

    if (array_key_exists($uri, $routes)) {

        require $routes[$uri];
    } else {

        abort();
    }
}

function authorize($condition,$status = Response::FORBIDDEN ){

    if(!$condition){

        abort($status);
    }
}


