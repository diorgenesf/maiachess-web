document.getElementsByName('nick')[0].onkeyup = function(){
	var AllNicks = document.getElementById("nicknamesUsed").value.split("/"),
	 	i,
	 	$nick_atual = document.getElementsByName("nick")[0],
	 	cont=0;

	if($nick_atual.value.length < 1)
	{
		$pai = $nick_atual.parentNode;
		$pai.childNodes[1].innerHTML = "Nickname* (Campo Obrigatório)";
		$pai.childNodes[1].style.color = "#C33531";
		return false;
	}
	for(i=0;i<AllNicks.length;i++)
	{
		if($nick_atual.value==AllNicks[i])
		{
			$pai = $nick_atual.parentNode;
			$pai.childNodes[1].innerHTML = "Nickname* (Nickname já utilizado)";
			$pai.childNodes[1].style.color = "#C33531";
			cont++;
		}
	}
	if(cont==0)
	{
		$pai = $nick_atual.parentNode;
		$pai.childNodes[1].innerHTML = "Nickname* (Nickname diponível)";
		$pai.childNodes[1].style.color = "#3c763d";
	}
}

document.getElementsByName('rep-senha')[0].onkeyup = function(){
	var $rep_senha = document.getElementsByName('rep-senha')[0],
		$senha = document.getElementsByName('senha')[0];

	if($senha.value!=$rep_senha.value && ($senha.value.length > 1))
	{
		$pai = $rep_senha.parentNode;
		$pai.childNodes[1].innerHTML = "Repetir Senha* (As senhas não coincidêm)";
		$pai.childNodes[1].style.color = "#C33531";
	}
	else
	{
		$pai = $rep_senha.parentNode;
		$pai.childNodes[1].innerHTML = "Repetir Senha*";
		$pai.childNodes[1].style.color = "gray";

		$pai = $senha.parentNode;
		$pai.childNodes[1].innerHTML = "Senha*";
		$pai.childNodes[1].style.color = "gray";	
	}
}

document.getElementsByName('senha')[0].onkeyup = function(){
	var $rep_senha = document.getElementsByName('rep-senha')[0],
		$senha = document.getElementsByName('senha')[0];

	if(($senha.value!=$rep_senha.value) && ($rep_senha.value.length > 1))
	{
		$pai = $senha.parentNode;
		$pai.childNodes[1].innerHTML = "Senha* (As senhas não coincidêm)";
		$pai.childNodes[1].style.color = "#C33531";
	}
	else
	{
		$pai = $rep_senha.parentNode;
		$pai.childNodes[1].innerHTML = "Repetir Senha*";
		$pai.childNodes[1].style.color = "gray";

		$pai = $senha.parentNode;
		$pai.childNodes[1].innerHTML = "Senha*";
		$pai.childNodes[1].style.color = "gray";
	}
}

function valida()
{
	var $nickname = document.getElementsByName('nick')[0],
		$nome = document.getElementsByName('nome')[0],
		$email = document.getElementsByName('email')[0],
		$dia = document.getElementsByName('dia')[0],
		error=0;

	if($nickname.value.length < 1 )
	{
		$pai = $nickname.parentNode;
		$pai.childNodes[1].innerHTML = "Nickname* (Campo Obrigatório)";
		$pai.childNodes[1].style.color = "#C33531";
		error++;
	}
	else{
		$pai = $nickname.parentNode;
		$pai.childNodes[1].innerHTML = "Nickname*";
		$pai.childNodes[1].style.color = "gray";
	}


	if($nome.value.length < 1 )
	{
		$pai = $nome.parentNode;
		$pai.childNodes[1].innerHTML = "Nome* (Campo Obrigatório)";
		$pai.childNodes[1].style.color = "#C33531";
		error++;
	}
	else{
		$pai = $nome.parentNode;
		$pai.childNodes[1].innerHTML = "Nome*";
		$pai.childNodes[1].style.color = "gray";
	}


	if($email.value.length < 1 )
	{
		$pai = $email.parentNode;
		$pai.childNodes[1].innerHTML = "Email* (Campo Obrigatório)";
		$pai.childNodes[1].style.color = "#C33531";
		error++;
	}
	else{
		$pai = $email.parentNode;
		$pai.childNodes[1].innerHTML = "Email*";
		$pai.childNodes[1].style.color = "gray";
		
	}

	if(isNaN($dia.value) || $dia.value.length < 1)
	{
		$pai = $dia.parentNode;
		$pai.childNodes[1].innerHTML = "Data Nascimento* (Campo Numérico: Dia)";
		$pai.childNodes[1].style.color = "#C33531";
		error++;
	}
	else{
		$pai = $dia.parentNode;
		$pai.childNodes[1].innerHTML = "Data Nascimento*";
		$pai.childNodes[1].style.color = "gray";
	}
	if(error==0) return true;
	else return false;
}

document.getElementsByName('formCadastro')[0].onsubmit = function(){
	return valida();
}