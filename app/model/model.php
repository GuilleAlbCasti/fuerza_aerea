<?php

require_once '../config.php';

class Model {

  protected $db;
  
  public function __construct() {

    $this->db = new PDO(
      "mysql:host=".MYSQL_HOST.
      ";dbname=".MYSQL_DB.";charset=utf8".
      MYSQL_USER,MYSQL_PASS);
      $this->_deploy();
      $this->connect();

  }

  private function _deploy() {

    $query = $this->db->query('SHOW TABLES');
    $tables = $query->fetchAll();
    
    if (count($tables) == 0) {
      $sql = <<<END

      CREATE TABLE `avion` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `modelo` varchar(20) NOT NULL,
        `anio` int(11) NOT NULL,
        `origen` varchar(20) NOT NULL,
        `horas_vuelo` int(11) NOT NULL,
        `base_fk` int(11) NOT NULL,
        `categoria` varchar(100) NOT NULL,
        PRIMARY KEY (`id`),
        KEY `base_fk` (`base_fk`),
        CONSTRAINT `avion_ibfk_1` FOREIGN KEY (`base_fk`) REFERENCES `base` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
      
      CREATE TABLE `base` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `nombre` varchar(40) NOT NULL,
        `ubicacion` varchar(20) NOT NULL,
        `capacidad` int(11) NOT NULL,
        PRIMARY KEY (`id`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
      
      END;
      $this->db->exec($sql);
    }
  }

  function connect() {
      return $this->db;
  }

}