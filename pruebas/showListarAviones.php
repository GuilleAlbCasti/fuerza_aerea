<?php

    require_once 'funciones_para_bd.php';

    function showListarAviones() {

        $aviones = traer_aviones();

        $html = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Aviones</title>
        </head>
        <body>
            <h2>Listado de Aviones</h2>
            <table border="1">
                <thead>
                    <tr>
                        <td>Modelo</td>
                        <td>Base Aérea</td>
                    </tr>
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
        </body>';
        
        return $html;

    } 

    echo (showListarAviones());