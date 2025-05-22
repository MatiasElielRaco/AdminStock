<?php

namespace Model;

class Categorias extends ActiveRecord {
    protected static $tabla = 'categorias';
    protected static $columnasDB = ['id', 'categoria', 'usuarios_id'];
    
    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->categoria = $args['categoria'] ?? '';
        $this->usuarios_id = $args['usuarios_id'] ?? 0;
    }

    // Validar el Login de Categoria
    public function validarCategoria() {
        if(!$this->categoria) {
            self::$alertas['error'][] = 'Coloca un Nombre a la Categoria';
        }
        return self::$alertas;

    }
}