<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publicacoes_model extends CI_Model {
    public $id;
    public $categoria;
    public $titulo;
    public $subtitulo;
    public $conteudo;
    public $data;
    public $img;
    public $user;

	public function __construct()
    {
        parent::__construct();
        
    }

    public function destaques_home()
    {
        $this->db->select('usuario.id as idautor, usuario.nome, postagens.id, postagens.titulo, postagens.subtitulo, postagens.user, postagens.data, postagens.img');
        $this->db->from('postagens');
        $this->db->join('usuario','usuario.id=postagens.user');
        $this->db->limit(4);
        $this->db->order_by('postagens.data','DESC');
        $retorno = $this->db->get()->result();
        //print_r($retorno);
        return $retorno;
    }

    public function categoria_pub($id){
        $this->db->select('usuario.id as idautor, usuario.nome, postagens.id, postagens.titulo, postagens.subtitulo, postagens.user, postagens.data, postagens.img, postagens.categoria');
        $this->db->from('postagens');
        $this->db->join('usuario','usuario.id=postagens.user');
        $this->db->where("postagens.categoria = $id");
        $this->db->order_by('postagens.data','DESC');
        $retorno = $this->db->get()->result();
        //print_r($retorno);
        return $retorno;
    }

    public function publicacao($id){
        $this->db->select('usuario.id as idautor, usuario.nome, postagens.id, postagens.titulo, postagens.subtitulo, postagens.user, postagens.data, postagens.img, postagens.categoria, postagens.conteudo');
        $this->db->from('postagens');
        $this->db->join('usuario','usuario.id=postagens.user');
        $this->db->where("postagens.id = $id");
        $retorno = $this->db->get()->result();
        //print_r($retorno);
        return $retorno;
    }

    public function listar_titulo($id){
        $this->db->select('id,titulo');
        $this->db->from('postagens');
        $this->db->where('id='.$id);
        return $this->db->get()->result();

    }
    
     
}