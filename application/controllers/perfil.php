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

	public function ChangeNome()
	{
		$this->load->model('usuario_model','usuario');
		
		if($this->usuario->UpdateNome($this->input->get('nome')))
		{
			echo "Alterado com sucesso!||true";
		}
		else
		{
			echo "Erro na alteração!||false||".$this->session->userdata('nome');
		}
	}

	public function ChangeEmail()
	{
		$this->load->model('usuario_model','usuario');
		
		if($this->usuario->UpdateEmail($this->input->get('email')))
		{
			echo "Alterado com sucesso!||true";
		}
		else
		{
			echo "Erro na alteração!||false||".$this->session->userdata('email');
		}
	}

	public function ChangePais()
	{
		$this->load->model('usuario_model','usuario');
		
		if($this->usuario->UpdatePais($this->input->get('pais')))
		{
			echo "Alterado com sucesso!||true";
		}
		else
		{
			echo "Erro na alteração!||false||".$this->session->userdata('pais');
		}
	}

	public function ChangeCidade()
	{
		$this->load->model('usuario_model','usuario');
		
		if($this->usuario->UpdateCidade($this->input->get('cidade')))
		{
			echo "Alterado com sucesso!||true";
		}
		else
		{
			echo "Erro na alteração!||false||".$this->session->userdata('cidade');
		}
	}

	public function ChangeSexo()
	{
		$this->load->model('usuario_model','usuario');
		
		if($this->usuario->UpdateSexo($this->input->get('sexo')))
		{
			echo "Alterado com sucesso!||true";
		}
		else
		{
			echo "Erro na alteração!||false||".$this->session->userdata('sexo');
		}
	}

	public function ChangeNascimento()
	{
		$this->load->model('usuario_model','usuario');
		
		if($this->usuario->UpdateNascimento($this->input->get('dia'),$this->input->get('mes'),$this->input->get('ano')))
		{
			echo "Alterado com sucesso!||true";
		}
		else
		{
			echo "Erro na alteração!||false||".$this->session->userdata('sexo');
		}
	}



}