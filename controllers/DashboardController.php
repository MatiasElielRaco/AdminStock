<?php

namespace Controllers;

use Model\Categorias;
use Model\Productos;
use MVC\Router;

class DashboardController {

    public static function index(Router $router) {

        if(!is_auth()) {
            header("location: /login");
        }

        $id = $_SESSION["id"];

        $productos = Productos::whereAll("usuarios_id", $id);
        $categorias = Categorias::whereAll("usuarios_id", $id);

        $router->render("panel/dashboard", [
            "titulo" => "Dashboard",
            "productos" => $productos,
            "categorias" => $categorias
        ]);
    }

}