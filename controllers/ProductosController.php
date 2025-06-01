<?php

namespace Controllers;

use Model\Categorias;
use Model\Productos;
use MVC\Router;

class ProductosController {

    public static function crear(Router $router) {

        if(!is_auth()) header("location: /login");

        $alertas = [];

        $usuario_id = $_SESSION["id"];
        $categorias = Categorias::whereAll("usuarios_id", $usuario_id);
        $producto = new Productos();

        if($_SERVER["REQUEST_METHOD"] === "POST") {
            if(!is_auth()) header("location: /login");

            $producto->sincronizar($_POST);
            $producto->usuarios_id = $usuario_id;

            $alertas = $producto->validarProducto();

            if(empty($alertas)) {
                $producto->guardar();

                Productos::setAlerta("exito", "Producto Creado");
                $alertas = $producto->getAlertas();
            }
            
        }

        $router->render("panel/productos/crear", [
            "titulo" => "Productos",
            "categorias" => $categorias,
            "producto" => $producto,
            "alertas" => $alertas
        ]);
    }


    public static function editar(Router $router) {
        if(!is_auth()) header("location: /login");

        $alertas = [];

        $id = $_GET["id"];
        $id = filter_var($id, FILTER_VALIDATE_INT);
        if(!$id) header("location: /dashboard");

        $usuario_id = $_SESSION["id"];
        $categorias = Categorias::whereAll("usuarios_id", $usuario_id);
        $producto = Productos::find($id);

        if(!$producto) header("location: /dashboard");
        

        if($_SERVER["REQUEST_METHOD"] === "POST") {
            if(!is_auth()) header("location: /login");

            $producto->sincronizar($_POST);

            $alertas = $producto->validarProducto();

            if(empty($alertas)) {
                $producto->guardar();
                Productos::setAlerta("exito", "Producto Actualzado");
                $alertas = $producto->getAlertas();
            }
            
        }

        $router->render("panel/productos/editar", [
            "titulo" => "Productos",
            "categorias" => $categorias,
            "producto" => $producto,
            "alertas" => $alertas
        ]);
    }

    public static function eliminar() {
        if(!is_auth()) header("location: /login");

        if($_SERVER["REQUEST_METHOD"] === "POST") {

            if(!is_auth()) header("location: /login");

            $id = $_POST["id"];
            $id = filter_var($id, FILTER_VALIDATE_INT);

            $producto = Productos::find($id);

            if(!isset($producto)) header("Location: /dashboard");

            $resultado = $producto->eliminar();

            if($resultado) header("location: /dashboard");
        }

    }
}