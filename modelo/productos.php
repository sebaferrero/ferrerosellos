<?php
    require_once('conexion.php');

    class Productos{ 

        private $db;

        function __construct()
        {
            //GENERO LA CONEXION;
            $baseDatos = new Conexion();
            $this->db = $baseDatos->obtenerConexion();
        }

        function obtener(){
            $query = 'SELECT * FROM productos';
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            $result = array();
            while ($reg = $stmt->fetch(PDO::FETCH_ASSOC))
            {    
              array_push ($result, $reg);
            }
            return $result; 
        }

        function obtenerPorCategoria($idCategoria){
          $query = 'SELECT * FROM productos WHERE idCategoria='.$idCategoria;
          $stmt = $this->db->prepare($query);
          $stmt->execute();
          $result = array();
          while ($reg = $stmt->fetch(PDO::FETCH_ASSOC))
          {    
            array_push ($result, $reg);
          }
          return $result; 
        }

        function obtenerProducto($idProducto){
          $query = 'SELECT * FROM productos WHERE idProducto='.$idProducto;
          $stmt = $this->db->prepare($query);
          $stmt->execute();
          $result = array();
          while ($reg = $stmt->fetch(PDO::FETCH_ASSOC))
          {    
            array_push ($result, $reg);
          }
          return $result; 
        }

        function obtenerDestacados(){
            $query = "SELECT * FROM productos WHERE destacado='S'";
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