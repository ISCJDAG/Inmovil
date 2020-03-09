<?php 

    class Custumers extends Controller{

        private $custumermodelo;

       public function __construct(){
           
           $this->custumermodelo = $this->modelo("Custumer");

        }

        public function index(){
            //$custumer = $this->custumermodelo->get_Custumers();
            
            $datos=[
                //'custumer'=> $custumer,
            ];
            $this->vista('pages/custumers',$datos);

        }
        // ===========================
        // CRUD, Add
        // ===========================
        public function Add_new_Custumer(){

            if($_SERVER['REQUEST_METHOD']=='POST'){
                // if my post is not empty do next code-->
                if(!empty($_POST)){
                    $nombre = htmlentities($_POST["nombre"]);
                    $phone = htmlentities($_POST["phone"]);
                    $address = htmlentities($_POST["address"]);
                    $email = htmlentities($_POST["email"]);
                    $rfcssn = htmlentities($_POST["rfc"]);
                }
                // important input fields does never be empty
                if(empty($nombre) || empty($phone) || empty($address) || empty($rfcssn)){
                    $text = "The input field ". $nombre.", ". $phone.", ".$address." or ".$rfcssn;
                    $title = "One or more fields are empty!";
                    $type = "error";
                    $v = "custumers";
                    $metod="Add_new_Custumer";
                    $id="";
                    alertMessage($text,$title,$type,$v,$metod,$id);
                }
                // ==================================================
                // ====================
                // verificar que el nombre no lleve numeros o caracters raros.
                // ====================
                $caracteres = "abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZáÁéÉíÍÓóÚúńÑ ";

                for($i =0; $i<strlen($nombre); $i++){
                    $search = substr($nombre,$i,1);
                    if(strpos($caracteres,$search)){
                        $text = "The name wrote its wrong!";
                        $title = "please fixed!";
                        $type = "error";
                        $id="";
                        $method ="Add_new_Custumer";
                        $v = "custumers";
                        alertMessage($text,$title,$type,$v,$method,$id);
                    }
                }
                // =====================================================
                // verificar emial... writeen correctly
                // =====================================================
                if(!empty($email)){
                    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                        $text = 'the Email its wrong!';
                        $title = 'The Email: '.$email.'its wrong';
                        $type = 'error';
                        $v = 'custumers';
                        $metod ='Add_new_Custumer';
                        $id='';
                        alertMessage($text,$title,$type,$v,$metod,$id);
                    }
                }
                // ===============================
                // validar rfc... 13 Digitos.
                // ===============================
                $size_of_rfc = $rfcssn.length;
                if($size_of_rfc < 13 || $size_of_rfc > 13){
                        $text = 'its too small or large!';
                        $title = 'The RFC: '.$rfcssn.'its wrong';
                        $type = 'error';
                        $v = 'custumers';
                        $metod ='Add_new_Custumer';
                        $id='';
                        alertMessage($text,$title,$type,$v,$metod,$id);
                }


                $datos = [
                    'name' => $name,
                    'phone' => $phone,
                    'address' => $address,
                    'email' => $email,
                    'acesor' => $acesor,
                    'rfc' => $rfcssn,
                    'ine' => $ine
                ];

                // =================
                // condition for the model to add the custumer..
                // ================.

                if ($this->custumermodelo->Add($datos)) {
                    # code...
                } else {
                    # code...
                }
                




            }else{
                $datos =[
                    'name' => '',
                    'phone' => '',
                    'address' => '',
                    'email' => '',
                    'rfc' => ''
                  ];
                  $this->vista('pages/add_custumer',$datos);
            }

        }
         // ===========================
        // CRUD, update
        // ===========================
        public function Update_Custumer($id){

            if ($_SERVER['REQUEST METHOD'] == 'POST') {
                if (isset($_POST['nombre']) && isset($_POST['phone'])
                 && isset($_POST['address']) && isset($_POST['email'])
                 && isset($_POST['rfc']) && isset($_POST['INE'])) {
                    
                }
            }
            else
            {

            }

        }

        public function Delete_Custumer($id){

        }

        //======================================= 
        //function to chek de rfc in the model...
        //=======================================
        public function CheckRFC(){
            $getrfc = htmlentities($_POST['rfc']);
            $result = $this->custumermodelo->rfc($getrfc);
           return $result;
        }

    }


