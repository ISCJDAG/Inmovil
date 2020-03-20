<?php

class User extends Controller
{

  public function __construct()
  {
      // en mi constructor siempre inicializar el modelo a cargar. respectivo.
    $this->userModel = $this->modelo('Users');
         //$this->mainalerts = new Main;
  }

  /**
   * ===========================
   * Index de inicio de usuarios.
   * 
   * 
   * ===========================
   */
  public function index()
  {
      // get users.
    $user = $this->userModel->getALL();

    $datos = [
      'users' => 'Usuarios',
      'getUser' => $user,
    ];
      //var_dump($user);
    $this->vista('pages/user', $datos);
  }
  /**
   * =====================================
   *  ======== final de funcion index=====
   * =====================================
   */
//  ==================================== 
//  ==========Agregar usuario===========     
//  ====================================
//
  public function Add_User()
  {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $error = "";
      if (isset($_POST['name']) && isset($_POST['nickname']) &&
        isset($_POST['pass']) && isset($_POST['email']) &&
        isset($_POST['level']) && isset($_POST['phone'])) {
        if (!empty($_POST)) {
          $names = htmlentities($_POST['name']);
          $nickname = htmlentities($_POST['nickname']);
          $pass = htmlentities($_POST['pass']);
          $pass2= htmlentities($_POST['pass2']);
          $emial = htmlentities($_POST['email']);
          $level = htmlentities($_POST['level']);
          $phone = htmlentities($_POST['phone']);

          $names = trim($names);
          $nickname = trim($nickname);
          $pass = trim($pass);
          $pass2 = trim($pass2);
        }

      }

      /**
       * Validar campos correctamente 
       * 1.-email
       */
 //validate email
      if (!is_string($emial) || !filter_var($emial, FILTER_VALIDATE_EMAIL)) {
        $error = "El email es incorrecto";
        
      }
      //validar pass y pass2
      if($pass2 != $pass){
          $error = "Las passwords no coinciden!";
      }

 // =================================
 // SAVE THE PASSWORD.
 // =================================
      $pass = sha1($pass);
      $block = 0;
// ==========================
// foto de perfil de Usuario.
// ==========================
      $extencion = '';


      $ruta = 'img/perfil_user'; //$_SERVER['DOCUMENT_ROOT'].'/Inventory';

      $archivo = $_FILES['foto']['tmp_name'];
      $namefile = $_FILES['foto']['name'];
      $info = pathinfo($namefile);

      if ($archivo != '') {
        $extencion = $info['extension'];
        if ($extencion == 'JPG' || $extencion == 'PNG' || $extencion == 'JPEG' || $extencion == 'jpg' || $extencion == 'jpeg' || $extencion == 'png') {
          move_uploaded_file($archivo, $ruta . '/' . $nickname . '.' . $extencion);
          $ruta = $ruta . '/' . $nickname . '.' . $extencion;
        } else {
          /*$text = 'El tipo de extencion de imagen no es permitido!';
          $title = 'Verificar!';
          $type = 'warning';
          $v = 'user';
          $metod = 'Add_User';
          $id = '';
          $datos = [
            'complet_name' => $names,
            'nickname' => $nickname,
            'email' => $emial,
            'level' => $level,
            'block' => $block,
            'phone' => $phone,
          ];
          alertMessage($text, $title, $type, $v, $metod, $id, $datos);*/
          $error = "Tipo de extencion de imagen no es correcto";
        }
      } 
      else {
        $ruta = $ruta . '/user.jpg';
      }

      $datos = [

        'complet_name' => $names,
        'nickname' => $nickname,
        'pass' => $pass,
        'email' => $emial,
        'level' => $level,
        'block' => $block,
        'phone' => $phone,
        'photo' => $ruta

      ];
      if($error == ""){
        if ($this->userModel->addUser($datos)) {
          $text = 'Se agrego correctamente';
          $title = 'EL usuario: ' . $nickname;
          $type = 'success';
          $controller = 'user';
          $metod = '';
          $id = ''; 
          alertMessage($text, $title, $type, $controller, $metod, $id);
        }
        else {
          $text = 'Algo salio mal no se pudo registrar, verifique los campos que esten correctos';
          $title = 'Error';
          $type = 'error';
          $controller = 'user';
          $metod = 'Add_User';
          $id = '';
        
          alertMessage($text, $title, $type, $controller, $metod, $id);
        }
      }else{
        //return $error;
        alertMessage($error, 'Advertencia', 'warning', 'user', 'Add_User', $id='');
        /*$text = 'Verifica el campo el dato es incorrecto';
          $title = $error;
          $type = 'error';
          $controller = 'user';
          $metod = 'Add_User';
          $id = '';
          $datos = [
            'complet_name' => $names,
            'nickname' => $nickname,
            'email' => $emial,
            'level' => $level,
            'phone' => $phone,
          ];
          
          $this->vista('pages/add_user',$datos);*/
      }
/**este else  es despues del if de si no es $_SERVER['REQUEST_METHOD']=='POST'
entonces hace lo siguente.
este es para cargar la pagina sin datos cuando se agregara uno nuevo.*/
  }
    else {
      $datos = [
        'complet_name' => '',
        'nickname' => '',
        'pass' => '',
        'email' => '',
        'level' => '',
        'block' => '',
        'phone' => '',
        'photo' => ''
      ];
      $this->vista('pages/add_user');
    }

  }

  /**
   * ==================================
   * ========== Final de funcion ====== 
   * ========== agregar usuario =======
   * ==================================
   */


