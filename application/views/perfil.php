<div id="Perfil">
	<div class="container16">

		<div class="row">			
			<div class="SubTituloContent">
				<div class="column6">
					<img src="<?php echo base_url(); ?>public/imagens/linha.gif"/> 
				</div>
				
				<h3 class="column4">Perfil</h3> 
				
				<div class="column6">
					<img src="<?php echo base_url(); ?>public/imagens/linha.gif"/> 
				</div>
			</div>

			<div class="PerfilContent">
				<div class="column9 prefix7 avatar2">
					<img id="Avatar" src="<?php if($this->session->userdata('avatar')==''){echo base_url().'public/avatar/default.png';} else{echo base_url().'public/avatar/'.$this->session->userdata('avatar');} ?>" alt="Avatar">
					<img id="ChangeAvatarLogin" src="<?php echo base_url(); ?>public/imagens/loading.gif" >
				</div>

				<div class="column9 prefix7 no-top">
					<div class="ContentFileButton">
						<span class="btn btn-file">Alterar
							<input id="fileToUpload" type="file" name="fileToUpload" accept="image/*" onchange="return ajaxFileUpload();">
						</span>
					</div>
				</div>
			</div>
		</div>

		<div class="row">			
			<div class="SubTituloContent">
				<div class="column6">
					<img src="<?php echo base_url(); ?>public/imagens/linha.gif"/> 
				</div>
				<h3 class="column4">Nome</h3> 
				<div class="column6">
					<img src="<?php echo base_url(); ?>public/imagens/linha.gif"/> 
				</div>
			</div>

			<div class="PerfilContent">
				<form action="<?php echo base_url(); ?>perfil/ChangeNome" onsubmit="return AlterarDados(this,'nome');" method="get">
				
					<div class="column12 prefix4">
						<input type="text" name="nome" value="<?php echo $this->session->userdata('nome'); ?>">
						<input type="submit" class="btn" value="Alterar">
					</div>
				</form>
			</div>
		</div>

		
		<div class="row">			
			<div class="SubTituloContent">
				<div class="column6">
					<img src="<?php echo base_url(); ?>public/imagens/linha.gif"/> 
				</div>
				<h3 class="column4">Email</h3> 
				<div class="column6">
					<img src="<?php echo base_url(); ?>public/imagens/linha.gif"/> 
				</div>
			</div>

			<div class="PerfilContent">
				<form action="<?php echo base_url(); ?>perfil/ChangeEmail" onsubmit="return AlterarDados(this,'email');" method="get">
					<div class="column12 prefix4">
						<input type="text" name="email" value="<?php echo $this->session->userdata('email'); ?>">
						<input type="submit" class="btn" value="Alterar">
					</div>
				</form>
			</div>
		</div>

		
		<div class="row">			
			<div class="SubTituloContent">
				<div class="column6">
					<img src="<?php echo base_url(); ?>public/imagens/linha.gif"/> 
				</div>
				<h3 class="column4">Pais</h3> 
				<div class="column6">
					<img src="<?php echo base_url(); ?>public/imagens/linha.gif"/> 
				</div>
			</div>

			<div class="PerfilContent">
				<form action="<?php echo base_url(); ?>perfil/ChangePais" onsubmit="return AlterarDados(this,'pais');" method="get">
				
					<div class="column12 prefix4">
						<input type="text" name="pais" value="<?php echo $this->session->userdata('pais'); ?>">
						<input type="submit" class="btn" value="Alterar">
					</div>
				</form>
			</div>
		</div>

		
		<div class="row">			
			<div class="SubTituloContent">
				<div class="column6">
					<img src="<?php echo base_url(); ?>public/imagens/linha.gif"/> 
				</div>
				<h3 class="column4">Cidade</h3> 
				<div class="column6">
					<img src="<?php echo base_url(); ?>public/imagens/linha.gif"/> 
				</div>
			</div>

			<div class="PerfilContent">
				<form action="<?php echo base_url(); ?>perfil/ChangeCidade" onsubmit="return AlterarDados(this,'cidade');" method="get">
				
					<div class="column12 prefix4">
						<input type="text" name="cidade" value="<?php echo $this->session->userdata('cidade'); ?>">
						<input type="submit" class="btn" value="Alterar">
					</div>
				</form>
			</div>
		</div>

		
		<div class="row">			
			<div class="SubTituloContent">
				<div class="column6">
					<img src="<?php echo base_url(); ?>public/imagens/linha.gif"/> 
				</div>
				<h3 class="column4">Sexo</h3> 
				<div class="column6">
					<img src="<?php echo base_url(); ?>public/imagens/linha.gif"/> 
				</div>
			</div>

			<div class="PerfilContent">
				<form action="<?php echo base_url(); ?>perfil/ChangeSexo" onsubmit="return AlterarDados(this,'sexo');" method="get">				
					<div class="column12 prefix4">
						<select name="sexo" class="slt-large">
							<option value="m" <?php if($this->session->userdata('sexo')=='m') echo "selected='selected'"?>>Masculino</option>
							<option value="f" <?php if($this->session->userdata('sexo')=='f') echo "selected='selected'"?>>Feminino</option>
						</select>
						<input type="submit" class="btn" value="Alterar">
					</div>
				</form>
			</div>
		</div>
		
		<div class="row">			
			<div class="SubTituloContent">
				<div class="column6">
					<img src="<?php echo base_url(); ?>public/imagens/linha.gif"/> 
				</div>
				<h3 class="column4">Nascimento</h3> 
				<div class="column6">
					<img src="<?php echo base_url(); ?>public/imagens/linha.gif"/> 
				</div>
			</div>

			<div class="PerfilContent nascimento">
				<form action="<?php echo base_url(); ?>perfil/ChangeNascimento" onsubmit="return AlterarDados(this,'nascimento');" method="get">
					<div class="column12 prefix4">
						
						<input type="text" name="dia" value="<?php echo $this->session->userdata('nasc_dia'); ?>">

						<select name="mes">
							<option value="1" <?php if($this->session->userdata('nasc_mes')=="1") echo "selected='selected'"; ?> >Janeiro</option>
							<option value="2"  <?php if($this->session->userdata('nasc_mes')=="2") echo "selected='selected'"; ?> >Fevereiro</option>
							<option value="3"  <?php if($this->session->userdata('nasc_mes')=="3") echo "selected='selected'"; ?> >Março</option>
							<option value="4"  <?php if($this->session->userdata('nasc_mes')=="4") echo "selected='selected'"; ?> >Abril</option>
							<option value="5"  <?php if($this->session->userdata('nasc_mes')=="5") echo "selected='selected'"; ?> >Maio</option>
							<option value="6"  <?php if($this->session->userdata('nasc_mes')=="6") echo "selected='selected'"; ?> >Junho</option>
							<option value="7"  <?php if($this->session->userdata('nasc_mes')=="7") echo "selected='selected'"; ?> >Julho</option>
							<option value="8"  <?php if($this->session->userdata('nasc_mes')=="8") echo "selected='selected'"; ?> >Agosto</option>
							<option value="9"  <?php if($this->session->userdata('nasc_mes')=="9") echo "selected='selected'"; ?> >Setembro</option>
							<option value="10"  <?php if($this->session->userdata('nasc_mes')=="10") echo "selected='selected'"; ?> >Outubro</option>
							<option value="11"  <?php if($this->session->userdata('nasc_mes')=="11") echo "selected='selected'"; ?> >Novembro</option>
							<option value="12"  <?php if($this->session->userdata('nasc_mes')=="12") echo "selected='selected'"; ?> >Dezembro</option>
						</select>

						<select name="ano">
							<?php
								for($i=2014;$i>1960;$i--)
								{
									echo "<option value='".$i."'";
									if($this->session->userdata('nasc_ano')==$i)
									{
										echo " selected='selected'";
									} 
									echo ">".$i."</option>";
								}
							?>
						</select>

						<input type="submit" class="btn" value="Alterar">
					</div>
				</form>
			</div>
		</div>

		<div class="row">			
			<div class="SubTituloContent">
				<div class="column6">
					<img src="<?php echo base_url(); ?>public/imagens/linha.gif"/> 
				</div>
				<h3 class="column4">Senha</h3> 
				<div class="column6">
					<img src="<?php echo base_url(); ?>public/imagens/linha.gif"/> 
				</div>
			</div>

			<div class="PerfilContent">
				<form action="<?php echo base_url(); ?>perfil/ChangePassword" onsubmit="return CheckPasswords(this);" method="get">
					
					<div class="column12 prefix4">
						<input type="password" name="password">
					</div>
					<div class="column12 prefix4">
						<input type="password" name="passwordToCheck">
						<input type="submit" class="btn" value="Alterar">
					</div>
				</form>
			</div>
		</div>

		<div class="row">			
			<div class="SubTituloContent">
				<div class="column6">
					<img src="<?php echo base_url(); ?>public/imagens/linha.gif"/> 
				</div>
				<h3 class="column4">Desativar</h3> 
				<div class="column6">
					<img src="<?php echo base_url(); ?>public/imagens/linha.gif"/> 
				</div>
			</div>

			<div class="PerfilContent">
				<form action="<?php echo base_url(); ?>perfil/DeleteAccount" onsubmit="return AlterarDados(this,'desativar');" method="get">
					<div class="column9 prefix7">
						<input type="submit" class="btn" value="Desativar Conta">
					</div>
				</form>
			</div>
		</div>
		
	</div>
</div>

<div class="MyModal" id="MyModal">
	<div class="backgroundModal"></div>
	<div class="contentModal">
		<div class="headModal">
			<div class="titleModal" id="titleModal"><h3>Informações Perfil</h3></div>
			<div class="CloseModalContent"><a class="CloseModal" href="">&times;</a></div>
		</div>
		<div class="bodyModal" id="bodyModal">teste</div>
	</div>
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/ajaxfileupload.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/modal.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/perfil.js"></script>