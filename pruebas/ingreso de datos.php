<?php

$db = new PDO('mysql:host=localhost;dbname=ffaa_db;charset=utf8', 'root', '');
$query = $db->prepare("
INSERT INTO aviones (modelo, año, origen, horas_vuelo, piloto) 
VALUES 
('A-4AR Fightinghawk', 1985, 'EEUU', 1865, 23785094),
('IA-63 Pampa III', 1973, 'Argentina', 2375836, 66789012),
('F-16 Falcon', 1990, 'EEUU', 3500, 23785094),
('Mirage 2000', 1992, 'Francia', 4000, 44567890),
('JAS 39 Gripen', 1998, 'Suecia', 1500, 55678901),
('F-35 Lightning II', 2015, 'EEUU', 1200, 66789012),
('Su-30', 2002, 'Rusia', 3200, 77890123),
('Rafale', 2004, 'Francia', 2900, 23785094),
('Typhoon', 2010, 'Reino Unido', 2700, 44567890),
('Mitsubishi F-2', 2001, 'Japón', 2100, 55678901),
('F/A-18 Hornet', 1986, 'EEUU', 5000, 23785094),
('MiG-29', 1988, 'Rusia', 4300, 66789012),
('Dassault Falcon 7X', 2014, 'Francia', 1800, 77890123),
('C-130 Hercules', 1970, 'EEUU', 8500, 44567890),
('KC-135 Stratotanker', 1965, 'EEUU', 6000, 55678901),
('P-3 Orion', 1977, 'EEUU', 4800, 23785094),
('E-2 Hawkeye', 1988, 'EEUU', 3100, 66789012),
('A-10 Thunderbolt II', 1980, 'EEUU', 7700, 77890123),
('B-52 Stratofortress', 1960, 'EEUU', 9000, 44567890),
('F-22 Raptor', 2010, 'EEUU', 2100, 55678901)
");
$query -> execute();
$lista = $query->fetchAll(PDO::FETCH_OBJ);

foreach($lista as $avion) {
    echo $avion->id." -> ".$avion->modelo."<br>";
}
?>