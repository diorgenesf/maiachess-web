<?php 

class Regras extends CI_Controller{

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
			$metadados['menu_active'] = "regras";
			$metadados['name_view'] = "regras";
			$metadados['menu_view'] = "menu/logado";
			$this->load->view('template',$metadados);
		}
	}
}