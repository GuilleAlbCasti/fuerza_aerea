<?php

require_once __DIR__ . '/../models/dbModel.php';


class controllersUsers {
    
    function controlHome() {
        require_once 'index.php';
    }
    
    function controlBases() {
        require_once __DIR__ . '/../views/basesViews.php';
        $bases = new basesViews();
        $bases->showBases();
    }
    
    function controlAviones() {
        require_once __DIR__ .'/../views/avionViews.php';
        $aviones = new avionViews();
        $aviones->showAviones();
    } 
    
    function controlCategorias() {
        require_once __DIR__ .'/../views/categoriaViews.php';
        $categoria = new categoriaViews();
        $categoria->showCategorias();
    } 
    
    function controlAvion($id_selecionado) {
        require_once __DIR__ .'/../views/avionViews.php';
        $aviones = new avionViews();
        $aviones->showAvion($id_selecionado);
    } 
    
    function controlCategoria($nombre_selecionado) {
        require_once __DIR__ .'/../views/categoriaViews.php';
        $categoria = new categoriaViews();
        $categoria->showCategoria($nombre_selecionado);
    }
    
}

