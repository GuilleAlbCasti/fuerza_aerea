<?php
require_once '../templates/header.php';
require_once '../funciones/showListarBases.php';

echo '
    <main>';
        echo showListarBases();
        echo '
    </main>';
require_once '../templates/footer.php';
