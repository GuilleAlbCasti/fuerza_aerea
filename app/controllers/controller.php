<?php

    require_once __DIR__ . '/../models/dbModel.php';
   
    
    function showHome() {
        require_once 'index.php';
    }
    
    function showBases() {
        require_once __DIR__ . '/../views/showBases.php';
    }
    
    function showAviones() {
        require_once __DIR__ .'/../views/showAviones.php';
    } 
    
    function showCategorias() {
        require_once __DIR__ .'/../views/showCategorias.php';
    } 
    
    function showAvion($id_selecionado) {
        require_once __DIR__ .'/../views/showAvion.php';
    } 
    
    function showCategoria($nombre_selecionado) {
        require_once __DIR__ .'/../views/showCategoria.php';
    }
    
    function showIngreso() {
        require_once __DIR__ .'/../views/showIngreso.php';
    }

    function showIngresoBases() {
        require_once __DIR__ .'/../views/showIngresoBases.php';
    }

    function showIngresoAviones() {
        require_once __DIR__ .'/../views/showIngresoAviones.php';
    }
    
    function showIngresoCategorias() {
        require_once __DIR__ .'/../views/showIngresoCategorias.php';
    }