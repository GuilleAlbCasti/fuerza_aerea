<?php

require_once '../fuerza_aerea/templates/layouts/header.php';
require_once __DIR__ . '/../../app/views/adminViews.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $ubicacion = $_POST['ubicacion'];
    $capacidad = $_POST['capacidad'];

    $baseModel->editarBase($id, $nombre, $ubicacion, $capacidad);
   
    header('Location: /fuerza_aerea/ingreso/bases');
    exit();
}

echo '
    <main>
        <div class="contenedor-formulario">
            <div class="contenedor-formulario-info">
                <form action="" method="POST">
                    <input type="hidden" name="id" value="'.$baseSeleccionada->id.'">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" value="'.$baseSeleccionada->nombre.'" required>
                    <br>
                    <label for="ubicacion">Ubicacion:</label>
                    <input type="text" name="ubicacion" id="ubicacion" value="'.$baseSeleccionada->ubicacion.'" required>
                    <br>
                    <label for="capacidad">Capacidad:</label>
                    <input type="number" name="capacidad" id="capacidad" value="'.$baseSeleccionada->capacidad.'" required>
                    <br>
                    <input type="submit" value="EDITAR">
                    <a href="/fuerza_aerea/ingreso/bases"><p class="contenedor-fichero-info-volver" id="boton-fichero-info-volver">VOLVER</p></a>
                </form>
            </div>
        </div>
    </main>';

require_once '../fuerza_aerea/templates/layouts/footer.php';
