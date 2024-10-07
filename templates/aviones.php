<?php

require_once '/fuerza_aerea/funciones/showListarAviones.php';
require_once '/fuerza_aerea/templates/header.php';
echo '
        <main>';
        echo showListarAviones();
        echo '
        </main>';
require_once '/fuerza_aerea/templates/footer.php';
