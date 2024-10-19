<?php

require_once __DIR__ . '/../models/avionModel.php';
require_once __DIR__ . '/../models/baseModel.php';
require_once __DIR__ . '/../models/categoriaModel.php';

class adminViews {
    
    // LISTAR LAS OPCIONES 
    function showIngreso() {
        require_once '../fuerza_aerea/templates/admin/showIngreso.phtml';
    }

    // LISTAR BASES COMO ADMINISTRADOR
    function showIngresoBases() {
        $baseModel = new baseModel();
        $bases = $baseModel->getAllBase();
        require_once '../fuerza_aerea/templates/admin/showIngresoBases.phtml';
    }

    // LISTAR AVIONES COMO ADMINISTRADOR
    function showIngresoAviones() {
        $avionModel = new avionModel();
        $aviones = $avionModel->getAllAvion();
        require_once '../fuerza_aerea/templates/admin/showIngresoAviones.phtml';
    }

    // LISTAR CATEGORÍAS COMO ADMINISTRADOR
    function showIngresoCategorias() {
        $categoriaModel = new categoriaModel();
        $listaCategorias = $categoriaModel->getAllCategorias();
        require_once '../fuerza_aerea/templates/admin/showIngresoCategorias.phtml';
    }

    // CREAR UN AVION
    function showCrearAvion() {
        $avionModel = new avionModel();
        $categoriaModel = new categoriaModel();
        $listaCategorias = $categoriaModel->getAllCategorias();
        $baseModel = new baseModel();
        $listaBases = $baseModel->getAllBase();
        require_once '../fuerza_aerea/templates/admin/showCrearAvion.phtml';
    }

    // EDITAR UN AVION
    function showEditarAvion($id_seleccionado) {
        $avionModel = new avionModel();
        $categoriaModel = new categoriaModel();
        $listaCategorias = $categoriaModel->getAllCategorias();
        $baseModel = new baseModel();
        $listaBases = $baseModel->getAllBase();
        $avionSeleccionado = $avionModel->getAvion($id_seleccionado);
        require_once '../fuerza_aerea/templates/admin/showEditarAvion.phtml';
    }

    // ELIMINAR UN AVION
    function showEliminarAvion($id_seleccionado) {
        $avionModel = new avionModel();
        $aviones = $avionModel->eliminarAvion($id_seleccionado);
        $aviones = $avionModel->getAllAvion();
        require_once '../fuerza_aerea/templates/admin/showIngresoAviones.phtml';
    }

    // CREAR UNA BASE
    function showCrearBase() {
        $baseModel = new baseModel();
        require_once '../fuerza_aerea/templates/admin/showCrearBase.phtml';
    }

    // EDITAR UNA BASE
    function showEditarBase($id_seleccionado) {
        $baseModel = new baseModel();
        $baseSeleccionada = $baseModel->getBase($id_seleccionado);
        require_once '../fuerza_aerea/templates/admin/showEditarBase.phtml';
    }

    // ELIMINAR UNA BASE
    function showEliminarBase($id_seleccionado) {
        $baseModel = new baseModel();
        $baseSeleccionada = $baseModel->eliminarBase($id_seleccionado);
        $bases = $baseModel->getAllBase();
        require_once '../fuerza_aerea/templates/admin/showIngresoBases.phtml';
    }

    // CREAR UNA CATEGORIA
    function showCrearCategoria() {
        $categoriaModel = new categoriaModel();
        require_once '../fuerza_aerea/templates/admin/showCrearCategoria.phtml';
    }

    // EDITAR UNA CATEGORIA
    function showEditarCategoria($id_seleccionada) {
        $categoriaModel = new categoriaModel();
        $categoriaSeleccionada = $categoriaModel->getCategoria($id_seleccionada);
        require_once '../fuerza_aerea/templates/admin/showEditarCategoria.phtml';
    }

    // ELIMINAR UNA CATEGORIA
    function showEliminarCategoria($id_seleccionada) {
        $categoriaModel = new categoriaModel();
        $categoriaSeleccionada = $categoriaModel->eliminarCategoria($id_seleccionada);
        $listaCategorias = $categoriaModel->getAllCategorias();
        require_once '../fuerza_aerea/templates/admin/showIngresoCategorias.phtml';
    }
}