<?php

class Ctrl_Accueil extends CI_Controller{
    public function index(){
        
        $this->load->model('Model_Secteurs');
        
        $data['lesSecteurs'] = $this->Model_Secteurs-> getLesSecteurs();
        
        $this->load->view('v_Accueil',$data);
    }
    public function getLesRayons(){
        
      
        $numSecteur = $_GET['numSecteur'];
      
        $this->load->model('Model_Rayons') ;
      
        $data['lesRayons'] = $this->Model_Rayons->getLesRayons($numSecteur);
      
        $this->load->view('v_Rayons',$data);
    }
    public function  getLesEmployes(){
        
        $this->load->model('Model_Employes');
        
        $data['lesEmployes'] = $this->Model_Employes->getLesEmployes();
        
        $this->load->view('v_Employes',$data);
    }
//    public function getNombresHeures(){
//        
//        $this->load->model('Model_Travailler');
//        
//        $data['lesHeures'] = $this->Model_Travailler->getNombresHeures();
//        
//        $this->load->view('v_Heures',$data);
//    }
}