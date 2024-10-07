<?php

    require_once '../pruebas/funciones_para_bd.php';

    function showListarBases() {

        $bases = traer_bases();

        $html = '
            <div class="main-listados">
                <h2 class="main-listados-titulo">Listado de las Bases Aéreas</h2>
                <table class="main-listados-tabla">
                    <thead>
                        <tr>
                            <td>NOMBRE</td>
                            <td>UBICACIÓN</td>
                            <td>CAPACIDAD</td>
                        </tr>
                        </tr>
                    </thead>
                    <tbody>';
                        foreach($bases as $base) {
                            $html .= '<tr>';
                            $html .= '<td>'.$base->nombre.'</td>';
                            $html .= '<td>'.$base->ubicacion.'</td>';
                            $html .= '<td>'.$base->capacidad.'</td>';
                            $html .= '</tr>';
                        }; 
                        $html .= '
                    </tbody>
                </table>
            </div>';
        
        return $html;

    }
