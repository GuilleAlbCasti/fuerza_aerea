<?php

require_once '../funciones/showListarCategoria.php';
require_once '../templates/header.php';
echo '  
        <main>';
        if (isset($_GET['categoria'])) {
            $nombre_categoria = $_GET['categoria'];
            echo showListarCategoria($nombre_categoria);
        } else {
            echo '
                <div class="contenedor-fichero">
                    <h2 class="contenedor-fichero-info-modelo">La categoria no fue encontrada</h2>
                </div>';
        };     
        echo '
        </main>';

require_once '../templates/footer.php';