// *****************************
// ======= EDITAR =============
// *****************************
//

  public function editar_usuario($id)
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {


      if (!empty($_POST)) {

        $nickname = htmlentities($_POST['nickname']);
        $emial = htmlentities($_POST['email']);
        $level = htmlentities($_POST['level']);
        $phone = htmlentities($_POST['phone']);

      }

// ==========================
// foto de perfil de Usuario.
// ==========================
      $extencion = '';


      $ruta = 'img/perfil_user'; //$_SERVER['DOCUMENT_ROOT'].'/Inventory';

      $archivo = $_FILES['foto']['tmp_name'];
      $namefile = $_FILES['foto']['name'];
      $info = pathinfo($namefile);

      if ($archivo != '') {
        $extencion = $info['extension'];
        if ($extencion == 'JPG' || $extencion == 'PNG' || $extencion == 'JPEG' || $extencion == 'jpg' || $extencion == 'jpeg' || $extencion == 'png') {
          move_uploaded_file($archivo, $ruta . '/' . $nickname . '.' . $extencion);
          $ruta = $ruta . '/' . $nickname . '.' . $extencion;
        } else {

          exit;
        }
      } else {
        $ruta = $ruta . '/user.jpg';
      }
// ===================================
// ===================================

// =================================
// SAVE THE PASSWORD.
// =================================
      $pass = sha1($pass);



      $datos = [
        'id' => $id,
        'nickname' => $nickname,
        'email' => $emial,
        'level' => $level,

        'phone' => $phone,
        'photo' => $ruta

      ];

      if ($this->userModel->update_user($datos)) {
        $text = 'Se edito Correctamente';
        $title = 'EL usuario: ' . $nickname;
        $type = 'success';
        $v = 'user';
        $metod = '';
        $id = '';
        alertMessage($text, $title, $type, $v, $metod, $id);


      } else {
        $text = 'No se pudo editar ocurrio un error en el sistema';
        $title = 'EL usuario: ' . $nickname;
        $type = 'error';
        $v = 'user';
        $metod = '';
        $id = '';
        alertMessage($text, $title, $type, $v, $metod, $id);
        //exit;
      }

    }
  // si no es metodo post
    else {

    // obtener informacion desde el modelo. es como el select * from user wher id=$id.
    //===================
    //Traer lo datos de la base de 
    //datos del usuario a editar.
    //=================
      $usuario = $this->userModel->getUser($id);
      $datos = [
        'id' => $usuario->idUser,
        'nickname' => $usuario->nick,
        'email' => $usuario->email,
        'level' => $usuario->levels,
        'phone' => $usuario->phone,
        'photo' => $usuario->photo

      ];
      $this->vista('pages/update_user', $datos);
    }

  }
// =======================
// ********delete*********
// =======================
  public function delete_user($id)
  {
    $usuario = $this->userModel->getUser($id);
    $datos = [
      'id' => $usuario->id,
    ];
    if ($this->userModel->Drop_user($datos)) {
      $text = 'The User';
      $title = 'was delete!';
      $type = 'success';
      $v = 'user';
      $metod = '';
      $id = '';
      alertMessage($text, $title, $type, $v, $metod, $id);
        //redirecionar('/user');
    } else {
        // puede ir un mensaje.
      $text = 'The User';
      $title = 'can not be delete!';
      $type = 'error';
      $v = 'user';
      $metod = '';
      $id = '';
      alertMessage($text, $title, $type, $v, $metod, $id);
    }

  //}

  }


  /**
   * =============================
   * Get valid Email
   * =============================
   */
  public function userEmail()
  {
    $email = htmlentities($_POST['email']);

    $result = $this->userModel->getEmail($email);
    if ($result) {
      return true;
    } else {
      return false;
    }
  }



}
