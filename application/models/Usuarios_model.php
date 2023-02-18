<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {
    public $id;
    public $nome;
    public $email;
    public $img;
    public $historico;
    public $user;
    public $senha;

	public function __construct()
    {
        parent::__construct();
        
    }

    public function listar_autor($id){//autor
        $this->db->select('id,nome,email,img,historico');
        $this->db->from('usuario');
        $this->db->where('id='.$id);
        return $this->db->get()->result();

    }

    public function listar_autores(){//sobrenos
        $this->db->select('id,nome,email,img');
        $this->db->from('usuario');
        $this->db->order_by('nome','ASC');
        return $this->db->get()->result();

    }
    
     
}