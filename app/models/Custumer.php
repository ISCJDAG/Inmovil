
<?php 
    class Custumer{

        private $db;

        public function __construct(){
            $this->db = new Database;
        }
        //=============================
        //  CRUD get,add,update,delete.
        // ============================

        // getALL-Custumers.
        public function get_Custumers(){
            $query = "SELECT * FROM inventario.costumer";
            $this->db->query($query);
            $result = $this->db->getRegistros();
            return $result;
        }
        // ====================
        // ADD
        // ====================
        public function Add($datos){
            $query = "INSERT INTO inventario.costumer (complete_name,address,phone,email,acesor,INE)
            values(:complete_name,:address,:phone,:email,:acesor,:INE)";
            // vincular valores.
            $this->db->bind(':complete_name',$datos['name']);
            $this->db->bind(':address',$datos['address']);
            $this->db->bind(':phone',$datos['phone']);
            $this->db->bind(':email',$datos['email']);
            $this->db->bind(':acesor',$datos['acesor']);
            $this->db->bind(':INE',$datos['INE']);

            try{
                if ($this->db->execute()) {
                    return true;
                }else{
                    return false;
                }
                
            }catch(Exception $e){
                echo $e->getMessage();
            }
        }
        
        // function to check rfc.
        public function rfc($data){
            $query  = "SELECT * FROM inventario.costumer WHERE RFC = :rfc";
            $this->db->bind(':rfc',$data);
            $row = $this->db->get_one_Registro();
            return $row;
            //return json_encode($row);
            /*if($row > 0){
                 echo "Ya existe";
            }else{
                echo "Puedes Usar este RFC";
            }*/

        }

    }

?>