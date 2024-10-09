<?php

    require_once 'funciones_para_bd.php';

    function showListarCategorias() {

        $aviones = traer_categoria();

        $html = '
            <div class="main-listados">
                <h2 class="main-listados-titulo">Categorías</h2>
                <table class="main-listados-tabla">
                    <thead>
                        <tr>
                            <td>CATEGORÍA</td>
                        </tr>
                    </thead>
                    <tbody>';
                        foreach($aviones as $avion) {
                            $html .= '<tr>';
                            $html .= '<td><a href="../templates/categoria.php?categoria='.$avion->categoria.'">'.$avion->categoria.'</a></td>';
                            $html .= '</tr>';
                        }; 
                        $html .= '
                    </tbody>
                </table>
            </div>';
        
        return $html;

    } 