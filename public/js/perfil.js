document.getElementsByTagName('form').onsubmit=function(e){
	alert("asdf");
	console.log(e.target.innerHTML);
	return false;
	/*
	var xmlhttp,
		url = "http://localhost/maiachess/perfil/"+;
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","ajax_info.txt",true);
	xmlhttp.send();

	document.body.style.overflow="hidden";
	document.getElementsByClassName('MyModal')[0].style.display="block";
	*/
}

function ResultAlteracao(url,name)
{
	var xmlhttp;
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			var answer = xmlhttp.responseText.split("||");
			if(answer[1]=="false" && name != '')
			{
				document.getElementsByName(name)[0].value=answer[2];
			}
			
			window.scrollTo(0,window.scrollY);
			document.getElementById("bodyModal").innerHTML=answer[0];
			document.body.style.overflow="hidden";
			document.getElementsByClassName('MyModal')[0].style.display="block";
			
		}
	}
	xmlhttp.open("GET",url,true);
	xmlhttp.send();
}

function AlterarDados(Form,formTitle)
{
	switch(formTitle)
	{
		case 'nome':
			var nome = Form.getElementsByTagName('input')[0].value,
				url = Form.action;
			url+="?nome="+nome;
			ResultAlteracao(url,'nome');
			break;
		case 'email':
			var email = Form.getElementsByTagName('input')[0].value,
				url = Form.action;
			url+="?email="+email;
			ResultAlteracao(url,'email');
			break;
		case 'pais':
			var pais = Form.getElementsByTagName('input')[0].value,
				url = Form.action;
			url+="?pais="+pais;
			ResultAlteracao(url,'pais');
			break;
		case 'cidade':
			var cidade = Form.getElementsByTagName('input')[0].value,
				url = Form.action;
			url+="?cidade="+cidade;
			ResultAlteracao(url,'cidade');
			break;
		case 'sexo':
			var sexo = Form.getElementsByTagName('select')[0].value,
				url = Form.action;
			url+="?sexo="+sexo;
			ResultAlteracao(url,'sexo');
			break;
		case 'nascimento':
			var dia = Form.getElementsByTagName('input')[0].value,
				mes = Form.getElementsByTagName('select')[0].value,
				ano = Form.getElementsByTagName('select')[1].value,
				url = Form.action;
			url+="?dia="+dia+"&mes="+mes+"&ano="+ano;
			ResultAlteracao(url,'');
			break;
		case 'desativar':
			break;
	}
	/*
	if(countItens==1 && ItensType == "text")
	{
		console.log(Form.getElementsByTagName('input')[0].value);
	}
	else if(countItens==1 && ItensType == "select")
	{
		console.log(Form.getElementsByTagName('select')[0].value);
	}
	else if(countItens==3)
	{

	}
	
	else if(countItens > 1)
	{
		var Itens = ItensType.split('-'),
			i,
			contInput=0,
			contSelect=0;
		console.log(Itens);
		
		for (i = 0; i < Itens.length; i++) {
		    if(Itens[i] == "text")
			{
				console.log(Form.getElementsByTagName('input')[contInput].value);
				contInput++;
			}
			else if(Itens[i] == "select")
			{
				console.log(Form.getElementsByTagName('select')[contSelect].value);
				contSelect++;
			}
		}
	}
	*/

	
	return false;
}