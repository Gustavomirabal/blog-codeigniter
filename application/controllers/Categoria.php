<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
    {
        parent::__construct();
		$this->load->model('categorias_model','modelcategorias');
		$this->categorias=$this->modelcategorias->listar_categorias();

    }
    
     public function index($id, $slug=null)
	{
		$dados['categorias']=$this->categorias;
		$this->load->model('publicacoes_model','modelpublicacoes');
		$dados['postagens']=$this->modelpublicacoes->categoria_pub($id);
		//print_r($dados['postagens']);
		//Dados a serem enviados ao cabeçalho
		$dados['titulo']='Categoria';
		$dados['subtitulo']='';
		$dados['subtitulodb']= $this->modelcategorias->listar_titulo($id);
		$this->load->view('frontend/template/html-header',$dados);
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/categoria');
		$this->load->view('frontend/template/aside');
        $this->load->view('frontend/template/footer');
        $this->load->view('frontend/template/html-footer');
	}

}
