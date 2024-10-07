<?php

require_once '/fuerza_aerea/templates/header.php';
require_once '/fuerza_aerea/funciones/showListarBases.php';

echo '
    <main>';
        echo showListarBases();
        echo '
    </main>';
require_once '/fuerza_aerea/templates/footer.php';
