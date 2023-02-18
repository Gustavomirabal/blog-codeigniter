<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sobrenos extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
		$this->load->model('categorias_model','modelcategorias');
		$this->categorias=$this->modelcategorias->listar_categorias();
		$this->load->model('usuarios_model', 'modelusuarios');

    }
    
     public function index()
	{
		$dados['categorias']=$this->categorias;
	
		$dados['autores']=$this->modelusuarios->listar_autores();
		//print_r($dados['autores']);
		//Dados a serem enviados ao cabeçalho
		$dados['titulo']='Sobre Nós';
		$dados['subtitulo']='Conheça nossa equipe';
		//$dados['subtitulodb']=$this->modelcategorias->listar_titulo($id);
		$this->load->view('frontend/template/html-header',$dados);
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/sobrenos');
		$this->load->view('frontend/template/aside');
        $this->load->view('frontend/template/footer');
        $this->load->view('frontend/template/html-footer');
	}

    public function autores($id, $slug=null)
	{
		$dados['categorias']=$this->categorias;
		
		
		$dados['autores']=$this->modelusuarios->listar_autor($id);
		$dados['titulo']='Sobre Nós';
		$dados['subtitulo']='Autor';
		
		$this->load->view('frontend/template/html-header',$dados);
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/autor');
		$this->load->view('frontend/template/aside');
        $this->load->view('frontend/template/footer');
        $this->load->view('frontend/template/html-footer');
	}

}
