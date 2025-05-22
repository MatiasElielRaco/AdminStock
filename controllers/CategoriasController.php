<?php

namespace Controllers;

use Model\Categorias;
use MVC\Router;

class CategoriasController {

    public static function categorias(Router $router) {

        if(!is_auth()) {
            header("location: /login");
        }

        $usuario_id = $_SESSION["id"];
        $categorias = Categorias::whereAll("usuarios_id", $usuario_id);


        $router->render("panel/categorias", [
            "titulo" => "Categorias",
            "categorias" => $categorias,
        ]);
    }

    public static function crear() {
        if(!is_auth()) header("location: /login");

        $categoria = new Categorias();
        $usuario_id = $_SESSION["id"];

        if($_SERVER["REQUEST_METHOD"] === "POST") {

            if(!is_auth()) header("location: /login");

            $_POST["usuarios_id"] = $usuario_id;
            $categoria->sincronizar($_POST);

            $resultado = $categoria->guardar();

            if($resultado) echo json_encode(["resultado" => true]);
        }
    }

    public static function eliminar() {
        if(!is_auth()) header("location: /login");

        if($_SERVER["REQUEST_METHOD"] === "POST") {

            if(!is_auth()) header("location: /login");

            $categoria_id = $_POST["id"];
            $categoria = Categorias::find($categoria_id);
            $resultado = $categoria->eliminar();

            if($resultado) echo json_encode(["resultado" => "ok"]);
        }
    }

}