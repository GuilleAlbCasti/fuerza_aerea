<?php

require_once 'header.php';

echo '<main>';

if (isset($_GET['categoria'])) {
    $nombre_categoria = $_GET['categoria'];
    $aviones = traer_aviones_por_categoria($nombre_selecionado);
    echo '
        <div class="main-listados">
            <h2 class="main-listados-titulo">Listado de Categoria "'.$nombre_selecionado.'"</h2>
            <table class="main-listados-tabla">
                <thead>
                    <tr>
                        <td>MODELO</td>
                        <td>BASE AÉREA</td>
                    </tr>
                </thead>
                <tbody>';
                    foreach($aviones as $avion) {
                        echo '
                            <tr>
                                <td><a href="../templates/avion/?id='.$avion->id.'">'.$avion->modelo.'</a></td>
                                <td><a href="../templates/avion/?id='.$avion->id.'">'.$avion->base_nombre.'</a></td>
                            </tr>';
                    }; 
    echo '
                </tbody>
            </table>
        </div>';        
} else {
    echo '
        <div class="contenedor-fichero">
            <h2 class="contenedor-fichero-info-modelo">La categoria no fue encontrada</h2>
        </div>';
};     
echo '</main>';

require_once 'footer.php';
