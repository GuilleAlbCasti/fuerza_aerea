<?php

require_once __DIR__ . '/app/controllers/controllersUsers.php';
require_once __DIR__ . '/app/controllers/controllersAdmin.php';

$usuario = new controllersUsers();
$admin = new controllersAdmin();

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

switch($params[0]) {
    case 'home':
        $usuario->controlHome();
        break;
    case 'bases':
        $usuario->controlBases();
        break;
    case 'aviones':
        $usuario->controlAviones();
        break;
    case 'categorias':
        $usuario->controlCategorias();
        break;
    case 'avion':
        if (isset($params[1])) {
            $usuario->controlAvion($params[1]);
        } else {
            $usuario->controlHome();
        }
        break;
    case 'categoria':
        if (isset($params[1])) {
            $usuario->controlCategoria($params[1]);
        } else {
            $usuario->controlHome();
        }
        break;
    case 'ingreso':
        if (isset($params[1])) {
            switch ($params[1]) {
                case 'bases':
                    if (isset($params[2])) {
                        switch ($params[2]) {
                            case 'agregar':
                               $admin->controlCrearBase();
                               break;
                            case 'editar':
                               $admin->controlEditarBase($params[3]);
                               break;
                            case 'eliminar':
                               $admin->controlEliminarBase($params[3]);
                               break;
                            default:
                               $admin->controlIngresoBases();
                               break;
                        }
                   } else {
                       $admin->controlIngresoBases();
                   }
                   break;
                case 'aviones':
                    if (isset($params[2])) {
                         switch ($params[2]) {
                             case 'agregar':
                                $admin->controlCrearAvion();
                                break;
                             case 'editar':
                                $admin->controlEditarAvion($params[3]);
                                break;
                             case 'eliminar':
                                $admin->controlEliminarAvion($params[3]);
                                break;
                             default:
                                $admin->controlIngresoAviones();
                                break;
                         }
                    } else {
                        $admin->controlIngresoAviones();
                    }
                    break;
                case 'categorias':
                    if (isset($params[2])) {
                        switch ($params[2]) {
                            case 'agregar':
                               $admin->controlCrearCategoria();
                               break;
                            case 'editar':
                               $admin->controlEditarCategoria($params[3]);
                               break;
                            case 'eliminar':
                               $admin->controlEliminarCategoria($params[3]);
                               break;
                            default:
                               $admin->controlIngresoCategorias();
                               break;
                        }
                    } else {
                       $admin->controlIngresoCategorias();
                    }
                    break;
                }
        } else {
            $admin->controlIngreso();
        }
        break;
    default:
        echo("La página no existe. Error 404");
        break;
}