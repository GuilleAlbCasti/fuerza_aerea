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
        if (isset($params[1])) {
            switch ($params[1]) {
                case 'bases':
                    if (isset($params[2])) {
                        switch ($params[2]) {
                            case 'agregar':
                                showAgregarBase();
                                break;
                            case 'editar':
                                if (isset($params[3])) {
                                    showEditarBase($params[3]); // $params[3] sería el ID de la base
                                } else {
                                    showIngresoBases();
                                }
                                break;
                            case 'eliminar':
                                if (isset($params[3])) {
                                    showEliminarBase($params[3]);
                                } else {
                                    showIngresoBases();
                                }
                                break;
                            default:
                                showIngresoBases();
                                break;
                        }
                    } else {
                        showIngresoBases();
                    }
                    break;
                case 'aviones':
                    if (isset($params[2])) {
                        switch ($params[2]) {
                            case 'agregar':
                                showAgregarAvion();
                                break;
                            case 'editar':
                                if (isset($params[3])) {
                                    showEditarAvion($params[3]);
                                } else {
                                    showIngresoAviones();
                                }
                                break;
                            case 'eliminar':
                                if (isset($params[3])) {
                                    showEliminarAvion($params[3]);
                                } else {
                                    showIngresoAviones();
                                }
                                break;
                            default:
                                showIngresoAviones();
                                break;
                        }
                    } else {
                        showIngresoAviones();
                    }
                    break;
                case 'categorias':
                    if (isset($params[2])) {
                        switch ($params[2]) {
                            case 'agregar':
                                showAgregarCategoria();
                                break;
                            case 'editar':
                                if (isset($params[3])) {
                                    showEditarCategoria($params[3]);
                                } else {
                                    showIngresoCategorias();
                                }
                                break;
                            case 'eliminar':
                                if (isset($params[3])) {
                                    showEliminarCategoria($params[3]);
                                } else {
                                    showIngresoCategorias();
                                }
                                break;
                            default:
                                showIngresoCategorias();
                                break;
                        }
                    } else {
                        showIngresoCategorias();
                    }
                    break;
                default:
                    showIngreso();
                    break;
            }
        } else {
            showIngreso();
        }
        break;
    default:
        echo("La página no existe. Error 404");
        break;
}








