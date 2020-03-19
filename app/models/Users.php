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
        
        $this->db->query('INSERT INTO Inmovil.user (nick,pass,names,email,blocks,levels,photo,phone)
                          values(:nick,:pass,:names,:email,:blocks,:levels,:photo,:phone)');
          // vincular valores.
          $this->db->bind(':nick',$datos['nickname']);
          $this->db->bind(':pass',$datos['pass']);
          $this->db->bind(':names',$datos['complet_name']);
          $this->db->bind(':email',$datos['email']);
          $this->db->bind(':levels',$datos['level']);
          $this->db->bind(':blocks',$datos['block']);
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
            var_dump( $e->getMessage());
          }



      }
// ==============================
// ********* ACTUALIZAR***********
// ============================
 public function update_user($datos){
    $this->db->query("UPDATE Inmovil.user  set nick=:nick,email=:email,
    phone=:phone,photo=:photo,levels=:levels Where idUser=:id");

    // vincular valores.
    $this->db->bind(':id',$datos['id']);
    $this->db->bind(':nick',$datos['nickname']);
    $this->db->bind(':email',$datos['email']);
    $this->db->bind(':levels',$datos['level']);
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
   $this->db->query("SELECT * FROM Inmovil.user WHERE idUser = :id ");
   $this->db->bind(':id',$id);
  try{ 
    $fila = $this->db->get_one_Registro();
    return $fila;
  }
    catch (Exception $e) {
      echo $e.getMessage();
  
 }
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
