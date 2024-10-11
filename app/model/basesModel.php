<?php

require_once 'model.php';

class baseModel {

    // OBTENER LISTA DE BASES AÉREAS

    function getAllBase() {
        $db = conexion_bd();
        $query = $db->prepare('SELECT * FROM base ORDER BY id ASC');
        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    // SELECIONAR 1 BASE AÉREA

    function getBase($id_base) {
        $db = conexion_bd();
        $query = $db->prepare('SELECT * FROM base WHERE id_base = ?');
        $query->execute(array($id_base));

        return $query->fetch(PDO::FETCH_OBJ);
    }

    // BUSCAR BASE AÉREA POR NOMBRE

    function searchBase($letras) {
        $db = conexion_bd();
        $query = $db->prepare('SELECT * FROM base WHERE FIELD_A LIKE letras = ?');
        $query->execute(array('%.$letras.%'));

        return $query->fetch(PDO::FETCH_OBJ);
    }
}