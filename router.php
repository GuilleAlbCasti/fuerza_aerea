<?php

require_once __DIR__ . '/app/controllers/controller.php';

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
        showBases();
        break;
    case 'aviones':
        showAviones();
        break;
    case 'categorias':
        showCategorias();
        break;
    case 'avion':
        if (isset($params[1])) {
            showAvion($params[1]);
        } else {
            showHome();
        }
        break;
    case 'categoria':
        if (isset($params[1])) {
            showCategoria($params[1]);
        } else {
            showHome();
        }
        break;
    case 'ingreso':
        showIngreso();
        break;
    default:
        echo("La página no existe. Error 404");
        break;
}








