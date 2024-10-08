<?php

    require_once 'templates/header.php';
    echo '
        <main>
            <div class="opcion-contenedor">
                <div class="opcion-contenedor-imagen">
                    <a href="/fuerza_aerea/templates/bases.php"><img src="img/logo-blanco.png" alt="foto de bases militares"></a>
                </div>
                <div class="opcion-contenedor-titulo">
                    <p>BASES</p>
                </div>
            </div>
            <div class="opcion-contenedor">
                <div class="opcion-contenedor-imagen">
                    <a href="/fuerza_aerea/templates/aviones.php"><img src="img/avion blanco.png" alt="foto de aviones militares" id="foto_avion_en_opcion"></a>
                </div>
                <div class="opcion-contenedor-titulo">
                    <p>AVIONES</p>
                </div>
            </div>
        </main>';
    require_once 'templates/footer.php';
