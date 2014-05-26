<div class="ContentTopMenu">
	<div class="BarTopMenu"></div>
	<nav class="TopMenu">
		<div class="container16"> 
			<div class="row">
				<div class="column1">
					<a href="<?php echo base_url(); ?>" target="_self">
						<img src="<?php echo base_url(); ?>public/imagens/logo.gif" class="Logo"/>
					</a>
				</div> 
				<div class="column4">
					<a href="<?php echo base_url(); ?>" target="_self">
						<img src="<?php echo base_url(); ?>public/imagens/maiachess.gif" class="LogoMaiaChess-home"/>
					</a>
				</div>

				<div class="column11">
					<ul class="Menu-home MenuAll">
						<li>
							<form action="<?php echo base_url(); ?>login" method="post"><input type="submit" class="btn" value="Entrar" /></form>
						</li>
						<li>
							<a name="Contato" onclick="return selectItemMenu(this);" href="<?php echo base_url(); ?>#Contato">Contato</a>
						</li>
						<li>
							<a name="Equipe" onclick="return selectItemMenu(this);" href="<?php echo base_url(); ?>#Equipe">Equipe</a>
						</li>
						<li>
							<a name="Sobre" onclick="return selectItemMenu(this);" href="<?php echo base_url(); ?>#Sobre">Sobre</a>
						</li>
						<li>
							<a name="Inicio" onclick="return selectItemMenu(this);" href="<?php echo base_url(); ?>#Inicio">Inicio</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
</div>