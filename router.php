<?php

require_once 'funciones.php';

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
    case 'nosotros':
        showNosotros();
        break;
    case 'noticia':
        if (isset($params[1])) {
            showNoticiabyId($params[1]);
        } else {
            showHome();
        }
        break;
    case 'usuario':
        showUsuario();
        break;
    default:
        echo("La página no existe. Error 404");
        break;
}

