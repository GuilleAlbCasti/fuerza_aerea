<?php

require_once 'funciones_para_bd.php';

function showListarBases() {
    require_once '../templates/bases.php';
}

function showListarAviones() {
    require_once '../templates/aviones.php';
} 

function showListarCategorias() {
    require_once '../templates/categorias.php';
} 

function showListarAvion($id_selecionado) {
    require_once '../templates/avion.php';
} 

function showListarCategoria($nombre_selecionado) {
    require_once '../templates/categoria.php';
} 