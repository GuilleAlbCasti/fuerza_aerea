<?php
// Abrimos  una conexión
$db = new PDO('mysql:host=localhost;dbname=fuerzaaerea;charset=utf8', 'root', '');
// Ejecutamos la consulta 
$sentencia = $db->prepare( "SELECT * FROM avion");
$sentencia->execute();
// Obtenemos los datos para generar el HTML
$aviones = $sentencia->fetchAll(PDO::FETCH_OBJ);
foreach($aviones as $avion) {
    echo "- " . $avion->modelo . "<br>";
}
// Cerramos la conexión



?>