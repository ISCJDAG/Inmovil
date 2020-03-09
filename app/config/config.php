<?php

  // En este archivo vamos a configurar todo las variables universales asi como
  // la database.

  // ===============================
  // ------CONFFIG DATABASE--------
  // ===============================
  define('db_host','localhost');
  define('db_user','root');//root for xammp. for mamp is mamp
  define('db_pass','');
  define('db_name','Inmovil');

  // ==============================
  //  ruta de mi app.
  // ==============================
  define('PATH_APP',dirname(dirname(__FILE__)));
  // ejemplo:http://localhost/NAME_OF_MY_SITE/app/

  // ===============================
  // ruta url http://localhost/NAME_MY_SITE/
  // Ejemplo:
  // ===============================
  define('PATH_URL','http://localhost:/Inventory');
  define('PATH_ALERTA_MESSAGE','http://localhost:/Inventory/app/view/inc/alert_message.php');
  define('PATH_CSS','http://localhost:/Inventory/public/css');
  define('PATH_FONTS','http://localhost:/Inventory/public/fonts');
  define('PATH_JS','http://localhost:/Inventory/public/js');
  define('PATH_img','http://localhost:/Inventory/public/img');
  define('PATH_img_backgroud','http://localhost:/Inventory/public/img/backgroud_user');
  define('PATH_PERFIL','http://localhost:/Inventory/public/img/perfil_user');
  define('PATH_img_propiedades','http://localhost:/Inventory/public/img/propiedades');
  // Path inventory.
  define('PATH',dirname(dirname(dirname(__FILE__))));
  // Nombre del sitio.
  define('NAME_SITE','Inventory');
 ?>
