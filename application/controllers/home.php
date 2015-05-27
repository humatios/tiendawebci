<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('basemodelo_model');
    }

    public function index() {
        $datos['titulo'] = 'Titulo prueba';
        $datos['contenido'] = 'front_end/muestra';
        //$datos['valores'] = $this->basemodelo_model->getCategoria();
        $this->load->view('plantilla/_front_end/_plantilla.php', $datos);
    }

    public function contact() {
        $datos['titulo'] = 'Contactenos';
        $datos['contenido'] = 'front_end/contac_';
        $this->load->view('plantilla/_front_end/_plantilla.php', $datos);
    }

}
