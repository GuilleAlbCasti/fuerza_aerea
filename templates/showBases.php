<?php

require_once '../fuerza_aerea/templates/layouts/header.php';
require_once __DIR__ . '/../app/views/basesViews.php';

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
    
require_once '../fuerza_aerea/templates/layouts/footer.php';
