<?php
    class User_model{
        private $db;
        private $users;
        
        public function __construct(){
            //este método conecta con la bd
            if(file_exists("model/conect.php"))
               require_once("modelo/conect.php"); 
            else
                require_once("../modelo/conect.php");
            
            $this->db=Conectar::conexion();
            $this->users=array();
        }
        
        
        
        public function executeQuery($query){
            $query = $this->db->query($query);
            while($rows=$query->fetch(PDO::FETCH_ASSOC)){
                $this->users[]=$rows;
            }
            return $this->users;
        }
        
        public function ejecutaDelete($consulta){
            $numFilasAfect = $this->db->exec($consulta);
            return $numFilasAfect;
        }
    }

?>