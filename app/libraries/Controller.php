<?php
  // Este es el controlador principal que cargara
  // moelos y vistas.
  class Controller{

    // ===================
    // cargar modelo.
    // ===================
    public function modelo($modelo){
      require_once '../app/models/'.$modelo.'.php';
      return new $modelo();
    }

    // ===================
    // cargar vista. controlador
    // ===================
    public function vista($vista,$datos=[]){
      if(file_exists('../app/view/'.$vista.'.php')){
        require_once '../app/view/'.$vista.'.php';
      }else {
        die('The View or Page does not Exist');
      }
    }

    /**
     * ==========================
     * Metodo de peticion de celular y nick para usuario nuevo
     * ==========================
     */

     public function nickIsUsed($nick){
      


     }
    
// end of my class
  }

 ?>
