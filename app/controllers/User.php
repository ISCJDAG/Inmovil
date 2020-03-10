<?php

  class User extends Controller{

    public function __construct(){
      // en mi constructor siempre inicializar el modelo a cargar. respectivo.
         $this->userModel = $this->modelo('Users');
         //$this->mainalerts = new Main;
    }
  
/**
 * ===========================
 * Index de inicio de usuarios.
 * ===========================
 */
    public function index(){
      // get users.
     $user = $this->userModel->getALL();

      $datos=[
        'users'=>'Usuarios',
        'getUser'=> $user,
      ];
      //var_dump($user);
      $this->vista('pages/user',$datos);
    }
// 
//  ========= ADD NEW USER     =========
//
    public function Add_User(){

      if ($_SERVER['REQUEST_METHOD']=='POST') {
        
        if (isset($_POST['name']) &&  isset($_POST['nickname']) &&
            isset($_POST['pass']) && isset($_POST['email']) &&
            isset($_POST['level']) && isset($_POST['phone'])) {
              if(!empty($_POST)){
                $names = htmlentities($_POST['name']);
                $nickname =htmlentities($_POST['nickname']);
                $pass =  htmlentities($_POST['pass']);
                $emial = htmlentities($_POST['email']);
                $level = htmlentities($_POST['level']);
                $phone = htmlentities($_POST['phone']);
              }else{
                alertMessage("Algunos datos estan vacios revise porfavor",
                "Alerta","warning","user","Add_user","",$data='');
              }
        }
// ====================
// verificar que el nombre no lleve numeros.
// ====================
$caracteres = "abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZáÁéÉíÍÓóÚúńÑ ";

for($i=0; $i < strlen($names); $i++){
  $search = substr($names,$i,1);
  if (strpos($caracteres,$search) === false) {
    $text = 'Fine a character or symbol in the name its invalid';
    $title = 'Alert warning';
    $type = 'error';
    $v = 'user';
    $metod ='Add_User';
    $id='';
    alertMessage($text,$title,$type,$v,$metod,$id);
      //exit;
  }
}
// ======================================
//

// =============================
// validar longuitud del nick y contraseña.
// =============================
$nicks = strlen($nickname);
$contrasena = strlen($pass);


if($contrasena < 8 || $contrasena > 20){
  $text = 'The password only can have 8 or 20 caracters';
  $title = 'The password: its to short or to long!';
  $type = 'error';
  $v = 'user';
  $metod ='Add_User';
  $id='';
  alertMessage($text,$title,$type,$v,$metod,$id);
  //exit;
}

// ==================
// verificar el email.
// ==================
if (!empty($emial)) {
    if(!filter_var($emial,FILTER_VALIDATE_EMAIL)){
      $text = 'the Email its wrong!';
      $title = 'The Email: '.$email.'its wrong';
      $type = 'error';
      $v = 'user';
      $metod ='Add_User';
      $id='';
      alertMessage($text,$title,$type,$v,$metod,$id);
      //exit;
    }
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
      move_uploaded_file($archivo,$ruta.'/'.$nickname.'.'.$extencion);
      $ruta = $ruta.'/'.$nickname.'.'.$extencion;
  }else{
    $text = 'The type file does not acceptable';
    $title = 'its wrong';
    $type = 'error';
    $v = 'user';
    $metod ='Add_New_User';
    $id='';
    
    alertMessage($text,$title,$type,$v,$metod,$id,$data);
    //exit;
  }
}else {
  $ruta = $ruta.'/user.jpg';
}
// ===================================
// ===================================

 // =================================
 // SAVE THE PASSWORD.
 // =================================
 $pass = sha1($pass);
 $block = 0;


 $datos=[
    
   'complet_name' => $names,
   'nickname' => $nickname,
   'pass' => $pass,
   'email' => $emial,
   'level' => $level,
   'block' => $block,
   'phone' => $phone,
   'photo' => $ruta

 ];
        if($this->userModel->addUser($datos)){
            $text = 'Se agrego correctamente';
            $title = 'EL usuario: '.$nickname;
            $type = 'success';
            $controller = 'user';
            $metod ='';
            $id='';
            alertMessage($text,$title,$type,$controller,$metod,$id);
            
  
          }else{
            $text = 'Algo salio mal no se pudo registrar!';
            $title = 'Error!';
            $type = 'error';
            $controller = 'user';
            $metod ='Add_User';
            $id='';
            alertMessage($text,$title,$type,$controller,$metod,$id);
              
          }

        
        
//este else  es despues del if de si no es $_SERVER['REQUEST_METHOD']=='POST'
//entonces hace lo siguente.
      }//este es para cargar la pagina sin datos cuando se agregara uno nuevo.
      else{
        $datos =[
          'complete_name' => '',
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




// *****************************
// ======= EDITAR =============
// *****************************
//

public function edit_user($id){
  if ($_SERVER['REQUEST_METHOD']=='POST') {
    $block = 0;

    if(!empty($_POST)){
      $names = htmlentities($_POST['name']);
      $nickname =htmlentities($_POST['nickname']);
      $pass =  htmlentities($_POST['pass']);
      $emial = htmlentities($_POST['email']);
      $level = htmlentities($_POST['level']);
      $phone = htmlentities($_POST['phone']);

    }


// campos importantes que no deben de ir vacios.
    if (empty($names) || empty($nickname) || empty($pass) || empty($level)) {
      exit;
    }
// ====================
// verificar que el nombre no lleve numeros.
// ====================
$caracteres = "abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZáÁéÉíÍÓóÚúńÑ ";

for($i=0; $i < strlen($names); $i++){
$search = substr($names,$i,1);
if (strpos($caracteres,$search) === false) {
  exit;
}
}
// ======================================
//

// =============================
// validar longuitud del nick y contraseña.
// =============================
$nicks = strlen($nickname);
$contrasena = strlen($pass);

if ($nicks > 15 || $nicks < 6) {
exit;
}
if($contrasena < 8 || $contrasena > 20){
exit;
}

// ==================
// verificar el email.
// ==================
if (!empty($emial)) {
if(!filter_var($emial,FILTER_VALIDATE_EMAIL)){
  exit;
}
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
  move_uploaded_file($archivo,$ruta.'/'.$nickname.'.'.$extencion);
  $ruta = $ruta.'/'.$nickname.'.'.$extencion;
}else{

exit;
}
}else {
$ruta = $ruta.'/user.jpg';
}
// ===================================
// ===================================

// =================================
// SAVE THE PASSWORD.
// =================================
$pass = sha1($pass);



$datos=[
/*'id'=> $id,
'complet_name' => $names,
'nickname' => $nickname,
'pass' => $pass,
'email' => $emial,
'level' => $level,
'block' => $block,
'phone' => $phone,
'photo' => $ruta,
*/
];

    if($this->userModel->edit_user($datos)){
      $text = 'Se Edito Correctamente';
      $title = 'EL usuario: '.$nickname;
      $type = 'success';
      $v = 'user';
      $metod ='';
      $id='';
      alertMessage($text,$title,$type,$v,$metod,$id);
      //redirecionar('/user');

    }else{
      $text = 'No se pudo editar ocurrio un error';
      $title = 'EL usuario: '.$nickname;
      $type = 'error';
      $v = 'user';
      $metod ='';
      $id='';
      alertMessage($text,$title,$type,$v,$metod,$id);
        //exit;
    }

  }
  // si no es metodo post
  else{

    // obtener informacion desde el modelo. es como el select * from user wher id=$id.
    //===================
    //Traer lo datos de la base de 
    //datos del usuario a editar.
    //=================
    //$usuario = $this->userModel->getUser($id);
    $datos =[
      /*'id'=> $usuario->id,
      'complete_name' => $usuario->complete_name,
      'nickname' => $usuario->nickname,
      'pass' => $usuario->pass,
      'email' => $usuario->email,
      'level' => $usuario->level,
      'block' => $usuario->block,
      'phone' => $usuario->phone,
      'photo' => $usuario->photo*/
    ];
    $this->vista('pages/update_user',$datos);
  }

}
// =======================
// ********delete*********
// =======================
public function delete_user($id){
  $usuario = $this->userModel->getUser($id);
  $datos =[
    'id'=> $usuario->id,
  ];
    if ($this->userModel->Drop_user($datos)) {
      $text = 'The User';
      $title = 'was delete!';
      $type = 'success';
      $v = 'user';
      $metod ='';
      $id='';
      alertMessage($text,$title,$type,$v,$metod,$id);
        //redirecionar('/user');
    }else{
        // puede ir un mensaje.
        $text = 'The User';
        $title = 'can not be delete!';
        $type = 'error';
        $v = 'user';
        $metod ='';
        $id='';
        alertMessage($text,$title,$type,$v,$metod,$id);
    }

  //}

  }


      /**
   * =============================
   * Get valid Email
   * =============================
   */
public function userEmail(){
        $email = htmlentities($_POST['email']);
        
        $result= $this->userModel->getEmail($email);
        if($result){
         return true;
        }else{
          return false;
        }
    }


    
  }
