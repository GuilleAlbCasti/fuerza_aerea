<?php
require_once __DIR__ . '/libs/response.php';
require_once __DIR__ . '/app/middlewares/sessionAuthMiddleware.php';
require_once __DIR__ . '/app/controllers/controllersUsers.php';
require_once __DIR__ . '/app/controllers/controllersAdmin.php';
require_once __DIR__ . '/app/controllers/controllersAuth.php';

$res = new Response();

$usuario = new controllersUsers();
$admin = new controllersAdmin($res);
$auth = new controllersAuth($res);

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

switch ($params[0]) {
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
    case 'admin':
        if (isset($params[1])) {
            switch ($params[1]) {
                case 'controlLogin':
                    $auth->controlLogin();
                    break;
                case 'login':
                    $auth->login();
                    break;
                case 'logout':
                    $auth->logout();
                    break;
                case 'bases':
                    if (isset($params[2])) {
                        switch ($params[2]) {
                            case 'agregar':
                                sessionAuthMiddleware($res);
                                $admin->controlCrearBase();
                                break;
                            case 'editar':
                                sessionAuthMiddleware($res);
                                $admin->controlEditarBase($params[3]);
                                break;
                            case 'eliminar':
                                sessionAuthMiddleware($res);
                                $admin->controlEliminarBase($params[3]);
                                break;
                            default:
                                sessionAuthMiddleware($res);
                                $admin->controlIngresoBases();
                                break;
                        }
                    } else {
                        sessionAuthMiddleware($res);
                        $admin->controlIngresoBases();
                    }
                    break;
                case 'aviones':
                    if (isset($params[2])) {
                        switch ($params[2]) {
                            case 'agregar':
                                sessionAuthMiddleware($res);
                                $admin->controlCrearAvion();
                                break;
                            case 'editar':
                                sessionAuthMiddleware($res);
                                $admin->controlEditarAvion($params[3]);
                                break;
                            case 'eliminar':
                                sessionAuthMiddleware($res);
                                $admin->controlEliminarAvion($params[3]);
                                break;
                            default:
                                sessionAuthMiddleware($res);
                                $admin->controlIngresoAviones();
                                break;
                        }
                    } else {
                        sessionAuthMiddleware($res);
                        $admin->controlIngresoAviones();
                    }
                    break;
                case 'categorias':
                    if (isset($params[2])) {
                        switch ($params[2]) {
                            case 'agregar':
                                sessionAuthMiddleware($res);
                                $admin->controlCrearCategoria();
                                break;
                            case 'editar':
                                sessionAuthMiddleware($res);
                                $admin->controlEditarCategoria($params[3]);
                                break;
                            case 'eliminar':
                                sessionAuthMiddleware($res);
                                $admin->controlEliminarCategoria($params[3]);
                                break;
                            default:
                                sessionAuthMiddleware($res);
                                $admin->controlIngresoCategorias();
                                break;
                        }
                    } else {
                        sessionAuthMiddleware($res);
                        $admin->controlIngresoCategorias();
                    }
                    break;
            }
        } else {
            sessionAuthMiddleware($res);
            $admin->controlIngreso();
        }
        break;
    default:
        echo("La página no existe. Error 404");
        break;
}
