<?php
class Model_Secteurs extends CI_Model{
    
    function getLesSecteurs(){
       
        $sql = $this->db->query("SELECT * FROM secteur");
        
        return $sql->result();
    }
}