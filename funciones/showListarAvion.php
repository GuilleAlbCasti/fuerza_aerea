<?php

    require_once 'funciones_para_bd.php';

    function showListarAvion($id_selecionado) {

        $avion = traer_avion($id_selecionado);

        $html = '
            <div class="contenedor-fichero">
                <div class="contenedor-fichero-info">
                    <h2 class="contenedor-fichero-info-modelo">'.$avion->modelo.'/'.$avion->id.'</h2>
                    <p class="contenedor-fichero-info-caracteristicas">
                        El IA-63 Pampa III es un avión de entrenamiento avanzado y ataque ligero fabricado en Argentina. Es utilizado por la Fuerza Aérea Argentina para la formación de pilotos y misiones tácticas, combinando tecnología moderna y excelente maniobrabilidad.</p>
                    <p class="contenedor-fichero-info-horasVuelo">Horas de Vuelo: '.$avion->horas_vuelo.'</p>
                    <p class="contenedor-fichero-info-origen">Origen: '.$avion->origen.'</p>
                    <p class="contenedor-fichero-info-anio">Año de Fabricación: '.$avion->anio.'</p>
                    <p class="contenedor-fichero-info-categoria">Categoría: '.$avion->categoria.'</p>
                    <a href="/fuerza_aerea/templates/aviones.php"><p class="contenedor-fichero-info-volver" id="boton-fichero-info-volver">VOLVER</p></a>
                </div>
                <div class="contenedor-fichero-foto">
                    <img src="../img/pampa.jpg" alt="imagen del avión" id="foto-fichero-avion">
                </div>
            </div>';
        
        return $html;

    } 

  

    