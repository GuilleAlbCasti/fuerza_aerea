<?php

// CONEXIÓN CON BD

function conexion_bd() {
    return new PDO('mysql:host=localhost;dbname=fuerzaaerea;charset=utf8', 'root', '');
}

// OBTENER LISTA DE BASES AÉREAS

function traer_bases() {
    $db = conexion_bd();
    $query = $db->prepare('SELECT * FROM base ORDER BY id ASC');
    $query->execute();

    return $query->fetchAll(PDO::FETCH_OBJ);
}

// SELECIONAR 1 BASE AÉREA

function traer_base($id_base) {
    $db = conexion_bd();
    $query = $db->prepare('SELECT * FROM base WHERE id_base = ?');
    $query->execute(array($id_base));

    return $query->fetch(PDO::FETCH_OBJ);
}

// BUSCAR BASE AÉREA POR NOMBRE

function buscar_nombre_base($letras) {
    $db = conexion_bd();
    $query = $db->prepare('SELECT * FROM base WHERE FIELD_A LIKE letras = ?');
    $query->execute(array('%.$letras.%'));

    return $query->fetch(PDO::FETCH_OBJ);
}

// OBTENER LISTA DE AVIONES

function traer_aviones() {
    $db = conexion_bd();
    $query = $db->prepare('SELECT * FROM avion ORDER BY modelo ASC');
    $query->execute();

    return $query->fetchAll(PDO::FETCH_OBJ);
}

// SELECIONAR 1 AVION

function traer_avion($id_avion) {
    $db = conexion_bd();
    $query = $db->prepare('SELECT * FROM avion WHERE id_avion = ?');
    $query->execute(array($id_avion));

    return $query->fetch(PDO::FETCH_OBJ);
}

// BUSCAR AVION POR MODELO

function buscar_modelo_avion($letras) {
    $db = conexion_bd();
    $query = $db->prepare('SELECT * FROM avion WHERE FIELD_A LIKE letras = ?');
    $query->execute(array('%.$letras.%'));

    return $query->fetch(PDO::FETCH_OBJ);
}