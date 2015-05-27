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
            'user' => $this->input->post('user'),
            'password' => $this->input->post('password')
            
            
        );
        
        if($this->basemodelo_model->getx($tabla, $datos['user'], 'user')===FALSE){
        $this->basemodelo_model->Crear($tabla, $datos);
        $datum['titulo'] = 'Registro Exitoso';
        $datum['contenido'] = 'front_end/signupsucc_';
        $this->load->view('plantilla/_front_end/_plantilla.php', $datum);
        }else{
            
            
            $datum['titulo'] = 'Usuario Existente';
            $datum['mensaje'] = 'usuario existente';
            $datum['view1'] = 'front_end/error_';
            $datum['view2'] = 'front_end/signup_';
            $this->load->view('front_end/twoviews_.php', $datum);
        }
            
    }
    
    public function loadlogin(){
        $dato['titulo'] = 'Registro';
        $dato['contenido'] = 'front_end/login_';
        $this->load->view('plantilla/_front_end/_plantilla.php', $dato);
    }
    
    public function login(){
        $tabla = 'usuarios';
        $datos = array(
            'user' => $this->input->post('user'),
            'password' => $this->input->post('password')
            
            
        );
        if ($this->basemodelo_model->getxx($tabla, $datos['user'], 'user',$datos['password'], 'password')===FALSE) {
            $datum['titulo'] = 'Perfil';
            $datum['mensaje'] = 'usuario o contraseña erronea';
            $datum['view1'] = 'front_end/error_';
            $datum['view2'] = 'front_end/login_';
            $this->load->view('front_end/twoviews_.php', $datum);
        }else{
            $this->profile($datos['user']);
        }
    }
    
    
    public function profile($user) {
        $datos['titulo'] = 'Perfil';
        $datos['contenido'] = 'front_end/profile_';
        $datos['valores'] = $this->basemodelo_model->getx('usuarios', $user, 'user');
        $this->load->view('plantilla/_front_end/_plantilla.php', $datos);
    }
    
    
    

    

}



