<?php

require_once '../fuerza_aerea/templates/layouts/header.php';
require_once __DIR__ . '/../app/views/categoriaViews.php';



echo '<main>
        <div class="main-listados">
            <h2 class="main-listados-titulo">Listado de Categoria "'.$categoria->nombre.'"</h2>
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
        </div>
    </main>';

require_once '../fuerza_aerea/templates/layouts/footer.php';
