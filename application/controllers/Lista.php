<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lista extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Lista_Model');
		$this->load->library('form_validation');
	}

	function index(){
		//Se obtiene el id del usuario logueado
		$idUsuario = 1;
		//Se obtienen sus listas
		$datos['listas'] = $this->Lista_Model->getListas($idUsuario);
		$this->load->view('lista/index', $datos);
	}
	
	function view($idLista){
		$idLista_limpio = $this->security->xss_clean($idLista);
		//Se obtiene una sola lista
		$dato['lista'] = $this->Lista_Model->getLista($idLista_limpio);
		$dato['enlaces'] = $this->Lista_Model->getEnlaces($idLista_limpio);
		$this->load->view('lista/view', $dato);
	}

	function create(){
		$this->form_validation->set_rules('nombre','Nombre','trim|required|max_length[45]');
		$this->form_validation->set_rules('descripcion','Descripción','trim|max_length[45]');
		$this->form_validation->set_rules('privacidad','Privacidad','trim|required');

		$this->form_validation->set_error_delimiters('<span>', '</span>');
		if($this->form_validation->run() === FALSE){
			$this->load->view('lista/create');
		}else{
			$this->Lista_Model->setLista();
			redirect('index.php/lista','refresh');
		}
	}

	function delete($idLista){
		$idLista_limpio = $this->security->xss_clean($idLista);
		$this->Lista_Model->deleteLista($idLista_limpio);
		redirect('index.php/lista','refresh');
	}

	function update($idLista){
		$this->form_validation->set_rules('nombre','Nombre','required|max_length[45]');
		$this->form_validation->set_rules('descripcion','Descripción','max_length[45]');
		$this->form_validation->set_rules('privacidad','Privacidad','required');
		$this->form_validation->set_error_delimiters('<span>', '</span>');
		if($this->form_validation->run() === FALSE){
			$idLista_limpio = $this->security->xss_clean($idLista);
			//Se obtiene una sola lista
			$dato['lista'] = $this->Lista_Model->getLista($idLista_limpio);
			$this->load->view('lista/update', $dato);
		}else{
			$this->Lista_Model->updateLista();
			redirect('index.php/lista','refresh');
		}
	}
}
?>