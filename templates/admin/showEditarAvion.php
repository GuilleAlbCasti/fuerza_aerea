<?php

require_once '../fuerza_aerea/templates/layouts/header.php';
require_once __DIR__ . '/../../app/views/adminViews.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_avion = $_POST['id'];
    $modelo = $_POST['modelo'];
    $anio = $_POST['anio'];
    $origen = $_POST['origen'];
    $horas_vuelo = $_POST['horas_vuelo'];
    $base_fk = $_POST['base_fk'];
    $categoria_fk = $_POST['categoria_fk'];

    $avionModel->editarAvion($id_avion,$modelo, $anio, $origen, $horas_vuelo, $base_fk, $categoria_fk);
   
    header('Location: /fuerza_aerea/ingreso/aviones');
    exit();
}

echo '
    <main>
        <div class="contenedor-formulario">
            <div class="contenedor-formulario-info">
                <form action="" method="POST">
                    <input type="hidden" name="id" value="'.$avionSeleccionado->id.'">
                    <label for="modelo">Modelo:</label>
                    <input type="text" name="modelo" id="modelo" value="'.$avionSeleccionado->modelo.'" required>
                    <br>
                    <label for="anio">Año:</label>
                    <input type="number" name="anio" id="anio" value="'.$avionSeleccionado->anio.'" required>
                    <br>
                    <label for="origen">Origen:</label>
                    <input type="text" name="origen" id="origen" value="'.$avionSeleccionado->origen.'" required>
                    <br>
                    <label for="horas_vuelo">Horas de Vuelo:</label>
                    <input type="number" name="horas_vuelo" id="horas_vuelo" value="'.$avionSeleccionado->horas_vuelo.'" required>
                    <br>
                    <label for="base_fk">Base:</label>
                    <select name="base_fk" id="base_fk" required>';
                    foreach ($listaBases as $base) {
                        $selected = $avionSeleccionado && $avionSeleccionado->base_fk == $base->id ? 'selected' : '';
                        echo '<option value="'.$base->id.'" '.$selected.'>'.$base->nombre.'</option>';
                    }
                    echo '
                    </select>
                    <br>
                    <label for="categoria_fk">Categoría:</label>
                    <select name="categoria_fk" id="categoria_fk" required>';
                    foreach ($listaCategorias as $categoria) {
                        $selected = $avionSeleccionado && $avionSeleccionado->categoria_fk == $categoria->id ? 'selected' : '';
                        echo '<option value="'.$categoria->id.'" '.$selected.'>'.$categoria->nombre.'</option>';
                    }
                    echo '
                    </select>
                    <br>
                    <input type="submit" value="Guardar Cambios">
                    <a href="/fuerza_aerea/ingreso/aviones"><p class="contenedor-fichero-info-volver" id="boton-fichero-info-volver">VOLVER</p></a>
                </form>
            </div>
        </div>
    </main>';

require_once '../fuerza_aerea/templates/layouts/footer.php';
