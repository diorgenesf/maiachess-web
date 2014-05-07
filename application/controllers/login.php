<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
	
	public function index(){
		/*
		$metadados['labels'] = array("nickname"=>array("NickName",""),
			"email"=>array("Email",""),
			"nome"=>array("Nome Completo",""),
			"data_nascimento"=>array("Data Nascimento",""),
			"senha"=>array("Senha",""),
			"rep-senha"=>array("Repetir Senha",""));
		*/
		$this->load->model('usuario_model','usuario');
		$usuarios = $this->usuario->getAll();
		$metadados['nicks'] = '';
		
		foreach ($usuarios as $row) {
			$metadados['nicks'].=$row->nick;
			$metadados['nicks'].="/";
		}
		
        $this->load->view('cabecalho');
        $this->load->view('login',$metadados);
        $this->load->view('rodape');
        
	}

	public function cadastro()
	{		
		$usuario = array("nick"=>$this->input->post('nick'),
			"email"=>$this->input->post('email'),"nome"=>$this->input->post('nome'),
			"nasc_dia"=>$this->input->post('dia'),"nasc_mes"=>$this->input->post('mes'),
			"nasc_ano"=>$this->input->post('ano'),"senha"=>md5($this->input->post('senha')));
		
		$this->load->model('usuario_model','novo_usuario');

		if($this->novo_usuario->inserir($usuario)) header("location: ".base_url());

	}
	
}