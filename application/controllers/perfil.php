<?php 

class Perfil extends CI_Controller{
	public function index()
	{
		if(!$this->session->userdata('nick'))
		{
			/*
			$metadados['name_view'] = "home";
			$metadados['menu_view'] = "menu/home";
			$this->load->view('template',$metadados);
			*/
			header("location: ".base_url());
		}
		else
		{
			$metadados['menu_active'] = "perfil";
			$metadados['name_view'] = "perfil";
			$metadados['menu_view'] = "menu/logado";
			$this->load->view('template',$metadados);
		} 
	}

	public function upload_avatar()
	{
		header('Content-Type: application/json');
		ini_set("upload_max_filesize", "5M");
		/*$_FILES[$fileElementName] = $_FILES["btnUploadFoto"];*/

		$fileElementName = 'fileToUpload';
		/*echo ">".print_r($_FILES[$fileElementName]);*/

		// Largura máxima em pixels 
		//$largura = 150; 
		// Altura máxima em pixels 
		//$altura = 180; 
		// Tamanho máximo do arquivo em bytes 
		$tamanho = 2 * 1024 * 1024;   
		// Verifica se o arquivo é uma imagem 
		$error = "";
		$msg = "";
		$errors=0;
		if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $_FILES[$fileElementName]["type"])){ 
		    $errors++;
		    $error = "Arquivo Inv&aacute;lido";
		}   
		// Pega as dimensões da imagem 
		/*
		$dimensoes = getimagesize($_FILES[$fileElementName]["tmp_name"]);   

		// Verifica se a largura da imagem é maior que a largura permitida 

		if($dimensoes[0] > $largura) { 
		    $error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels"; 
		}   
		// Verifica se a altura da imagem é maior que a altura permitida 
		if($dimensoes[1] > $altura) { 
		    $error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels"; 
		} 
		 * 
		 */  
		// Verifica se o tamanho da imagem é maior que o tamanho permitido 


		if($_FILES[$fileElementName]["size"] > $tamanho) { 
		    $errors++;
		    $error .= "Tamanho: ".($_FILES[$fileElementName]["size"]/1024)."Mb. A imagem deve ter no m&aacute;ximo ".($tamanho/1024)."Mb"; 
		}   // Se não houver nenhum erro 



		if ($errors == 0) {   
		    // Pega extensão da imagem 
		    preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $_FILES[$fileElementName]["name"], $ext);   
		    // Gera um nome único para a imagem 
		    $nome_imagem = md5(uniqid(time())) . "." . $ext[1];  
		    // Caminho de onde ficará a imagem 
		    $pasta_imagem = "public/avatar/";
		    $caminho_imagem =  $pasta_imagem . $nome_imagem;   
		    // Faz o upload da imagem para seu respectivo caminho 
		    if(move_uploaded_file($_FILES[$fileElementName]["tmp_name"], $caminho_imagem))
		    {
		        $msg .= "Sucesso!";
		    }
		    else 
		    {
		    	$msg .= "Erro!";
		    }
		    // Insere os dados no banco 

		    $oldAvatar = $this->session->userdata('avatar');

		    $this->load->model('usuario_model','usuario');
		
			if($this->usuario->UpdateAvatar($nome_imagem))
			{
				@unlink($pasta_imagem . $oldAvatar);
			}
			else
			{
				$error .= "Erro: Database error!";
				$nome_imagem = $oldAvatar;				
			}
			$this->session->set_userdata('avatar',$nome_imagem);
		}
		$tmp = array();
		$tmp['error'] = $error;
		$tmp['msg'] = $msg;
		$tmp['image'] = $nome_imagem;

		die(json_encode($tmp));
	}

	public function DeleteAccount()
	{
		$this->load->model('usuario_model','usuario');
		
		if($this->usuario->DeleteUser())
		{
			echo "Conta Desativada com sucesso!||true";
		}
		else
		{
			echo "Erro em desativar conta!||false";
		}
	}

	public function ChangePassword()
	{
		$this->load->model('usuario_model','usuario');
		
		if($this->usuario->UpdateSenha($this->input->get('password')))
		{
			echo "Alterado com sucesso!||true";
		}
		else
		{
			echo "Erro na alteração!||false";
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