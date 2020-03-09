<?php
  // mapear la url ingresada en el navegasdor
  // (1).- Controlador
  // (2).- metodo.
  // (3).- Parametro.
  // Ejemplo: http://localhost/sitio/(1)productos/(2)update/(3)parametrosid=4.
  class Core{

    protected $Current_Controller = 'inicio';
    protected $Current_Method = 'index';
    protected $parameters =[];

    public function __construct(){

      $url = $this->getURL();

      // Buscar el controlador en la url
      // ===============================
      if(isset($url[0])){
        if (file_exists('../app/controllers/'.ucwords($url[0]).'.php')) {
          $this->Current_Controller = ucwords($url[0]);
          unset($url[0]);
      }
      }
     
      // requerir el controlador
      require_once '../app/controllers/'.$this->Current_Controller.'.php';
      $this->Current_Controller = new $this->Current_Controller;

      // =========================
      // buscar el metodo en la url
      // =========================
      if(isset($url[1])){
        if (method_exists($this->Current_Controller, $url[1])) {
          $this->Current_Method = $url[1];
          unset($url[1]);
        }
      }

      // ==========================
      // obtener parametros.
      // =========================
      /*if(isset($url[2])){
        $this->parameters = array_values($url);
      }else{
        $this->parameters = [];
      }*/
      $this->parameters = isset($url) ? array_values($url) : [];
      call_user_func_array([$this->Current_Controller, $this->Current_Method], $this->parameters );

    }

    public function getURL(){
      if(isset($_GET['url'])){
        $url = rtrim($_GET['url'],'/');
        $url = filter_var($url,FILTER_SANITIZE_URL);
        $url = explode('/',$url);
        return $url;
      }
    }
  }


 ?>
