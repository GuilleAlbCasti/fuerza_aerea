<?php

require_once __DIR__ . '/../models/avionModel.php';

class categoriaViews {

    // MOSTRAR LISTA DE CATEGORÍAS
    function showCategorias() {
        $avionModel = new avionModel();
        $aviones = $avionModel->getAllCategoria();
        require_once '../fuerza_aerea/templates/showCategorias.php';
    }

    // MOSTRAR EL DETALLE DE 1 CATEGORÍA
    function showCategoria($nombre_selecionado) {
        if (isset($_GET['categoria'])) {
            $nombre_selecionado = $_GET['categoria'];
            $avionModel = new avionModel();
            $aviones = $avionModel->getCategoria($nombre_selecionado);
            require_once '../fuerza_aerea/templates/showCategoria.php';
        } else {
        require_once '../fuerza_aerea/templates/showCategoriaNoEncontrada.php';
        }
    }
}
