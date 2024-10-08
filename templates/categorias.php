<?php

require_once '../funciones/showListarCategorias.php';
require_once '../templates/header.php';
echo '  
        <main>';
        echo showListarCategorias();
        echo '
        </main>';

require_once '../templates/footer.php';
