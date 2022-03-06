<?php
    require_once('conexion.php');

    class Categorias{ 

        public $idCategoria;
        public $detalle;
        public $ordenLista;
        private $db;

        function __construct()
        {
            //GENERO LA CONEXION;
            $baseDatos = new Conexion();
            $this->db = $baseDatos->obtenerConexion();
        }

        function obtener(){

            //GENERO LA CONEXION;
            $baseDatos = new Conexion();
            $db = $baseDatos->obtenerConexion();

            $query = 'SELECT * FROM categorias order by ordenLista ASC';
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            $result = array();
            while ($reg = $stmt->fetch(PDO::FETCH_ASSOC))
            {       
                array_push ($result, $reg);
            }
            return $result; 
        }

    }

?>