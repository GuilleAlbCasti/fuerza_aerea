<?php

// Abrimos  una conexión
$db = new PDO('mysql:host=localhost; dbname=ffaa_db; charset=utf8', 'root', '');
// --------------------------------------------------------------------------------------------------
echo "<h3>Unir tablas con JOIN, Aviones con sus pilotoso</h3>";

//Traigo la lista completa de los pilotos
$query = $db-> prepare("SELECT a.modelo, a.origen, p.grado, p.nombre, p.apellido, a.horas_vuelo FROM aviones a JOIN pilotos p ON a.piloto = p.dni");
$query -> execute();
$lista = $query->fetchAll(PDO::FETCH_OBJ);

//Genero lista
foreach($lista as $item) {
    echo " - El Avión modelo ".$item->modelo." volado por el ".$item->grado." ".$item->nombre." ".$item->apellido." posee ".$item->horas_vuelo." horas de vuelo y es de origen ".$item->origen.".<br>";
}
echo "<hr>";

// --------------------------------------------------------------------------------------------------
echo "<h3>Tabla pilotos para buscar letras la letra A en sus nombres y apellidos que empiecen con R</h3>";

//Traigo la lista completa de los pilotos
$query = $db-> prepare("SELECT * FROM pilotos WHERE nombre LIKE '%C%' AND apellido LIKE 'R%'");
$query -> execute();
$lista_pilotos = $query->fetchAll(PDO::FETCH_OBJ);

//Genero lista
foreach($lista_pilotos as $piloto) {
    echo " - ".$piloto->grado." ".$piloto->nombre." ".$piloto->apellido."<br>";

}
echo "<hr>";

// --------------------------------------------------------------------------------------------------
echo "<h3>Tabla pilotos para buscar edades entre valores usando BETWEEN (entre 20 y 30)</h3>";

//Traigo la lista completa de los pilotos
$query = $db-> prepare("SELECT * FROM pilotos WHERE edad BETWEEN 20 AND 30");
$query -> execute();
$lista_pilotos = $query->fetchAll(PDO::FETCH_OBJ);

//Genero lista
foreach($lista_pilotos as $piloto) {
    echo " - ".$piloto->nombre.": ".$piloto->edad."<br>";

}
echo "<hr>";
// --------------------------------------------------------------------------------------------------
echo "<h3>Tabla pilotos para buscar edades entre valores usando AND (mayores a 30 y menores a 36)</h3>";

//Traigo la lista completa de los pilotos
$query = $db-> prepare("SELECT * FROM pilotos WHERE edad >= 30 AND edad <=36");
$query -> execute();
$lista_pilotos = $query->fetchAll(PDO::FETCH_OBJ);

//Genero lista
foreach($lista_pilotos as $piloto) {
    echo " - ".$piloto->nombre.": ".$piloto->edad."<br>";

}
echo "<hr>";

// --------------------------------------------------------------------------------------------------
echo "<h3>Conexión con bd y traigo la tabla pilotos para ver promedio de edades</h3>";

//Traigo la lista completa de los pilotos
$query = $db-> prepare("SELECT * FROM pilotos");
$query -> execute();
$lista_pilotos = $query->fetchAll(PDO::FETCH_OBJ);
//Armo variables
$acumulado = 0;
$cantidad = 0;
//Genero la busqueda
foreach($lista_pilotos as $piloto) {
    echo " - ".$piloto->nombre.": ".$piloto->edad."<br>";
    $acumulado += $piloto->edad;
    $cantidad ++;
}
$promedio = $acumulado / $cantidad;

echo "Cantidad acumulada: ".$acumulado."<br>";
echo "Cantidad de pilotos: ".$cantidad."<br>";
echo "Promedio de edades: ".number_format($promedio,2)."<br>";
echo "<hr>";




// --------------------------------------------------------------------------------------------------

echo "<h3>Conexión con bd y traigo la tabla pilotos para ver el modelo pero usando filtro por el grado 'Teniente'</h3>";

// Traigo la lista completa de pilotos
$sentencia = $db->prepare("SELECT * FROM pilotos WHERE grado = ?");
// Ingreso lo que deseo buscar
$grado_buscado = 'Teniente';
// Armo la sentencia que deseo ejecutar
$sentencia->execute([$grado_buscado]);
// Traigo la lista que el filtro
$pilotos = $sentencia->fetchAll(PDO::FETCH_OBJ);
// Veo si hay algo en pilotos
if (count($pilotos) > 0) {
    // Muestro toda la lista de los pilotos
    foreach($pilotos as $piloto) {
        echo ("- ". $piloto->grado." ".$piloto->nombre." ".$piloto->apellido. "<br>");
    }
} else {
    echo "<p> El grado buscado no se encuentra en nuestra base de datos</p>";
} 

echo "<hr>";

// --------------------------------------------------------------------------------------------------
echo "<h3>Conexión con bd y traigo la tabla aviones para ver el modelo</h3>";

// Ejecutamos la consulta 
$sentencia = $db->prepare( "SELECT * FROM aviones");
$sentencia->execute();
// Obtenemos los datos para generar el HTML
$aviones = $sentencia->fetchAll(PDO::FETCH_OBJ);
foreach($aviones as $avion) {
    echo "- " . $avion->modelo . "<br>";
}
echo "<hr>";

// --------------------------------------------------------------------------------------------------

?>

