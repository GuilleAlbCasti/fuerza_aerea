<?php

require_once '../pruebas/showListarBases.php';

echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bases Aéreas</title>
        <link rel="stylesheet" href="../css/estilos.css">
        <link rel="stylesheet" href="../css/estilos-tablas.css">
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
                        <li><a href="../templates/bases.html">BASES</a></li>
                        <li><a href="../templates/aviones.html">AVIONES</a></li>
                        <li><a href="">INGRESAR</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main>';
echo showListarBases();
echo '
        </main>
        <footer>
            <h6>by Guillermo Castiglioni & Nicolás Mateos</h6>
            <h6>Trabajo Práctico - Web II - TUDAI - UNICEN</h6>
        </footer>
    </body>
    </html>'

?>