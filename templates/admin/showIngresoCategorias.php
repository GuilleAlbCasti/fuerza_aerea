<?php

require_once '../fuerza_aerea/templates/layouts/header.php';
require_once __DIR__ . '/../../app/views/adminViews.php';


echo '  
<main>
    <div class="main-listados">
        <div class="main-ingreso-encabezado">
            <h2 class="main-listados-titulo, main-ingreso-encabezado-titulo">DATOS DE CATEGORÍAS</h2>
            <div class="main-listados-encabezado-botones"> 
                <a href="#"><p class="contenedor-fichero-info-volver" id="boton-encabezado-administrador">AGREGAR</p></a>
            </div>  
        </div>
        <table class="main-listados-tabla">
            <thead>
                <tr>
                    <td>NOMBRE DE CATEGORÍA</td>
                    <td>ACCIONES</td>
                </tr>
                </thead>
            <tbody>';
                foreach($aviones as $avion) {
                    echo '
                        <tr>
                            <td><a href="categoria/?categoria='.$avion->categoria.'">'.$avion->categoria.'</a></td>
                            <td id="columna-botones">
                                <a href="avion/?id='.$avion->categoria.'">
                                    <p class="contenedor-fichero-info-volver" id="boton-encabezado-administrador-listado">EDITAR</p>
                                </a>
                                <a href="avion/?id='.$avion->categoria.'">
                                    <p class="contenedor-fichero-info-volver" id="boton-encabezado-administrador-listado">ELIMINAR</p>
                                </a>
                            </td>
                        </tr>';
                }; 
echo '
            </tbody>
        </table>
    </div>
</main>';

require_once '../fuerza_aerea/templates/layouts/footer.php';
