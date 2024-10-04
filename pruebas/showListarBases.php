<?php

    require_once 'funciones_para_bd.php';

    function showListarBases() {

        $bases = traer_bases();

        $html = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Bases</title>
        </head>
        <body>
            <h2>Listado de las Bases Aéreas</h2>
            <table border="1">
                <thead>
                    <tr>
                        <td>Nombre</td>
                        <td>Ubicación</td>
                        <td>Capacidad</td>
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
        </body>';
        
        return $html;

    } 

    echo (showListarBases());