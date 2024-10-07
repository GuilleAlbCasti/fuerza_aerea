<?php

require_once '../funciones/showListarAviones.php';
require_once '../templates/header.php';
echo '
        <main>';
        echo showListarAviones();
        echo '
        </main>';
require_once '../templates/footer.php';
