<?php

    require_once 'funciones_para_bd.php';
    
    function showHome() {
        require_once 'index.php';
    }
    
    function showListarBases() {
        require_once __DIR__ .'/../templates/bases.php';
    }
    
    function showListarAviones() {
        require_once __DIR__ .'/../templates/aviones.php';
    } 
    
    function showListarCategorias() {
        require_once __DIR__ .'/../templates/categorias.php';
    } 
    
    function showListarAvion($id_selecionado) {
        require_once __DIR__ .'/../templates/avion.php';
    } 
    
    function showListarCategoria($nombre_selecionado) {
        require_once __DIR__ .'/../templates/categoria.php';
    } 