<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
        
	public function index()
	{
		if(!$this->session->userdata('nick'))
		{
			$metadados['name_view'] = "home";
			$metadados['menu_view'] = "menu/home";
			$this->load->view('template',$metadados);
		}
		else
		{
			$metadados['menu_active'] = "salas";
			$metadados['name_view'] = "salas";
			$metadados['menu_view'] = "menu/logado";
			$this->load->view('template',$metadados);
		}        
	}

	public function sair()
	{
		//$this->session->unset_userdata('nick');
		$this->session->sess_destroy();
		header("location: ".base_url());
	}
}
