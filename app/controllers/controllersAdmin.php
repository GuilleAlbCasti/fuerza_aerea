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

    //CREAR BASE
    function controlCrearBase() {
        $admin = new adminViews();
        $admin->showCrearBase();
    }

    //EDITAR BASE
    function controlEditarBase($id_seleccionado) {
        $admin = new adminViews();
        $admin->showEditarBase($id_seleccionado);
    }
    
    //ELIMINAR BASE
    function controlEliminarBase($id_seleccionado) {
        $admin = new adminViews();
        $admin->showEliminarBase($id_seleccionado);
    }

    //CREAR CATEGORIA
    function controlCrearCategoria() {
        $admin = new adminViews();
        $admin->showCrearCategoria();
    }

    //EDITAR CATEGORIA
    function controlEditarCategoria($id_seleccionada) {
        $admin = new adminViews();
        $admin->showEditarCategoria($id_seleccionada);
    }
    
    //ELIMINAR CATEGORIA
    function controlEliminarCategoria($id_seleccionada) {
        $admin = new adminViews();
        $admin->showEliminarCategoria($id_seleccionada);
    }


}

