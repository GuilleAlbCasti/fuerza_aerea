<?php

require_once __DIR__ . '/../models/avionModel.php';
require_once __DIR__ . '/../models/baseModel.php';

class adminViews {
    
    // LISTAR LAS OPCIONES 
    function showIngreso() {
        require_once '../fuerza_aerea/templates/admin/showIngreso.php';
    }

    // LISTAR BASES COMO ADMINISTRADOR
    function showIngresoBases() {
        $baseModel = new baseModel();
        $bases = $baseModel->getAllBase();
        require_once '../fuerza_aerea/templates/admin/showIngresoBases.php';
    }

    // LISTAR AVIONES COMO ADMINISTRADOR
    function showIngresoAviones() {
        $avionModel = new avionModel();
        $aviones = $avionModel->getAllAvion();
        require_once '../fuerza_aerea/templates/admin/showIngresoAviones.php';
    }

    // LISTAR CATEGORÍAS COMO ADMINISTRADOR
    function showIngresoCategorias() {
        $avionModel = new avionModel();
        $aviones = $avionModel->getAllCategoria();
        require_once '../fuerza_aerea/templates/admin/showIngresoCategorias.php';
    }

    // CREAR UN AVION
    function showCrearAvion() {
        $avionModel = new avionModel();
        $listaCategorias = $avionModel->getAllCategoria();
        $baseModel = new baseModel();
        $listaBases = $baseModel->getAllBase();
        require_once '../fuerza_aerea/templates/admin/showCrearAvion.php';
    }

    // ELIMINAR UN AVION
    function showEditarAvion($id_seleccionado) {
        $avionModel = new avionModel();
        $listaCategorias = $avionModel->getAllCategoria();
        $baseModel = new baseModel();
        $listaBases = $baseModel->getAllBase();
        $avionSeleccionado = $avionModel->getAvion($id_seleccionado);
        require_once '../fuerza_aerea/templates/admin/showMostrarAvion.php';
    }

    // ELIMINAR UN AVION
    function showEliminarAvion($id_seleccionado) {
        $avionModel = new avionModel();
        $aviones = $avionModel->eliminarAvion($id_seleccionado);
        $aviones = $avionModel->getAllAvion();
        require_once '../fuerza_aerea/templates/admin/showIngresoAviones.php';
    }
}