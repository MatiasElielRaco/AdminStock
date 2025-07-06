<?php 

namespace Controllers;

use MVC\Router;

class PaginasController {


    public static function index(Router $router) {


        $router->render("paginas/index", [
            "titulo" => "Adminstock | Home"
        ]);
    }


    public static function error(Router $router) {


        $router->render("paginas/error", [
            "titulo" => "error"
        ]);
    }
}