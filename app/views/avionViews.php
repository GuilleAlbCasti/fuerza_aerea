<?php

require_once __DIR__ . '/../models/avionModel.php';
require_once __DIR__ . '/../models/baseModel.php';

class avionViews {

    // MOSTRAR LISTA DE AVIONES
    function showAviones() {
        $avionModel = new avionModel();
        $aviones = $avionModel->getAllAvion();
        require_once '../fuerza_aerea/templates/showAviones.php';
    }

    // MOSTRAR EL DETALLE DE 1 AVIÓN
    function showAvion($id_selecionado) {
        if (isset($_GET['id'])) {
            $id_selecionado = $_GET['id'];
            $avionModel = new avionModel();
            $avion = $avionModel->getAvion($id_selecionado);
            require_once '../fuerza_aerea/templates/showAvion.php';
        } else {
        require_once '../fuerza_aerea/templates/showAvionNoEncontrado.php';
        }
    }

    // AGREGAR AVIÓN
    function showAgregarAvion() {
        $avionModel = new avionModel();
        $baseModel = new baseModel();
        $bases = $baseModel->getAllBase();
        $aviones = $avionModel->getAllCategoria();
        require_once '../fuerza_aerea/templates/showAgregarAvion.php';
    }

    
}
