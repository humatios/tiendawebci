<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('basemodelo_model');
        $this->load->library("form_validation");
    }

    public function index() {
        $datos['titulo'] = 'Tienda Web';
        $datos['contenido'] = 'front_end/muestra';
        //$datos['valores'] = $this->basemodelo_model->getCategoria();
        $this->load->view('plantilla/_front_end/_plantilla.php', $datos);
    }

    public function contact() {
        $datos['titulo'] = 'Contactenos';
        $datos['contenido'] = 'front_end/contac_';

        $this->form_validation->set_rules("nombre", "Nombre", "required");
        $this->form_validation->set_rules("asunto", "Asunto", "required");
        $this->form_validation->set_rules("mensaje", "Mensaje", "required");

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('plantilla/_front_end/_plantilla.php', $datos);
        } else {
            $tabla = 'contacto';
            $datos = array(
                'nombre' => $this->input->post('nombre'),
                'email' => $this->input->post('email'),
                'asunto' => $this->input->post('asunto'),
                'mensaje' => $this->input->post('mensaje')
            );
            $this->basemodelo_model->Crear($tabla, $datos);
            $datos['titulo'] = 'Contactenos';
            $datos['contenido'] = 'front_end/mensajeEnviado_';
            $this->load->view('plantilla/_front_end/_plantilla.php', $datos);
        }
    }

}
