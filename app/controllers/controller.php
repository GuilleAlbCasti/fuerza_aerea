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

    function showAgregarAvion() {
        require_once __DIR__ .'/../views/showAgregarAvion.php';
    }

    function showAgregarBase() {
        require_once __DIR__ .'/../views/showAgregarBase.php';    
    }

    function showAgregarCategoria() {
        require_once __DIR__ .'/../views/showAgregarCategoria.php';   
    }

    function showEditarAvion($id_selecionado) {
        require_once __DIR__ .'/../views/showEditarAvion.php';
    }

    function showEditarBase($id_selecionado) {
        require_once __DIR__ .'/../views/showEditarBase.php';    
    }

    function showEditarCategoria($nombre_selecionado) {
        require_once __DIR__ .'/../views/showEditarCategoria.php';   
    }
    function showEliminarAvion($id_selecionado) {
        require_once __DIR__ .'/../views/showEliminarAvion.php';
    }

    function showEliminarBase($id_selecionado) {
        require_once __DIR__ .'/../views/showEliminarBase.php';    
    }

    function showEliminarCategoria($nombre_selecionado) {
        require_once __DIR__ .'/../views/showEliminarCategoria.php';   
    }
