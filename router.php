<?php

require_once '../funciones/funciones.php';

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

switch($params[0]) {
    case 'home':
        showHome();
        break;
    case 'bases':
        showListarBases();
        break;
    case 'aviones':
        showListarAviones();
        break;
    case 'categorias':
        showListarCategorias();
        break;
    case 'avion':
        if (isset($params[1])) {
            showListarAvion($params[1]);
        } else {
            showHome(); //ARMAR UNA PAGINA DE AVION NO ENCONTRADO!!!!
        }
        break;
    case 'categoria':
        if (isset($params[1])) {
            showListarCategoria($params[1]);
        } else {
            showHome(); //ARMAR UNA PAGINA DE ERROR...
        }
        break;
    default:
        echo("La página no existe. Error 404");
        break;
}








