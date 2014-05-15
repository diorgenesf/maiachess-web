<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
	
	public function index(){
		
		if($this->session->userdata('nick'))
		{
			header("location: ".base_url());
		}

		$this->load->model('usuario_model','usuario');
		$usuarios = $this->usuario->getAllNick();

		if(isset($_GET['erro']))
		{
			$metadados['nick_login'] = "<label class='error'>NickName* (Usuário ou senha inválidos!)</label>";
			$metadados['senha_login'] = "<label class='error'>Senha*</label>";
		}
		else
		{
			$metadados['nick_login'] = "<label>NickName</label>";
			$metadados['senha_login'] = "<label>Senha</label>";	
		}

		$metadados['nicks'] = '';
		

		foreach ($usuarios as $row) {
			$metadados['nicks'].=$row->nick;
			$metadados['nicks'].="/";
		}
		$metadados['name_view'] = "login";
		$metadados['menu_view'] = "menu/light";
		
		$this->load->view('template',$metadados);

	}

	public function cadastro()
	{		
		$usuario = array("nick"=>$this->input->post('nick'),
			"email"=>$this->input->post('email'),"nome"=>$this->input->post('nome'),
			"nasc_dia"=>$this->input->post('dia'),"nasc_mes"=>$this->input->post('mes'),
			"nasc_ano"=>$this->input->post('ano'),"senha"=>md5($this->input->post('senha')));
		
		$this->load->model('usuario_model','novo_usuario');

		if($this->novo_usuario->inserir($usuario)) 
		{

			$user_data = $this->novo_usuario->getUser($this->input->post('nick'));

			if($user_data!=false)
			{
				//$user_data['session_id'] = md5($this->input->post('nick'));

				$this->session->set_userdata(array(
												"nick"=>$user_data[0]->nick,
												"email"=>$user_data[0]->email,
												"nome"=>$user_data[0]->nome,
												"vitorias"=>$user_data[0]->vitorias,
												"derrotas"=>0,
												"avatar"=>$user_data[0]->avatar,
												"pais"=>$user_data[0]->pais,
												"cidade"=>$user_data[0]->cidade,
												"nasc_dia"=>$user_data[0]->nasc_dia,
												"nasc_mes"=>$user_data[0]->nasc_mes,
												"nasc_ano"=>$user_data[0]->nasc_ano	,
												"facebook"=>$user_data[0]->facebook,
												"status"=>$user_data[0]->status,
												"fontcolor"=>$user_data[0]->fontcolor)
												);
				header("location: ".base_url());
			}
		}
	}

	public function verifica()
	{
		if( ( $this->input->post('nick_login') == '' ) || ( $this->input->post('senha_login') == '' ) )
		{
			header("location: ".base_url()."login?erro=1");
		}
		else
		{
			$this->load->model('usuario_model','usuario');

			$user_data = $this->usuario->getUser($this->input->post('nick_login'));
			
			if(isset($user_data))
			{
				
				if( $user_data[0]->senha==md5($this->input->post('senha_login')) )
				{
					$this->session->set_userdata(array("nick"=>$user_data[0]->nick,
												"email"=>$user_data[0]->email,
												"nome"=>$user_data[0]->nome,
												"vitorias"=>$user_data[0]->vitorias,
												"derrotas"=>0,
												"avatar"=>$user_data[0]->avatar,
												"pais"=>$user_data[0]->pais,
												"cidade"=>$user_data[0]->cidade,
												"nasc_dia"=>$user_data[0]->nasc_dia,
												"nasc_mes"=>$user_data[0]->nasc_mes,
												"nasc_ano"=>$user_data[0]->nasc_ano	,
												"facebook"=>$user_data[0]->facebook,
												"status"=>$user_data[0]->status,
												"fontcolor"=>$user_data[0]->fontcolor)
												);
					header("location: ".base_url());
				}
				else header("location: ".base_url()."login?erro=3");
				
			}
			else header("location: ".base_url()."login?erro=2");
			
		}

	}
	
}