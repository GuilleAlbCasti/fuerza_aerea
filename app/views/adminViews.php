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
}