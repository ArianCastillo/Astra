<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class inicio extends CI_Controller {

		function __construct()
		{
			parent::__construct();
		}

		function index()
		{
			$this->load->view("templates/header");
			$this->load->view("templates/sidebar");
			$this->load->view("templates/content");
			$this->load->view("templates/footer");
		}
	}