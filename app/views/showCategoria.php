<?php

require_once '../fuerza_aerea/templates/header.php';
require_once __DIR__ . '/../models/avionModel.php';


echo '<main>';


if (isset($_GET['categoria'])) {
    $nombre_selecionado = $_GET['categoria'];
    $avionModel = new avionModel();
    $aviones = $avionModel->getCategoria($nombre_selecionado);
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
                                <td><a href="/fuerza_aerea/avion/?id='.$avion->id.'">'.$avion->modelo.'</a></td>
                                <td><a href="/fuerza_aerea/avion/?id='.$avion->id.'">'.$avion->base_nombre.'</a></td>
                            </tr>';
                    }; 
                    echo '
                </tbody>
            </table>
            <br>
            <a href="../categorias"><p class="contenedor-fichero-info-volver" id="boton-fichero-info-volver">VOLVER</p></a>  
        </div>';
} else {
    echo '
        <div class="contenedor-fichero">
            <h2 class="contenedor-fichero-info-modelo">La categoria no fue encontrada</h2>
        </div>';
};     
echo '</main>';

require_once '../fuerza_aerea/templates/footer.php';
