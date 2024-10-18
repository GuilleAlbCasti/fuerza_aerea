<?php

require_once __DIR__ . '/../models/categoriaModel.php';

class categoriaViews {

    // MOSTRAR LISTA DE CATEGORÍAS
    function showCategorias() {
        $categoriaModel = new categoriaModel();
        $categorias = $categoriaModel->getAllCategorias();
        require_once '../fuerza_aerea/templates/showCategorias.php';
    }

    // MOSTRAR EL DETALLE DE 1 CATEGORÍA
    public function showCategoria($id) {
        $categoriaModel = new categoriaModel();

        if (isset($id)) {
            $categoria = $categoriaModel->getCategoria($id);
            $aviones = $categoriaModel->getAvionesPorCategoria($id);
            require_once '../fuerza_aerea/templates/showCategoria.php';
        } else {
            require_once '../fuerza_aerea/templates/showCategoriaNoEncontrada.php';
        }
    }

}
