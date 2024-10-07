<?php

require_once '../funciones/showListarAvion.php';
require_once '../templates/header.php';

echo '
        <main>';
        if (isset($_GET['id'])) {
            $id_selecionado = $_GET['id'];
            echo showListarAvion($id_selecionado);
        } else {
            echo '
                <div class="contenedor-fichero">
                    <h2 class="contenedor-fichero-info-modelo">Avión no encontrado</h2>
                </div>';
        };     
        echo '
        </main>';

require_once '../templates/footer.php';

