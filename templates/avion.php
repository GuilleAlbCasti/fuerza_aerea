<?php

require_once '../pruebas/showListarAvion.php';

echo '

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Avión</title>
        <link rel="stylesheet" href="../css/estilos.css">
        <link rel="stylesheet" href="../css/estilos-fichero.css">
    </head>
    <body>
        <header>
            <div class="titulo-contenedor">
                <img class="logo" src="../img/logo1.webp" alt="logo ffaa">
                <h2 class="titulo">Listado de los aviones de la Fuerza Aérea Argentina</h2>
            </div>
            <div class="menu-contenedor">
                <nav class="menu-barra">
                    <ul>
                        <li><a href="../index.php">HOME</a></li>
                        <li><a href="../templates/bases.php">BASES</a></li>
                        <li><a href="../templates/aviones.php">AVIONES</a></li>
                        <li><a href="">INGRESAR</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main>';
        if (isset($_GET['id'])) {
            $id_selecionado = $_GET['id'];
            echo showListarAvion($id_selecionado);
        } else {
            echo '
                <div class="contenedor-fichero">
                    <h2 class="contenedor-fichero-info-modelo">Avión no encontrado</h2>
                </div>';
        };     
        echo '
        </main>
        <footer>
            <h6>by Guillermo Castiglioni & Nicolás Mateos</h6>
            <h6>Trabajo Práctico - Web II - TUDAI - UNICEN</h6>
        </footer>
    </body>
    </html>
    '

?>