<?php

echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fuerza Aérea</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <div class="titulo-contenedor">
            <img class="logo" src="img/logo1.webp" alt="logo ffaa">
            <h2 class="titulo">Listado de los aviones de la Fuerza Aérea Argentina</h2>
        </div>
        <div class="menu-contenedor">
            <nav class="menu-barra">
                <ul>
                    <li><a href="">HOME</a></li>
                    <li><a href="">BASES</a></li>
                    <li><a href="">AVIONES</a></li>
                    <li><a href="">INGRESAR</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="opcion-contenedor">
            <div class="opcion-contenedor-imagen">
                <img src="img/logo-blanco.png" alt="foto de bases militares">
            </div>
            <div class="opcion-contenedor-titulo">
                <p>BASES</p>
            </div>
        </div>
        <div class="opcion-contenedor">
            <div class="opcion-contenedor-imagen">
                <img src="img/avion blanco.png" alt="foto de aviones militares" id="foto_avion_en_opcion">
            </div>
            <div class="opcion-contenedor-titulo">
                <p>AVIONES</p>
            </div>
        </div>
    </main>
    <footer>
        <h6>by Guillermo Castiglioni & Nicolás Mateos</h6>
        <h6>Trabajo Práctico - Web II - TUDAI - UNICEN</h6>
    </footer>
   
</body>
</html>

'
?>