<?php

require_once __DIR__ . '/../models/dbModel.php';
require_once __DIR__ .'/../views/authViews.php';
require_once __DIR__ .'/../models/userModel.php';
require_once __DIR__ .'/../views/userViews.php';

class controllersAuth {
    
    private $auth;
    private $userModel;
    private $res;

    public function __construct($res) {
        $this->res = $res;
        $this->auth = new authViews($this->res->user);
        $this->userModel = new userModel();
    }

    //MUESTRO LOGIN
    public function controlLogin() {
        return $this->auth->showLogin();
    }

    //INGRESO
    public function login() {

        if (!isset($_POST['nombreDeUsuario']) || empty($_POST['nombreDeUsuario'])) {
            return $this->auth->showLogin($error = 'Falta completar el nombre de usuario');
        }
    
        if (!isset($_POST['contraseniaDeUsuario']) || empty($_POST['contraseniaDeUsuario'])) {
            return $this->auth->showLogin($error = 'Falta completar la contraseña de usuario');
        }
    
        $nombre = $_POST['nombreDeUsuario'];
        $password = $_POST['contraseniaDeUsuario'];
    
        // VERIFICAR QUE EL USUARIO SE ENCUENTRE EN LA BASE DE DATOS
        $usuarioFromDB = $this->userModel->getUsuarioByNombre($nombre);
    
        // Verificar si el usuario existe
        if ($usuarioFromDB && password_verify($password, $usuarioFromDB->password)) {
            // GUARDADO DE LA SESION DEL USUARIO
            session_start();
            $_SESSION['ID_USER'] = $usuarioFromDB->id;
            $_SESSION['NOMBRE_USER'] = $usuarioFromDB->nombre;
            $_SESSION['EMAIL_USER'] = $usuarioFromDB->email;
            $_SESSION['LAST_ACTIVITY'] = time();

            header('Location: /fuerza_aerea/admin');

        } else {
            return $this->auth->showLogin($error = 'Credenciales incorrectas');
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: /fuerza_aerea/home');

    }

}

