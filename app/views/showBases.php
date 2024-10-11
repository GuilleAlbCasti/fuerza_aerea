<?php

require_once '../fuerza_aerea/templates/header.php';
require_once 'models/baseModel.php';

$baseModel = new baseModel();
$bases = $baseModel->getAllBase();

echo '
    <main>
        <div class="main-listados">
            <h2 class="main-listados-titulo">Listado de las Bases Aéreas</h2>
            <table class="main-listados-tabla">
                <thead>
                    <tr>
                        <td>NOMBRE</td>
                        <td>UBICACIÓN</td>
                        <td>CAPACIDAD</td>
                    </tr>
                    </tr>
                </thead>
                <tbody>';
                    foreach($bases as $base) {
                        echo '
                            <tr>
                                <td>'.$base->nombre.'</td>
                                <td>'.$base->ubicacion.'</td>
                                <td>'.$base->capacidad.'</td>
                            </tr>';
                    }; 
echo '
                </tbody>
            </table>
        </div>
    </main>';
require_once '../fuerza_aerea/templates/footer.php';
