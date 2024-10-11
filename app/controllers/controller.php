<?php

    require_once 'models/dbModel.php';
   
    
    function showHome() {
        require_once 'index.php';
    }
    
    function showBases() {
        require_once __DIR__ .'/../app/views/showBases.php';
    }
    
    function showAviones() {
        require_once __DIR__ .'/../app/views/showAviones.php';
    } 
    
    function showCategorias() {
        require_once __DIR__ .'/../app/views/showCategorias.php';
    } 
    
    function showAvion($id_selecionado) {
        require_once __DIR__ .'/../app/views/showAvion.php';
    } 
    
    function showCategoria($nombre_selecionado) {
        require_once __DIR__ .'/../app/views/showCategoria.php';
    } 