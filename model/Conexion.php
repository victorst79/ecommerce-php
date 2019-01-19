<?php
    class Conexion extends PDO{
        private $tipo_de_base = 'mysql';
        private $host = 'localhost';
        private $nombre_de_base = 'bdcarro';
        private $usuario = 'root';
        private $contrasena = '';

        public function __construct(){
            try {
                parent::__construct($this->tipo_de_base.':host='.$this->host.';dbname='.$this->nombre_de_base, $this->usuario, $this->contrasena);
            } catch (PDOException $e) {
                echo 'No se ha podido conectar con la base de datos' . $e->getMessage();
                exit();
            }
        }
    }
    
?>