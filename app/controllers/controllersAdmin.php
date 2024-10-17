<?php

require_once __DIR__ . '/../models/dbModel.php';
require_once __DIR__ .'/../views/adminViews.php';

class controllersAdmin {
    
    function controlIngreso() {
        $admin = new adminViews();
        $admin->showIngreso();
    }
    
    function controlIngresoBases() {
        $admin = new adminViews();
        $admin->showIngresoBases();
    }
    
    function controlIngresoAviones() {
        $admin = new adminViews();
        $admin->showIngresoAviones();
    }
    
    function controlIngresoCategorias() {
        $admin = new adminViews();
        $admin->showIngresoCategorias();
    }


}

