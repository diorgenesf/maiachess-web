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
						<img src="<?php echo base_url(); ?>public/imagens/maiachess.gif" class="LogoMaiaChess-logado"/>
					</a>
				</div>

				<div class="column11">
					<ul class="Menu-logado MenuAll">
						<li class="li-btn">
							<form action="<?php echo base_url(); ?>home/sair" method="post"><input type="submit" class="btn" value="Sair" /></form>
						</li>

						
						<li <?php if($menu_active == 'duvidas') echo "class='active'"; ?>>
							<a name="Duvidas"  href="<?php echo base_url(); ?>duvidas">Dúvidas</a>
						</li>

						<li <?php if($menu_active == 'perfil') echo "class='active'"; ?>>
							<a name="Perfil" href="<?php echo base_url(); ?>perfil">Perfil</a>
						</li>
						
						<li <?php if($menu_active == 'historico') echo "class='active'"; ?>>
							<a name="Historico" href="<?php echo base_url(); ?>historico">Histórico</a>
						</li>

						<li <?php if($menu_active == 'ranking') echo "class='active'"; ?>>
							<a name="Ranking" href="<?php echo base_url(); ?>ranking">Ranking</a>
						</li>

						<li <?php if($menu_active == 'regras') echo "class='active'"; ?>>
							<a name="Regras" href="<?php echo base_url(); ?>regras">Regras</a>
						</li>
						
						<li <?php if($menu_active == 'salas') echo "class='active'"; ?>>
							<a name="Salas" href="<?php echo base_url(); ?>">Salas</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
</div>
<div class="underTopMenu"></div>