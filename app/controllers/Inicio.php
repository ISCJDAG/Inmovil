<?php

    class Inicio extends Controller{

      public function __construct(){

      }

      public function index(){
        $datos =[
          'disponibles' => "Disponibles"
        ];
        $this->vista('pages/inicio',$datos);

      }

      public function alerta(){
        $datos=[];
        $this->vista('pages/alerta',$datos);
      }








    }


 ?>
