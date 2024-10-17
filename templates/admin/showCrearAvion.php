<?php

require_once '../fuerza_aerea/templates/layouts/header.php';
require_once __DIR__ . '/../../app/views/adminViews.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $modelo = $_POST['modelo'];
    $anio = $_POST['anio'];
    $origen = $_POST['origen'];
    $horas_vuelo = $_POST['horas_vuelo'];
    $base_fk = $_POST['base_fk'];
    $categoria = $_POST['categoria'];

    $avionModel->agregarAvion($modelo, $anio, $origen, $horas_vuelo, $base_fk, $categoria);
   
    header('Location: /fuerza_aerea/ingreso/aviones');
    exit();
}

echo '
    <main>
        <div class="contenedor-formulario">
            <div class="contenedor-formulario-info">
                <form action="" method="POST">
                    <label for="modelo">Modelo:</label>
                    <input type="text" name="modelo" id="modelo" required>
                    <br>
                    <label for="anio">Año:</label>
                    <input type="number" name="anio" id="anio" required>
                    <br>
                    <label for="origen">Origen:</label>
                    <input type="text" name="origen" id="origen" required>
                    <br>
                    <label for="horas_vuelo">Horas de Vuelo:</label>
                    <input type="number" name="horas_vuelo" id="horas_vuelo" required>
                    <br>
                    <label for="base_fk">Base:</label>
                    <select type="number" name="base_fk" id="base_fk" required>';
                    foreach ($listaBases as $base) {
                        echo '<option value="'.$base->id.'">'.$base->nombre.'</option>';
                    }
                    echo '
                    </select>
                    <br>
                    <label for="categoria">Categoría:</label>
                    <select type="text" name="categoria" id="categoria" required>';
                    foreach ($listaCategorias as $categoria) {
                        echo '<option value="'.$categoria->categoria.'">'.$categoria->categoria.'</option>';
                    }
                    echo '
                    </select>
                    <br>
                    <input type="submit" value="AGREGAR">
                    <a href="/fuerza_aerea/ingreso/aviones"><p class="contenedor-fichero-info-volver" id="boton-fichero-info-volver">VOLVER</p></a>
                </form>
            </div>
        </div>
    </main>';

require_once '../fuerza_aerea/templates/layouts/footer.php';

