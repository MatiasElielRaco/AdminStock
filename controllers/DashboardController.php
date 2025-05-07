<?php

namespace Controllers;

use MVC\Router;

class DashboardController {

    public static function index(Router $router) {

        if(!is_auth()) {
            header("location: /login");
        }


        $router->render("panel/dashboard", [
            "titulo" => "Dashboard"
        ]);
    }

}