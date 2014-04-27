<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
        
	public function index()
	{
        $this->load->view('cabecalho');
        $this->load->view('menu');
        $this->load->view('rodape');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/Welcome.php */