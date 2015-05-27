<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Basemodelo_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function crear($tabla, $datos) {
        $this->db->insert($tabla, $datos);
    }

    public function Obtener($tabla) {
        $query = $this->db->get($tabla);
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return FALSE;
        }
    }

    public function getxID($tabla, $id) {
        $query = $this->db->where('id', $id)->get($tabla);
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return FALSE;
        }
    }

    public function actualizar($tabla, $datos) {
        $query = $this->db->where('id', $datos['id'])->update($tabla, $datos);
    }
    
    public function eliminadoSuave ($tabla, $datos){
        $query = $this->db->where('id', $datos['id'])->update($tabla, $datos);
    }
    
    public function getx($tabla, $id, $field) {
        $query = $this->db->where($field, $id)->get($tabla);
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return FALSE;
        }
    }
    public function getxx($tabla, $id, $field, $id2, $field2) {
        $query = $this->db->where($field, $id)->where($field2, $id2)->get($tabla);
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return FALSE;
        }
    }

}
