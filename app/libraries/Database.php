<?php

      class Database{
        private $host = db_host;
        private $user = db_user;
        private $pass = db_pass;
        private $dbname = db_name;

        private $con;
        private $stmt;
        private $error;

        public function __construct(){
          // configurar conexion con pdo.
          $dns = "mysql:host=".$this->host.";database=".$this->dbname;
          $opciones = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
          );

          // crear una instancia del pdo
          try {
            $this->con = new PDO($dns,$this->user,$this->pass,$opciones);
            $this->con->exec('set names utf8');

          } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;

          }
        }

        //  funcion para preparar las consulta sql o obtenerla.
        public function query($sql){
          $this->stmt = $this->con->prepare($sql);
        }
        // parametrisar la consluta dependinedo su valor.
        public function bind($parametro,$valor,$tipo=null){
          if (is_null($tipo)) {
            switch (true) {
              case is_int($valor):
                  $tipo = PDO::PARAM_INT;
                break;
              case is_bool($valor):
                  $tipo = PDO::PARAM_BOOL;
                break;
              case is_null($valor):
                  $tipo = PDO::PARAM_NULL;
                break;

              default:
                $tipo = PDO::PARAM_STR;
                break;
            }
          }
          $this->stmt->bindValue($parametro,$valor,$tipo);
        }

        // ejecutar la consulta.
        public function execute(){

          return $this->stmt->execute();
        }
        // obtener registros de la consulta.
        public function getRegistros(){
          $this->execute();
          return $this->stmt->fetchAll(PDO::FETCH_OBJ);
        }
        // obtener un registro
        public function get_one_Registro(){
          $this->execute();
          return $this->stmt->fetch(PDO::FETCH_OBJ);
        }
        //
        // obtener cantidad de filas o numero
        public function getCountRows(){
          return $this->stmt->rowCount();
        }

      }

 ?>
