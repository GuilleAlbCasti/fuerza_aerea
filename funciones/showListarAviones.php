<?php

    require_once 'funciones_para_bd.php';

    function showListarAviones() {

        $aviones = traer_aviones();

        $html = '
            <div class="main-listados">
                <h2 class="main-listados-titulo">Listado de Aviones</h2>
                <table class="main-listados-tabla">
                    <thead>
                        <tr>
                            <td>MODELO</td>
                            <td>CATEGORÍA</td>
                            <td>BASE AÉREA</td>
                        </tr>
                    </thead>
                    <tbody>';
                        foreach($aviones as $avion) {
                            $html .= '<tr>';
                            $html .= '<td><a href="../templates/avion.php?id='.$avion->id.'">'.$avion->modelo.'</a></td>';
                            $html .= '<td><a href="../templates/avion.php?id='.$avion->id.'">'.$avion->categoria.'</a></td>';
                            $html .= '<td><a href="../templates/avion.php?id='.$avion->id.'">'.$avion->base_nombre.'</a></td>';
                            $html .= '</tr>';
                        }; 
                        $html .= '
                    </tbody>
                </table>
            </div>';
        
        return $html;

    } 