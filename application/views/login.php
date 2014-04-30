<style type="text/css">
	.LogoMaiaChess{
		width: 30% !important;
		margin-top:0.2% !important;
	}
	.Menu{
		margin-right: 22px;
	}
</style>
<div class="ContentTopMenu">
	<div class="BarTopMenu"></div>
	<nav class="TopMenu">
		<div class="container16"> 
			<div class="row">
				<div class="column1">
					<a href="<?php echo base_url(); ?>" target="_self">
						<img src="public/imagens/logo.gif" class="Logo"/>
					</a>
				</div> 
				<div class="column13">
					<a href="<?php echo base_url(); ?>" target="_self">
						<center><img src="public/imagens/maiachess.gif" class="LogoMaiaChess"/></center>
					</a>
				</div>

				<div class="column2">
					<ul class="Menu-login MenuAll">
						<li class="btnInLiToFull">
							<form action="<?php echo base_url(); ?>" method="post"><input type="submit" class="btn" value="Voltar" /></form>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
</div>
<div class="underTopMenu"></div>
<div id="Login">
	<div class="container16">
		<div class="row">
			<div class="TituloContent">
				<img src="public/imagens/linha.gif" class="column6 linhaTitulo"/> 
				<h1 class="column4">Login</h1> 
				<img src="public/imagens/linha.gif" class="column6 linhaTitulo"/> 
			</div>
		</div>

		<div class="column8 box-transparent-light">
			<div class="row SubTituloCadastro">
				<div class="SubTituloContent">
					<img src="public/imagens/sublinha.png" class="column6 linhaSubTitulo"/> 
					<h1 class="column3">Cadastrar</h1> 
					<img src="public/imagens/sublinha.png" class="column6 linhaSubTitulo"/> 
				</div>
			</div>

			<form class="Cadastro">
				<div class="row">
					<label>NickName</label>
					<br />
					<input type="text" placeholder="Informe seu NickName"/>
				</div>
				<div class="row">
					<label>Email</label>
					<br />
					<input type="text" placeholder="Informe seu email"/>
				</div>
				
				<div class="row">
					<label>Nome Completo</label>
					<br />
					<input type="text" placeholder="Informe seu Nome"/>
				</div>				
				
				<div class="row">
					<label>Data Nascimento</label>
					<br />
					<input type="text" placeholder="Dia" id="txtDia"/>
					<select id="sltMes"><option>Mês</option></select>
					<select id="sltAno"><option>Ano</option></select>
				</div>

				<div class="row">
					<label>Senha</label>
					<br />
					<input type="password" placeholder="Informe sua Senha"/>
				</div>
								
				<div class="row">
					<label>Repetir Senha</label>
					<br />
					<input type="password" placeholder="Informe a Senha novamente"/>
				</div>		

				<div class="row">
					<input type="button" class="btn" value="Cadastrar"/>
				</div> 
			</form>

		</div>

		<div class="column8 box-transparent-light Entrar">
			<div class="row SubTituloCadastro">
				<div class="SubTituloContent">
					<img src="public/imagens/sublinha.png" class="column6 linhaSubTitulo"/> 
					<h1 class="column3">Entrar</h1> 
					<img src="public/imagens/sublinha.png" class="column6 linhaSubTitulo"/> 
				</div>				
			</div>

			<form class="Cadastro">
				<div class="row">
					<label>NickName</label>
					<br />
					<input type="text" placeholder="Informe seu NickName"/>
				</div>
				<div class="row">
					<label>Senha</label>
					<br />
					<input type="password" placeholder="Informe sua Senha"/>
				</div>

				<div class="row">
					<input type="button" class="btn" value="Entrar"/>
				</div> 
			</form>
			<a href="">Esqueceu a Senha?</a>
			<br />
			<a href="">Esqueceu o Nickname?</a>
		</div>
		
		<div class="column8 box-transparent-light RedesSociais">
			<div class="row SubTituloCadastro">
				<div class="SubTituloContent">
					<img src="public/imagens/sublinha.png" class="column6 linhaSubTitulo"/> 
					<h1 class="column3">Redes Sociais</h1> 
					<img src="public/imagens/sublinha.png" class="column6 linhaSubTitulo"/> 
				</div>				
			</div>

			<form class="Cadastro">
				<div class="row">
					<input type="button" class="btn btn-facebook" value="Facebook"/>
				</div>
				<div class="row">
					<input type="button" class="btn btn-google" value="Google"/>
				</div>
			</form>
		</div>

	</div>
</div>