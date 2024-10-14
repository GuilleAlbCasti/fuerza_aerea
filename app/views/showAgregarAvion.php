<?php

require_once '../fuerza_aerea/templates/header.php';
require_once __DIR__ . '/../models/avionModel.php';
require_once __DIR__ . '/../models/baseModel.php';

$avionModel = new avionModel();
$baseModel = new baseModel();
$bases = $baseModel->getAllBase();
$aviones = $avionModel->getAllCategoria();

echo '
    <main>';
        echo '
        <div class="contenedor-formulario">
            <div class="contenedor-formulario-info">
                <form action="/fuerza_aerea/app/views/showAgregarAvion.php" method="POST">
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
                    foreach ($bases as $base) {
                        echo '<option value="'.$base->id.'">'.$base->nombre.'</option>';
                    }
                    echo '
                    </select>
                    <br>
                    <label for="categoria">Categoría:</label>
                    <select type="text" name="categoria" id="categoria" required>';
                    foreach ($aviones as $avion) {
                        echo '<option value="'.$avion->categoria.'">'.$avion->categoria.'</option>';
                    }
                    echo '
                    </select>
                    <br>
                    <input type="submit" value="AGREGAR">
                </form>
            </div>
        </div>';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $modelo = $_POST['modelo'];
        $anio = $_POST['anio'];
        $origen = $_POST['origen'];
        $horas_vuelo = $_POST['horas_vuelo'];
        $base_fk = $_POST['base_fk'];
        $categoria = $_POST['categoria'];

        
        $avion = $avionModel->agregarAvion($modelo, $anio, $origen, $horas_vuelo, $base_fk, $categoria);

        echo "Avión agregado exitosamente.";
    }
    echo '
    </main>';

require_once '../fuerza_aerea/templates/footer.php';

