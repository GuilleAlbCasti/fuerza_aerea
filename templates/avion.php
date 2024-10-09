<?php

require_once 'header.php';

echo '
    <main>';
    if (isset($_GET['id'])) {
        $id_selecionado = $_GET['id'];
        $avion = traer_avion($id_selecionado);
        echo '
            <div class="contenedor-fichero">
                <div class="contenedor-fichero-info">
                    <h2 class="contenedor-fichero-info-modelo">'.$avion->modelo.'/'.$avion->id.'</h2>
                    <p class="contenedor-fichero-info-caracteristicas">
                        El IA-63 Pampa III es un avión de entrenamiento avanzado y ataque ligero fabricado en Argentina. Es utilizado por la Fuerza Aérea Argentina para la formación de pilotos y misiones tácticas, combinando tecnología moderna y excelente maniobrabilidad.</p>
                    <p class="contenedor-fichero-info-horasVuelo">Horas de Vuelo: '.$avion->horas_vuelo.'</p>
                    <p class="contenedor-fichero-info-origen">Origen: '.$avion->origen.'</p>
                    <p class="contenedor-fichero-info-anio">Año de Fabricación: '.$avion->anio.'</p>
                    <p class="contenedor-fichero-info-categoria">Categoría: '.$avion->categoria.'</p>
                    <a href="../aviones"><p class="contenedor-fichero-info-volver" id="boton-fichero-info-volver">VOLVER</p></a>
                </div>
                <div class="contenedor-fichero-foto">
                   <img src="../img/pampa.jpg" alt="imagen del avión" id="foto-fichero-avion">                    </div>
                </div>';        
    } else {
        echo '
            <div class="contenedor-fichero">
                <h2 class="contenedor-fichero-info-modelo">Avión no encontrado</h2>
            </div>';
    };     
echo '
    </main>';

require_once 'footer.php';

