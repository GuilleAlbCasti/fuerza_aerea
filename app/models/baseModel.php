<?php

require_once __DIR__ . '/../models/dbModel.php';

class baseModel {

    private $db;

    public function __construct(){
        $dbModel = new dbModel();
        $this->db = $dbModel->connect();
    }

    // OBTENER LISTA DE BASES AÉREAS

    public function getAllBase() {
        $query = $this->db->prepare('SELECT * FROM base ORDER BY id ASC');
        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    // SELECIONAR 1 BASE AÉREA

    function getBase($id_base) {
        $query = $this->db->prepare('SELECT * FROM base WHERE id_base = ?');
        $query->execute(array($id_base));

        return $query->fetch(PDO::FETCH_OBJ);
    }

    // BUSCAR BASE AÉREA POR NOMBRE

    function searchBase($letras) {
        $query = $this->db->prepare('SELECT * FROM base WHERE FIELD_A LIKE letras = ?');
        $query->execute(array('%.$letras.%'));

        return $query->fetch(PDO::FETCH_OBJ);
    }
}