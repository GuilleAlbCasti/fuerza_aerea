<?php

require_once '../fuerza_aerea/templates/layouts/header.php';
require_once __DIR__ . '/../app/views/avionViews.php';

echo '
    <main>
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
               <img src="/fuerza_aerea/static/img/pampa.jpg" alt="imagen del avión" id="foto-fichero-avion">               
            </div>
        </div>
    </main>';

require_once '../fuerza_aerea/templates/layouts/footer.php';

