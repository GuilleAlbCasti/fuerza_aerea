<?php

require_once '../fuerza_aerea/templates/header.php';
require_once 'models/avionModel.php';

$avionModel = new avionModel();
$avion = $avionModel->getAllAvion();

echo '
<main>
    <div class="main-listados">
        <h2 class="main-listados-titulo">Listado de Aviones</h2>
        <table class="main-listados-tabla">
            <thead>
                <tr>
                    <td>MODELO</td>
                    <td>CATEGORÍA</td>
                    <td>BASE AÉREA</td>
                </tr>
            </thead>
            <tbody>';
                foreach($aviones as $avion) {
                    echo '
                    <tr>  
                        <td><a href="avion/?id='.$avion->id.'">'.$avion->modelo.'</a></td>
                        <td><a href="avion/?id='.$avion->id.'">'.$avion->categoria.'</a></td>
                        <td><a href="avion/?id='.$avion->id.'">'.$avion->base_nombre.'</a></td>
                    </tr>';
                }; 
echo '
            </tbody>
        </table>
    </div>
</main>';
require_once '../fuerza_aerea/templates/footer.php';
