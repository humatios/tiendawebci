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
    
    public function eliminadoSuave ($tabla){
        $datos = array(
            'id' => $this->input->post('id'),       
            'activo' => 0
        );
        $this->basemodelo_model->eliminadoSuave($tabla, $datos);
        redirect(base_url() . 'admin/categorias');
    }
    
    //Producto
    
    public function producto() {
        $datos['titulo'] = 'Productos';
        $datos['contenido'] = 'back_end/producto_';
        $datos['valores'] = $this->basemodelo_model->Obtener('producto');
        $this->load->view('plantilla/_back_end/_plantilla_b.php', $datos);
    }
    
    public function addProducto() {
        $tabla = 'producto';
        $nombre = $this->input->post('nombre');
        $datos = array(
            'nombre' => $nombre,
            'categoria' => $this->input->post('categoria'),
            'descripcion' => $this->input->post('descripcion'),
            'precio' => $this->input->post('precio'),
            'foto' => $this->input->post('foto'),
            'oferta' => $this->input->post('oferta'),
            'stock' => $this->input->post('stock'),
            'codigo' => $this->input->post('codigo'),
            'url' => url_title($nombre, '-', TRUE)
        );
        $this->basemodelo_model->Crear($tabla, $datos);
        redirect(base_url() . 'admin/producto');
    }
    
    public function editarProducto($id = NULL) {
        if (!$id) {
            show_404();
        }
        $datos['titulo'] = 'Editar producto';
        $datos['contenido'] = 'back_end/editarProducto_';
        $datos['id'] = $id;
        $datos['valores'] = $this->basemodelo_model->getxID('producto', $id);
        if (!$datos['valores']) {
            show_404();
        }
        $this->load->view('plantilla/_back_end/_plantilla_b.php', $datos);
    }
    
    public function actualizarProducto (){
        $nombre = $this->input->post('nombre');
        $datos = array(
            'id' => $this->input->post('id'),
            'nombre' => $nombre,
            'categoria' => $this->input->post('categoria'),
            'descripcion' => $this->input->post('descripcion'),
            'precio' => $this->input->post('precio'),
            'foto' => $this->input->post('foto'),
            'oferta' => $this->input->post('oferta'),
            'stock' => $this->input->post('stock'),
            'codigo' => $this->input->post('codigo'),
            'url' => url_title($nombre, '-', TRUE)
        );
        $this->basemodelo_model->actualizar('producto', $datos);
        redirect(base_url() . 'admin/producto');
    }
    
    public function eliminadoSuaveProducto ($tabla){
        $datos = array(
            'id' => $this->input->post('id'),       
            'estado' => 0
        );
        $this->basemodelo_model->eliminadoSuave($tabla, $datos);
        redirect(base_url() . 'admin/producto');
    }
    
    //Mensaje
    
    public function mensaje() {
        $datos['titulo'] = 'Mensajes';
        $datos['contenido'] = 'back_end/mensaje_';
        $datos['valores'] = $this->basemodelo_model->Obtener('contacto');
        $this->load->view('plantilla/_back_end/_plantilla_b.php', $datos);
    }

}
