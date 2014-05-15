<?php 

class Perfil extends CI_Controller{
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
			$metadados['menu_active'] = "perfil";
			$metadados['name_view'] = "perfil";
			$metadados['menu_view'] = "menu/logado";
			$this->load->view('template',$metadados);
		} 
	}

}