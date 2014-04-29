<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
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
				<div class="column4">
					<a href="<?php echo base_url(); ?>" target="_self">
						<img src="public/imagens/maiachess.gif" class="LogoMaiaChess"/>
					</a>
				</div>

				<div class="column11">
					<ul class="Menu">
						<li>
							<input type="button" class="btn" value="Entrar" />
						</li>
						<li>
							<a name="Contato" onclick="selectItemMenu(this);" href="<?php echo base_url(); ?>#Contato">Contato</a>
						</li>
						<li>
							<a name="Equipe" onclick="selectItemMenu(this);" href="<?php echo base_url(); ?>#Equipe">Equipe</a>
						</li>
						<li>
							<a name="Sobre" onclick="selectItemMenu(this);" href="<?php echo base_url(); ?>#Sobre">Sobre</a>
						</li>
						<li>
							<a name="Inicio" onclick="selectItemMenu(this);" href="<?php echo base_url(); ?>#Inicio">Inicio</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
</div>
<div class="Content">
	<div id="Inicio"></div>
	<div id="Sobre">
		<div class="container16">
			<div class="row">
				<div class="TituloContent">
					<img src="public/imagens/linha.gif" class="column6 linhaTitulo"/> 
					<h1 class="column4">Sobre</h1> 
					<img src="public/imagens/linha.gif" class="column6 linhaTitulo"/> 
				</div>
			</div>
			<div class="row logoUnimontes">
				<img src="public/imagens/unimontes.png"/>
			</div>
			<div class="row textoSobre">
				<p class="column7">O MaiaChess foi um jogo desenvolvido
					como trabalho na disciplina de Sistemas 
					Distribuidos da Unimontes.
					Lecionada pelo  Prof. Dr. Nilton Maia
				</p>
			</div>

		</div>
	</div>
	<div id="Equipe">
		<div class="container16">
			<div class="row">
				<div class="TituloContent">
					<img src="public/imagens/linha.gif" class="column6 linhaTitulo"/> 
					<h1 class="column4">Equipe</h1> 
					<img src="public/imagens/linha.gif" class="column6 linhaTitulo"/> 
				</div>
			</div>
			<div class="row">
				<div class="column4 member">
					<center>
						<img src="public/imagens/members/teammember1.png"/>
						<p class="nome">DIORGENES FERREIRA</p>
						<p class="tituloDescricao">Estudante</p>
						<p class="descricao">
							Eiiitaaa Mainhaaa!! Esse Lorem ipsum é só na sacanageeem!! 
							E que abundância meu irmão viuu!! Assim você vai matar o papai. 
							Só digo uma coisa, Domingo ela não vai! Danadaa!!
						</p>
						<img class="google" src="public/imagens/members/google.png"/>
						<img class="facebook" src="public/imagens/members/facebook.png"/>
					</center>
				</div>
			</div>

		</div>
	</div>
	<div id="Contato"></div>
</div>
<script src="public/js/inicio.js"></script>
