<?php

require_once __DIR__ . '/../models/dbModel.php';
require_once __DIR__ .'/../views/adminViews.php';

class controllersAdmin {
    
    //ACCESO A PANTALLA PRINCIPAL
    function controlIngreso() {
        $admin = new adminViews();
        $admin->showIngreso();
    }
    
    //TRAER DATOS DE BASES
    function controlIngresoBases() {
        $admin = new adminViews();
        $admin->showIngresoBases();
    }
    
    //TRAER DATOS DE AVIONES
    function controlIngresoAviones() {
        $admin = new adminViews();
        $admin->showIngresoAviones();
    }
    
    //TRAER DATOS DE CATEGORÍAS
    function controlIngresoCategorias() {
        $admin = new adminViews();
        $admin->showIngresoCategorias();
    }

    //CREAR AVION
    function controlCrearAvion() {
        $admin = new adminViews();
        $admin->showCrearAvion();
    }

    //EDITAR AVION
    function controlEditarAvion($id_seleccionado) {
        $admin = new adminViews();
        $admin->showEditarAvion($id_seleccionado);
    }
    
    //ELIMINAR AVION
    function controlEliminarAvion($id_seleccionado) {
        $admin = new adminViews();
        $admin->showEliminarAvion($id_seleccionado);
    }


}

