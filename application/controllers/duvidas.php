<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Duvidas extends CI_Controller {
        
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
			$metadados['menu_active'] = "duvidas";
			$metadados['name_view'] = "duvidas";
			$metadados['menu_view'] = "menu/logado";
			$this->load->view('template',$metadados);
		}        
	}
}
