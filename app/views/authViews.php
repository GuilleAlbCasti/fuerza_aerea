<?php

require_once __DIR__ . '/../models/avionModel.php';
require_once __DIR__ . '/../models/baseModel.php';
require_once __DIR__ . '/../models/categoriaModel.php';

class authViews {

    private $user;

    public function __construct($user){
        $this->user = $user;
    }
    
    function showLogin($error = '') {
        require '../fuerza_aerea/templates/auth/showLogin.phtml';
    }
    
}