<?php

require_once '../fuerza_aerea/templates/layouts/header.php';
require_once __DIR__ . '/../app/views/categoriaViews.php';

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
                foreach($categorias as $categoria) {
                    echo '
                        <tr>
                            <td><a href="categoria/'.$categoria->id.'">'.$categoria->nombre.'</a></td>
                        </tr>';
                }; 
echo '
            </tbody>
        </table>
    </div>
</main>';

require_once '../fuerza_aerea/templates/layouts/footer.php';
