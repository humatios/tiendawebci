<?php

defined('BASEPATH') OR exit('No direct script access allowed');
//Control Prueba Branch
class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('basemodelo_model');
    }
    
    public function index() {
        $datos['titulo'] = 'Administrador';
        $datos['contenido'] = 'back_end/contenidob_';
        $this->load->view('plantilla/_back_end/_plantilla_b.php', $datos);
    }

    public function categorias() {
        $datos['titulo'] = 'Categorias';
        $datos['contenido'] = 'back_end/categoria_';
        $datos['valores'] = $this->basemodelo_model->Obtener('categoria');
        $this->load->view('plantilla/_back_end/_plantilla_b.php', $datos);
    }

    public function addCategoria() {
        $tabla = 'categoria';
        $datos = array(
            'nombre' => $this->input->post('nombre'),
            'activo' => $this->input->post('activo')
        );
        $this->basemodelo_model->Crear($tabla, $datos);
        redirect(base_url() . 'admin/categorias');
    }

    public function editarCategoria($id = NULL) {
        if (!$id) {
            show_404();
        }
        $datos['titulo'] = 'Editar categoria';
        $datos['contenido'] = 'back_end/editarCategoria_';
        $datos['id'] = $id;
        $datos['valores'] = $this->basemodelo_model->getxID('categoria', $id);
        if (!$datos['valores']) {
            show_404();
        }
        $this->load->view('plantilla/_back_end/_plantilla_b.php', $datos);
    }
    
    public function actualizarCategoria (){
        $datos = array(
            'id' => $this->input->post('id'),
            'nombre' => $this->input->post('nombre'),            
            'activo' => $this->input->post('activo')
        );
        $this->basemodelo_model->actualizar('categoria', $datos);
        redirect(base_url() . 'admin/categorias');
    }
    
    public function eliminadoSuaveCategoria (){
        $datos = array(
            'id' => $this->input->post('id'),       
            'activo' => 0
        );
        $this->basemodelo_model->eliminadoSuave('categoria', $datos);
        redirect(base_url() . 'admin/categorias');
    }

}
