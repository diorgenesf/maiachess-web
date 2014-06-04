<div id="Duvidas">
	<div class="container16"> 
		<div class="box-transparent-light box">

			<div class="row">			
				<div class="SubTituloContent">
					<div class="column6">
						<img src="<?php echo base_url(); ?>public/imagens/linha.gif"/> 
					</div>
				
					<h3 class="column4">Dúvidas</h3> 
				
					<div class="column6">
						<img src="<?php echo base_url(); ?>public/imagens/linha.gif"/> 
					</div>
				</div>
			</div>
		
			<div class="conteudo"><h4>-Onde estou?</h4><br /><h4>-Estou cadastrado?</h4><br /><h4>-Como desafiar alguém?</h4><br /><h4>-Como desativar minha conta?</h4></div>
		
			<div class="row">			
				<div class="SubTituloContent">
					<div class="column6">
						<img src="<?php echo base_url(); ?>public/imagens/linha.gif"/> 
					</div>
				
					<h4 class="column4">Enviar dúvida</h4> 
				
					<div class="column6">
						<img src="<?php echo base_url(); ?>public/imagens/linha.gif"/> 
					</div>
				</div>
			</div>

			<div class="row">
				<div class="column6">
					<img src="<?php echo base_url(); ?>public/imagens/imgFinal.png"/> 
				</div>
				<div class="column10">
					<form name="formDuvidas" class="Duvidas"  method="post">
						
						<div class="row">
							<label>Nome</label>
							<br />
							<input type="text" name="nome" />
						</div>

						<div class="row">
							<label>Email</label>
							<br />
							<input type="text" name="email"/>
						</div>	

						<div class="row">
							<label>Mensagem</label>
							<br />
							<textarea></textarea/>
						</div>
						
						<div class="row">
							<input type="submit" class="btn" value="Enviar"/>
						</div> 
					</form>
				</div>
        	</div>
		</div>
	</div>
</div>