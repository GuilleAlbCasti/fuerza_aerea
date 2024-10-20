<?php

require_once __DIR__ . '/../models/dbModel.php';
require_once __DIR__ .'/../views/basesViews.php';
require_once __DIR__ .'/../views/avionViews.php';
require_once __DIR__ .'/../views/categoriaViews.php';


class controllersUsers {

    private $bases;
    private $aviones;
    private $categoria;

    function __construct() {
        $this->bases = new basesViews();
        $this->aviones = new avionViews();
        $this->categoria = new categoriaViews();
    }
    
    function controlHome() {
        require_once 'index.phtml';
    }
    
    function controlBases() {
        require_once __DIR__ . '/../views/basesViews.php';
        $this->bases->showBases();
    }
    
    function controlAviones() {
        require_once __DIR__ .'/../views/avionViews.php';
        $this->aviones->showAviones();
    } 
    
    function controlCategorias() {
        require_once __DIR__ .'/../views/categoriaViews.php';
        $this->categoria->showCategorias();
    } 
    
    function controlAvion($id_selecionado) {
        require_once __DIR__ .'/../views/avionViews.php';
        $this->aviones->showAvion($id_selecionado);
    } 
    
    function controlCategoria($id_selecionado) {
        require_once __DIR__ .'/../views/categoriaViews.php';
        $this->categoria->showCategoria($id_selecionado);
    }
    
}

