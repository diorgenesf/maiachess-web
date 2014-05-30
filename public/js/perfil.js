function CheckPasswords(form)
{	
	var pass = document.getElementsByName("password")[0].value,
		passCheck = document.getElementsByName("passwordToCheck")[0].value,
		url = form.action;
	
	if(pass!=passCheck || pass.length<1 || passCheck.length<1)
	{
		window.scrollTo(0,0);
		document.getElementById("bodyModal").innerHTML="As senhas não conferem ou a quantidade de caracteres deve ser maior zero!";
		document.body.style.overflow="hidden";
		document.getElementsByClassName('MyModal')[0].style.display="block";
	}
	else
	{
		url+="?password="+pass;
		ResultAlteracao(url,"senha");
	}

	return false;
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
			window.scrollTo(0,0);
			if(name=="senha")
			{							
				document.getElementById("bodyModal").innerHTML=answer[0];
				document.body.style.overflow="hidden";
				document.getElementsByClassName('MyModal')[0].style.display="block";

			}
			else
			{
				if(answer[1]=="false" && name != '')
				{
					document.getElementsByName(name)[0].value=answer[2];
				}
				
				window.scrollTo(0,0);
				document.getElementById("bodyModal").innerHTML=answer[0];
				document.body.style.overflow="hidden";
				document.getElementsByClassName('MyModal')[0].style.display="block";
			}
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
			var url = Form.action;
		    ResultAlteracao(url,'desativar');

			break;
	}
	return false;
}

function ajaxFileUpload()
{
    //starting setting some animation when the ajax starts and completes
    
    /*
    $("#loading")
    .ajaxStart(function(){
        $(this).show();
    })
    .ajaxComplete(function(){
        $(this).hide();
    });
    
    
    prepareing ajax file upload
    url: the url of script file handling the uploaded files
    fileElementId: the file type of input element id and it will be the index of  $_FILES Array()
    dataType: it support json, xml
    secureuri:use secure protocol
    success: call back function when the ajax complete
    error: callback function when the ajax failed
    
    */
    var $ActualAvatar = document.getElementById("Avatar"),
    	$LoadingPicture = document.getElementById("ChangeAvatarLogin");

    $ActualAvatar.src='';
    $ActualAvatar.style.display="none";
    $LoadingPicture.style.display="block";

    $.ajaxFileUpload
    (
        {
            url:'./perfil/upload_avatar', 
            secureuri:false,
            fileElementId:'fileToUpload',
            dataType: 'json',
            success: function (data, status)
            {
            	//alert("sucesso!"+data.image);

                if(typeof(data.error) != 'undefined')
                {
                    if(data.error != '')
                    {
                        console.log(data.error);
                    }else
                    {
                        //console.log(data);
                        //console.log("\nImagem:"+data.image);
                        $ActualAvatar.src="public/avatar/"+data.image;
    					$LoadingPicture.style.display="none";
                        $ActualAvatar.style.display="block";
                    }
                }
            },
            error: function (data, status, e)
            {
            	alert("Erro!");
                console.log(e);
            }
        }
    )    
    return false;
} 