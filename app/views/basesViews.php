<?php

require_once __DIR__ . '/../models/baseModel.php';

class basesViews {

    // MOSTRAR LISTA DE BASES
    function showBases() {
        $baseModel = new baseModel();
        $bases = $baseModel->getAllBase();
        require_once '../fuerza_aerea/templates/showBases.php';
    }

 
}
