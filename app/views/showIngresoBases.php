<?php

require_once '../fuerza_aerea/templates/header.php';
require_once __DIR__ . '/../models/baseModel.php';

$baseModel = new baseModel();
$bases = $baseModel->getAllBase();

echo '
    <main>
        <div class="main-listados">
            <div class="main-ingreso-encabezado">
                <h2 class="main-listados-titulo, main-ingreso-encabezado-titulo">DATOS DE BASES</h2>
                <div class="main-listados-encabezado-botones"> 
                    <a href="#"><p class="contenedor-fichero-info-volver" id="boton-encabezado-administrador">AGREGAR</p></a>
                </div>  
            </div>
            <table class="main-listados-tabla">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>NOMBRE</td>
                        <td>UBICACIÓN</td>
                        <td>CAPACIDAD</td>
                        <td>ACCIONES</td>
                    </tr>
                    </tr>
                </thead>
                <tbody>';
                    foreach($bases as $base) {
                        echo '
                            <tr>
                                <td>'.$base->id.'</td>
                                <td>'.$base->nombre.'</td>
                                <td>'.$base->ubicacion.'</td>
                                <td>'.$base->capacidad.'</td>
                                <td id="columna-botones">
                                    <a href="avion/?id='.$base->id.'">
                                        <p class="contenedor-fichero-info-volver" id="boton-encabezado-administrador-listado">EDITAR</p>
                                    </a>
                                    <a href="avion/?id='.$base->id.'">
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
require_once '../fuerza_aerea/templates/footer.php';
