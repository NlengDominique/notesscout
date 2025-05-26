<?php

use Core\Response;

function dd($value): void
{
    echo "<pre>";

    var_dump($value);

    echo "</pre>";

    die();
}

function urlIs($value): bool
{

    return $_SERVER['REQUEST_URI'] === $value;
}

function abort($code = Response::NOT_FOUND): void
{

    http_response_code($code);

    require  base_path("views/{$code}.php");

    die();
}

function routeToController($uri, $routes): void
{

    if (array_key_exists($uri, $routes)) {


        require base_path($routes[$uri]);
    } else {

        abort();
    }
}

function authorize($condition, $status = Response::FORBIDDEN)
{

    if (!$condition) {

        abort($status);
    }
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attr = [])
{

    extract($attr);

    require base_path('views/' . $path);
}


function redirect($path){

      header("location: {$path}");

      exit();
}

function old($key, $default = '')
{
    return Core\Session::get('old')[$key] ?? $default;
}
