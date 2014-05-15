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

			<form name="formCadastro" class="Cadastro" action="<?php echo base_url(); ?>login/cadastro" method="post">
				<input type="hidden" id="nicknamesUsed" value="<?php echo $nicks; ?>" />
				<div class="row">
					<label>NickName*</label>
					<br />
					<input type="text" name="nick" placeholder="Informe seu NickName"/>
				</div>

				<div class="row">
					<label>Nome Completo*</label>
					<br />
					<input type="text" name="nome" placeholder="Informe seu Nome"/>
				</div>	

				<div class="row">
					<label>Email*</label>
					<br />
					<input type="text" name="email" placeholder="Informe seu email"/>
				</div>
							
				
				<div class="row">
					<label>Data Nascimento*</label>
					<br />
					<input type="text" name="dia" placeholder="Dia" id="txtDia"/>
					<select id="sltMes" name="mes">
						<option value="1">Janeiro</option>
						<option value="2">Fevereiro</option>
						<option value="3">Março</option>
						<option value="4">Abril</option>
						<option value="5">Maio</option>
						<option value="6">Junho</option>
						<option value="7">Julho</option>
						<option value="8">Agosto</option>
						<option value="9">Setembro</option>
						<option value="10">Outubro</option>
						<option value="11">Novembro</option>
						<option value="12">Dezembro</option>
					</select>
					<select id="sltAno" name="ano">
						<?php
							for($i=2014;$i>1960;$i--)
							{
								echo "<option value='".$i."'>".$i."</option>";
							}
						?>
					</select>
				</div>

				<div class="row">
					<label>Senha*</label>
					<br />
					<input type="password" name="senha" placeholder="Informe sua Senha"/>
				</div>
								
				<div class="row">
					<label>Repetir Senha*</label>
					<br />
					<input type="password" name="rep-senha" placeholder="Informe a Senha novamente"/>
				</div>		

				<div class="row">
					<input type="submit" class="btn" value="Cadastrar"/>
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

			<form class="Cadastro" name="formEntrar" method="post" action="<?php echo base_url(); ?>login/verifica">
				<div class="row">
					<?php echo $nick_login; ?>
					<br />
					<input type="text" name="nick_login" placeholder="Informe seu NickName"/>
				</div>
				<div class="row">
					<?php echo $senha_login; ?>					
					<br />
					<input type="password" name="senha_login" placeholder="Informe sua Senha"/>
				</div>

				<div class="row">
					<input type="submit" class="btn" value="Entrar"/>
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

			<!--<form class="Cadastro" name="formRedesSociais">-->
			<div class="Cadastro" name="formRedesSociais">
				<div class="row">
					<input type="button" class="btn btn-facebook" value="Facebook"/>
				</div>
				<div class="row">
					<input type="button" class="btn btn-google" value="Google"/>
				</div>
			</div>
			<!--</form>-->
		</div>
	</div>
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>public/js/login.js"></script>