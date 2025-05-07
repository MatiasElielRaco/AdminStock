<?php

namespace Controllers;

use MVC\Router;

class CategoriasController {

    public static function index(Router $router) {

        if(!is_auth()) {
            header("location: /login");
        }


        $router->render("dashboard/index", [
            "titulo" => "Dashboard"
        ]);
    }

}