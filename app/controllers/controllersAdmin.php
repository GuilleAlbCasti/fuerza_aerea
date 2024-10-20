<?php

require_once __DIR__ . '/../models/dbModel.php';
require_once __DIR__ .'/../views/adminViews.php';

class controllersAdmin {
    
    private $admin;
    private $res;

    public function __construct($res) {
        $this->res = $res;
        $this->admin = new adminViews($this->res->user);
    }

    //ACCESO A PANTALLA PRINCIPAL
    public function controlIngreso() {
        $this->admin->showIngreso();
    }
    
    //TRAER DATOS DE BASES
    function controlIngresoBases() {
        $this->admin->showIngresoBases();
    }
    
    //TRAER DATOS DE AVIONES
    function controlIngresoAviones() {
        $this->admin->showIngresoAviones();
    }
    
    //TRAER DATOS DE CATEGORÍAS
    function controlIngresoCategorias() {
        $this->admin->showIngresoCategorias();
    }

    //CREAR AVION
    function controlCrearAvion() {
        $this->admin->showCrearAvion();
    }

    //EDITAR AVION
    function controlEditarAvion($id_seleccionado) {
        $this->admin->showEditarAvion($id_seleccionado);
    }
    
    //ELIMINAR AVION
    function controlEliminarAvion($id_seleccionado) {
        $this->admin->showEliminarAvion($id_seleccionado);
    }

    //CREAR BASE
    function controlCrearBase() {
        $this->admin->showCrearBase();
    }

    //EDITAR BASE
    function controlEditarBase($id_seleccionado) {
        $this->admin->showEditarBase($id_seleccionado);
    }
    
    //ELIMINAR BASE
    function controlEliminarBase($id_seleccionado) {
        $this->admin->showEliminarBase($id_seleccionado);
    }

    //CREAR CATEGORIA
    function controlCrearCategoria() {
        $this->admin->showCrearCategoria();
    }

    //EDITAR CATEGORIA
    function controlEditarCategoria($id_seleccionada) {
        $this->admin->showEditarCategoria($id_seleccionada);
    }
    
    //ELIMINAR CATEGORIA
    function controlEliminarCategoria($id_seleccionada) {
        $this->admin->showEliminarCategoria($id_seleccionada);
    }


}

