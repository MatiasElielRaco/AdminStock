<?php

namespace Model;

class Productos extends ActiveRecord {
    protected static $tabla = 'productos';
    protected static $columnasDB = ['id', 'nombre', 'cantidad', 'precio', 'categoria', "usuarios_id"];

    public $id;
    public $nombre;
    public $cantidad;
    public $precio;
    public $categoria;
    public $usuarios_id;
    
    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->cantidad = $args['cantidad'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->categoria = $args['categoria'] ?? "";
        $this->usuarios_id = $args['usuarios_id'] ?? 0;
    }

    // Validar Productos
    public function validarProducto() {
        if(!$this->nombre) {
            self::$alertas['error'][] = 'El nombre del Producto es Obligatorio';
        }
        if(!$this->cantidad) {
            self::$alertas['error'][] = 'Coloca una Cantidad Válida';
        }
        if(!$this->precio) {
            self::$alertas['error'][] = 'Coloca un Precio Válido';
        }
        if(!$this->categoria) {
            self::$alertas['error'][] = 'Coloca una Categoria Válida';
        }
        return self::$alertas;
    }
}