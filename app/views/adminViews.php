<?php

require_once __DIR__ . '/../models/avionModel.php';
require_once __DIR__ . '/../models/baseModel.php';

class adminViwes {
    
    // LISTAR LAS OPCIONES 
    function showIngreso() {
        require_once '../fuerza_aerea/templates/admin/showIngreso.php';
    }
}