<?php
    class Conexion{
        private $host      = 'localhost';
        private $dbName    = 'proyecto_final';
        private $userName  = 'root';
        private $password  = '';

        public $conn;

        // Obtener la conexión a la Base de Datos.
        public function obtenerConexion(){
        $this->conn = null;
            try{
               $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbName, $this->userName, $this->password);
               $this->conn->exec("set names utf8");
               return $this->conn;
            }catch(PDOException $exception){
                $obj_arr=array(
                    "estado" => false,
                    "mensaje" => "ERROR DE CONEXION: " . $exception->getMessage(),
                );
                return $obj_arr;
            }
        }
    }

?>