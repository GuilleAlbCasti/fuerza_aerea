<?php

function sessionAuthMiddleware($res) {
    session_start();
    if(isset($_SESSION['ID_USER'])) {
        $res->user = new stdClass();
        $res->user->id = $_SESSION['ID_USER'];
        $res->user->nombre = $_SESSION['NOMBRE_USER'];
        return;
    } else {
        header('Location: /fuerza_aerea/admin/controlLogin');
        die();
    }
}