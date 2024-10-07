<?php

    require_once 'funciones_para_bd.php';

    function showListarAviones() {

        $aviones = traer_aviones();

        $html = '
            <div class="main-listados">
                <h2 class="main-listados-titulo">Listado de las Bases Aéreas</h2>
                <table class="main-listados-tabla">
                    <thead>
                        <tr>
                            <td>MODELO</td>
                            <td>BASE AÉREA</td>
                        </tr>
                    </thead>
                    <tbody>';
                        foreach($aviones as $avion) {
                            $html .= '<tr>';
                            $html .= '<td>'.$avion->modelo.'</td>';
                            $html .= '<td>'.$avion->base_nombre.'</td>';
                            $html .= '</tr>';
                        }; 
                        $html .= '
                    </tbody>
                </table>
            </div>';
        
        return $html;

    } 
