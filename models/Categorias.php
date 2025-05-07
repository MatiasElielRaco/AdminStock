<?php

namespace Model;

class Categorias extends ActiveRecord {
    protected static $tabla = 'categorias';
    protected static $columnasDB = ['id', 'categoria', 'categoria_id'];
    
    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->categoria = $args['categoria'] ?? '';
        $this->categoria_id = $args['categoria_id'] ?? 0;
    }

    // Validar el Login de Categoria
    public function validarCategoria() {
        if(!$this->categoria) {
            self::$alertas['error'][] = 'Coloca un nombre a la categoria';
        }
        return self::$alertas;

    }
}