<?php

require_once 'dbModel.php';

class avionModel {

    private $db;


    public function __construct(){
        $dbModel = new dbModel;
        $this->db = $dbModel->connect();
    }
 
    // OBTENER LISTA DE AVIONES

    public function getAllAvion() {
        $query = $this->db->prepare('SELECT avion.id, avion.modelo, avion.anio, avion.origen, avion.horas_vuelo, avion.categoria, base.nombre as base_nombre FROM avion INNER JOIN base ON avion.base_fk = base.id ORDER BY modelo ASC');
        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    // OBTENER 1 AVION

    public function getAvion($id_avion) {
        $query = $this->db->prepare('SELECT * FROM avion WHERE id = ?');
        $query->execute(array($id_avion));

        return $query->fetch(PDO::FETCH_OBJ);
    }

    // OBTENER LISTA DE CATEGORÍAS

    public function getAllCategoria() {
        $query = $this->db->prepare('SELECT DISTINCT categoria FROM avion ORDER BY categoria ASC');
        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    // OBTENER LISTA DE AVIONES SEGÚN CATEGORÍA

    public function getCategoria($nombre_categoria) {
        $query = $this->db->prepare('SELECT a.id, a.modelo, b.nombre AS base_nombre FROM avion a  JOIN base b ON a.base_fk = b.id WHERE a.categoria = ?');
        $query->execute(array($nombre_categoria));

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    // BUSCAR AVION POR MODELO

    function searchAvion($letras) {
        $query = $this->db->prepare('SELECT * FROM avion WHERE FIELD_A LIKE letras = ?');
        $query->execute(array('%.$letras.%'));

        return $query->fetch(PDO::FETCH_OBJ);
    }

}