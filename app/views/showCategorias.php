<?php

require_once '../fuerza_aerea/templates/header.php';
require_once __DIR__ . '/../models/avionModel.php';

$avionModel = new avionModel();
$aviones = $avionModel->getAllCategoria();

echo '  
<main>
    <div class="main-listados">
        <h2 class="main-listados-titulo">Categorías</h2>
        <table class="main-listados-tabla">
            <thead>
                <tr>
                    <td>CATEGORÍA</td>
                </tr>
                </thead>
            <tbody>';
                foreach($aviones as $avion) {
                    echo '
                        <tr>
                            <td><a href="categoria/?categoria='.$avion->categoria.'">'.$avion->categoria.'</a></td>
                        </tr>';
                }; 
echo '
            </tbody>
        </table>
    </div>
</main>';

require_once '../fuerza_aerea/templates/footer.php';
