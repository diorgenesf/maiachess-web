<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ranking extends CI_Controller {
        
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
			$metadados['menu_active'] = "ranking";
			$metadados['name_view'] = "ranking";
			$metadados['menu_view'] = "menu/logado";

			$this->load->model('usuario_model');
			$metadados['ranking'] = $this->usuario_model->getRankedUsers();

			$this->load->view('template',$metadados);
		}        
	}
}
