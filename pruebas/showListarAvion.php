<?php

    require_once 'funciones_para_bd.php';

    $id_selecionado = 21;

    function showListarAvion($id_selecionado) {

        $avion = traer_avion($id_selecionado);

        $html = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Avión</title>
        </head>
        <body>
            <h2>Detalle del Avión</h2>
            <table border="1">
                <thead>
                    <tr>
                        <td>Modelo</td>
                        <td>origen</td>
                        <td>Horas de vuelo</td>
                        <td>Año</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>';
                        $html .= '<td>'.$avion->modelo.'</td>';
                        $html .= '<td>'.$avion->origen.'</td>';
                        $html .= '<td>'.$avion->horas_vuelo.'</td>';
                        $html .= '<td>'.$avion->anio.'</td>
                    </tr>
                </tbody>
            </table>
        </body>';
        
        return $html;

    } 

    echo (showListarAvion($id_selecionado));