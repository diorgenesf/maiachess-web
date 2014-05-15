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

		$query = "SELECT COUNT(*) FROM historico WHERE h.perdedor = '".$user->nick."'";
		return $query->result;
	}
}