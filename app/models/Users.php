<?php

    class Users{
      private $db;

      public function __construct(){
        $this->db = new Database;
      }
      // =====================
      // LEER
      //esta funcion traera a todos los usurios.
      // =====================

      public function getAll(){
        $this->db->query('SELECT * from Inmovil.user');
        $results = $this->db->getRegistros();
        return $results;
      }

// ===========================
// INSERTAR
// ===========================
      public function addUser($datos){
        $this->db->query('INSERT INTO Inmovil.user (nick,pass,name,email,block,level,photo,phone)
                          values(:nick,:pass,:name,:email,:block,:level,:photo,:phone)');
          // vincular valores.
          $this->db->bind(':nick',$datos['nickname']);
          $this->db->bind(':pass',$datos['pass']);
          $this->db->bind(':name',$datos['complet_name']);
          $this->db->bind(':email',$datos['email']);
          $this->db->bind(':level',$datos['level']);
          $this->db->bind(':block',$datos['block']);
          $this->db->bind(':photo',$datos['photo']);
          $this->db->bind(':phone',$datos['phone']);

          // ejecutar
          try {
            if($this->db->execute()){
              return true;
            }
            else{
              return false;

            }
          } catch (Exception $e) {
            echo $e->getMessage();
          }



      }
// ==============================
// ********* ACTUALIZAR***********
// ============================
 public function edit_user($datos){
    $this->db->query("UPDATE inventario.user set complete_name=:name,nickname=:nick,pass=:pass,email=:email,phone=:phone,photo=:photo,level=:level,block=:block Where id=:id");

    // vincular valores.
    $this->db->bind(':id',$datos['id']);
    $this->db->bind(':nick',$datos['nickname']);
    $this->db->bind(':pass',$datos['pass']);
    $this->db->bind(':name',$datos['complet_name']);
    $this->db->bind(':email',$datos['email']);
    $this->db->bind(':level',$datos['level']);
    $this->db->bind(':block',$datos['block']);
    $this->db->bind(':photo',$datos['photo']);
    $this->db->bind(':phone',$datos['phone']);


    try {
      if ($this->db->execute()) {
          return true;
      }else {
        return false;
      }
    } catch (Exception $e) {
      echo $e.getMessage();
    }


 }
 // ============================
 // ***********GET USER *********
 // ===========================
 public function getUser($id){
   $this->db->query("SELECT * FROM inventario.user WHERE id = :id ");
   $this->db->bind(':id',$id);
   $fila = $this->db->get_one_Registro();
   return $fila;
 }
 // ============================
 // ***********DELETE USER *********
 // ===========================
 public function Drop_user($datos){
   $this->db->query("DELETE FROM inventario.user WHERE id= :id");
   $this->db->bind(':id',$datos['id']);
   try {
     if($this->db->execute()){
       return true;
     }else {
       return false;
     }
   } catch (Exception $e) {
     echo $e.getMessage();
   }

 }
// ==============================
      // ================
      // verificar nickname
      // ================
      public function nickuser($nic){

        $this->db->query("SELECT * FROM inventario.user WHERE nickname =:nick");
        $this->db->bind(':nick',$nic);
        try {
            if ($this->db->execute()) {
              $count = $this->db->getCountRows();
              if($count!=0){

                 //echo 'exist choose another one!';
                 return true;
              }
              else
              {
                 //echo 'can be use';
                 return false;
              }
            }
        } catch (Exception $e) {
          echo $e.getMessage();
        }

      }


      /**
       * ====================
       * validar email 
       * ====================
       */
   public function getEmail($email){
        $this->db->query("SELECT * FROM inventario.user Where email=:correo");
        $this->db->bind(':correo',$email);
        try{
            $result=$this->db->execute();
            if($result>0){
              return true;
            }else{
               echo 'no se puedo acceder a la DB';
            }
        }
          catch(Exception $e){
            echo $e.getMessage();
          }

      }

    }


 ?>
