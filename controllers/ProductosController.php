<?php

namespace Controllers;

use MVC\Router;

class ProductosController {

    public static function productos(Router $router) {

        if(!is_auth()) {
            header("location: /login");
        }


        $router->render("panel/productos", [
            "titulo" => "Productos"
        ]);
    }

}