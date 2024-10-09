<?php

require_once '../templates/header.php';

$aviones = traer_categoria();

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
                            <td><a href="../templates/categoria/?categoria='.$avion->categoria.'">'.$avion->categoria.'</a></td>
                        </tr>';
                }; 
echo '
            </tbody>
        </table>
    </div>
</main>';

require_once '../templates/footer.php';
