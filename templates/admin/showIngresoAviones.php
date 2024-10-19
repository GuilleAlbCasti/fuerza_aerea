<?php

require_once '../fuerza_aerea/templates/layouts/header.php';
require_once __DIR__ . '/../../app/views/adminViews.php';


echo '
<main>
    <div class="main-listados">
        <div class="main-ingreso-encabezado">
            <h2 class="main-listados-titulo, main-ingreso-encabezado-titulo">DATOS DE AVIONES</h2>
            <div class="main-listados-encabezado-botones"> 
                <a href="/fuerza_aerea/ingreso/aviones/agregar"><p class="contenedor-fichero-info-volver" id="boton-encabezado-administrador">AGREGAR</p></a>
            </div>  
        </div>
        <table class="main-listados-tabla">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>MODELO</td>
                    <td>AÑO</td>
                    <td>ORIGEN</td>
                    <td>HORAS</td>
                    <td>CATEGORÍA</td>
                    <td>BASE AÉREA</td>
                    <td>ACCIONES</td>
                </tr>
            </thead>
            <tbody>';
                foreach($aviones as $avion) {
                    echo '
                    <tr>
                        <td>'.$avion->id.'</td>  
                        <td>'.$avion->modelo.'</td>
                        <td>'.$avion->anio.'</td>
                        <td>'.$avion->origen.'</td>
                        <td>'.$avion->horas_vuelo.'</td>
                        <td>'.$avion->categoria_nombre.'</td>
                        <td>'.$avion->base_nombre.'</td>
                        <td id="columna-botones">
                            <a href="/fuerza_aerea/ingreso/aviones/editar/'.$avion->id.'">
                                <p class="contenedor-fichero-info-volver" id="boton-encabezado-administrador-listado">EDITAR</p>
                            </a>
                            <a href="/fuerza_aerea/ingreso/aviones/eliminar/'.$avion->id.'">
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
