<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model{
	public function inserir($dados = NULL)
	{
		if($dados==NULL) return false;
		
		/*
		$sql = "INSERT INTO usuario (nick,email,nome,nasc_dia,nasc_mes,nasc_ano,senha) VALUES(
			".$dados['nick'].", ".$dados['email'].", ".$dados['nome'].", ".$dados['nasc_dia'].", ".$dados['nasc_mes'].", ".
			$dados['nasc_ano'].", ".$dados['senha'].")";
		*/
		
		return $this->db->insert('usuario',$dados);
		
	}

	public function getAllNick()
	{
		$this->db->select('nick');
		$query = $this->db->get('usuario');

		return $query->result();
	}

	public function getUser($nick = NULL)
	{
		if($nick==NULL) return false;

		$query = $this->db->get_where('usuario', array('nick' => $nick));
		return $query->result();
	}

	public function getDerrotas($nick = NULL)
	{
		if($nick==NULL) return false;

		$query = $this->db->get_where('usuario', array('nick' => $nick));
		$user = $query->result();

		$query = $this->db->query("SELECT COUNT(*) FROM historico WHERE h.perdedor = '".$user->nick."'");
		return $query->result();
	}

	public function UpdateNome($nome = NULL)
	{
		if($nome==NULL) return false;
		$nick = $this->session->userdata('nick');
		$query = $this->db->query("UPDATE usuario SET nome = '".$nome."' WHERE nick = '".$nick."'");
		
		if($this->db->affected_rows()>0)
		{
			$this->session->set_userdata('nome',$nome);
			return true;
		} 
		else return false;
	}

	public function UpdateEmail($email = NULL)
	{
		if($email==NULL) return false;
		$nick = $this->session->userdata('nick');
		$query = $this->db->query("UPDATE usuario SET email = '".$email."' WHERE nick = '".$nick."'");
		
		if($this->db->affected_rows()>0)
		{
			$this->session->set_userdata('email',$email);
			return true;
		} 
		else return false;
	}

	public function UpdatePais($pais = NULL)
	{
		if($pais==NULL) return false;
		$nick = $this->session->userdata('nick');
		$query = $this->db->query("UPDATE usuario SET pais = '".$pais."' WHERE nick = '".$nick."'");
		
		if($this->db->affected_rows()>0)
		{
			$this->session->set_userdata('pais',$pais);
			return true;
		} 
		else return false;
	}

	public function UpdateCidade($cidade = NULL)
	{
		if($cidade==NULL) return false;
		$nick = $this->session->userdata('nick');
		$query = $this->db->query("UPDATE usuario SET cidade = '".$cidade."' WHERE nick = '".$nick."'");
		
		if($this->db->affected_rows()>0)
		{
			$this->session->set_userdata('cidade',$cidade);
			return true;
		} 
		else return false;
	}

	public function UpdateSexo($sexo = NULL)
	{
		if($sexo==NULL) return false;
		$nick = $this->session->userdata('nick');
		$query = $this->db->query("UPDATE usuario SET sexo = '".$sexo."' WHERE nick = '".$nick."'");
		
		if($this->db->affected_rows()>0)
		{
			$this->session->set_userdata('sexo',$sexo);
			return true;
		} 
		else return false;
	}

	public function UpdateNascimento($dia = NULL,$mes = NULL,$ano = NULL)
	{
		if($dia==NULL || $mes==NULL || $ano==NULL) return false;
		$nick = $this->session->userdata('nick');
		$query = $this->db->query("UPDATE usuario SET nasc_dia = $dia, nasc_mes = $mes, nasc_ano = $ano WHERE nick = '".$nick."'");
		
		if($this->db->affected_rows()>0)
		{
			$this->session->set_userdata('nasc_dia',$dia);
			$this->session->set_userdata('nasc_mes',$mes);
			$this->session->set_userdata('nasc_ano',$ano);
			return true;
		} 
		else return false;
	}



}