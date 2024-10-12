<?php

require_once '../fuerza_aerea/templates/header.php';

echo '
<main>
    <div class="main-listados">
        <h2 class="main-listados-titulo">ADMINISTRADOR DE DATOS</h2>
        <br>
        <div class="opcion-contenedor">
            <div class="opcion-contenedor-imagen">
                <a href="/fuerza_aerea/bases"><img src="static/img/logo-blanco.png" alt="foto de bases militares"></a>
            </div>
            <div class="opcion-contenedor-titulo">
                <p>BASES</p>
            </div>
        </div>
        <div class="opcion-contenedor">
            <div class="opcion-contenedor-imagen">
                <a href="/fuerza_aerea/aviones"><img src="static/img/avion blanco.png" alt="foto de aviones militares" id="foto_avion_en_opcion"></a>
            </div>
            <div class="opcion-contenedor-titulo">
                <p>AVIONES</p>
            </div>
        </div>
    </div>
</main>';
require_once '../fuerza_aerea/templates/footer.php';
