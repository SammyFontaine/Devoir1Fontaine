<?php

class Model_Rayons extends CI_Model{
    function getLesRayons($numSecteur){
        
        $sql = $this->db->select('numR,nomR')->from('rayon')->where('numSecteur',$numSecteur);
        
        $sql = $this->db->get();
        
        $data = array();
            foreach ($sql->result() as $row)
        {
            $data[] = $row;
        }
        return $data;
    }
}