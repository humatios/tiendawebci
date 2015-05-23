<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('basemodelo_model');
    }
    
    public function index() {
        $datos['titulo'] = 'Registro';
        $datos['contenido'] = 'front_end/signup_';
        $this->load->view('plantilla/_front_end/_plantilla.php', $datos);
    }
   

    public function addUsuario() {
        $tabla = 'usuarios';
        $datos = array(
            'nombre' => $this->input->post('nombre'),
            'apellido' => $this->input->post('apellido'),
            'telefono' => $this->input->post('telefono'),
            'direccion' => $this->input->post('direccion'),
            'ciudad' => $this->input->post('ciudad'),
            'email' => $this->input->post('email'),
            'ID' => $this->input->post('ID')
            
            
        );
        if(getxID($tabla, $datos['ID']===FALSE)){
        $this->basemodelo_model->Crear($tabla, $datos);
        $datum['titulo'] = 'Registro Exitoso';
        $datum['contenido'] = 'front_end/signupsucc_';
        $this->load->view('plantilla/_front_end/_plantilla.php', $datum);
        }else{
            
        }
            
    }
    
    

    

}



