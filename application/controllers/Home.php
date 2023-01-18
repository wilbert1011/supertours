<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
        parent::__construct();
}

	public function index()
	{
		$this->load->view('include/header');
		$this->load->view('include/menu');
		$this->load->view('vistas/home');
		$this->load->view('include/footer');
	}

	public function contact()
	{
		$this->load->view('include/header');
		$this->load->view('include/menu');
		$this->load->view('vistas/contacto');
		$this->load->view('include/footer');
	}
}
