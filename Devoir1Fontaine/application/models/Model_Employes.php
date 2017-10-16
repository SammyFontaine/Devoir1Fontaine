<?php
class Model_Employes extends CI_Model{
    function getLesEmployes(){
        
           $sql = $this->db->query("SELECT * FROM employe");
        
           return $sql->result();
    } 
}