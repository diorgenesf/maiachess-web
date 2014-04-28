<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
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
						<a href="<?php echo base_url(); ?>#Contato">Contato</a>
					</li>
					<li>
						<a href="<?php echo base_url(); ?>#Equipe">Equipe</a>
					</li>
					<li>
						<a href="<?php echo base_url(); ?>#Sobre">Sobre</a>
					</li>
					<li class="active">
						<a href="<?php echo base_url(); ?>#Inicio">Inicio</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</nav>
<div id="Inicio"></div>
