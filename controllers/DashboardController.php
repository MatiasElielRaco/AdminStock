<?php

namespace Controllers;

use Classes\Paginacion;
use Model\Categorias;
use Model\Productos;
use MVC\Router;

class DashboardController {

    public static function index(Router $router) {
        if(!is_auth()) header("location: /login");
    
        $id = $_SESSION["id"];

        if($_GET["buscar"] || $_GET["categoria"] || $_GET["stock"] || $_GET["min"] || $_GET["max"]) {
            
            $filtros = [];

            if(!empty($_GET["buscar"])) {
                $filtros["buscar"] = $_GET["buscar"];
            }
            if(!empty($_GET["categoria"])) {
                $filtros["categoria"] = $_GET["categoria"];
            }
            if(!empty($_GET["stock"])) {
                $filtros["stock"] = $_GET["stock"];
            }
            if(!empty($_GET["min"])) {
                $filtros["min"] = $_GET["min"];
            }
            if(!empty($_GET["max"])) {
                $filtros["max"] = $_GET["max"];
            }

            $filtrar = Productos::filtrar($filtros);
            debuguear($filtrar);
        }

        $pagina_actual = $_GET["page"];
        $pagina_actual = filter_var($pagina_actual, FILTER_VALIDATE_INT);

        if(!$pagina_actual || $pagina_actual < 1) header("Location: /dashboard?page=1");

        $registro_por_pagina = 10;
        $total = Productos::total();
        $paginacion = new Paginacion($pagina_actual, $registro_por_pagina, $total);

        if($paginacion->total_paginas() < $pagina_actual) header("Location: /dashboard?page=1");

        $productos = Productos::paginarWhere($registro_por_pagina, $paginacion->offset(), "usuarios_id", $id);
        $categorias = Categorias::whereAll("usuarios_id", $id);

        $disponible = Productos::total("usuarios_id = {$id} AND cantidad > 20");
        $bajo = Productos::total("usuarios_id = {$id} AND cantidad <= 10");
        $sin = Productos::total("usuarios_id = {$id} AND cantidad = 0");

        $router->render("panel/dashboard", [
            "titulo" => "Dashboard",
            "productos" => $productos,
            "categorias" => $categorias,
            "total" => $total,
            "disponible" => $disponible,
            "bajo" => $bajo,
            "sin" => $sin,
            "paginacion" => $paginacion->paginacion()
        ]);
    }

}