<div class="bg-logado">
	<div class="container16" id="Salas">
		<div class="column4 box-transparent-strong user-information">
		
			<figure class="avatar">
				<div class="row">
					<img src="<?php if($this->session->userdata('avatar')==''){echo base_url().'public/avatar/default.png';} else{echo base_url().'public/avatar/'.$this->session->userdata('avatar');} ?>" alt="Avatar">
				</div>
				<div class="row">
					<figcaption><?php echo $this->session->userdata('nome'); ?></figcaption>
				</div>
			</figure>
			

			<div class="row points">
				<figure class="vitorias">
					<img src="<?php echo base_url().'public/imagens/vitorias.png'; ?>" alt="Vitorias">
					<figcaption><?php echo $this->session->userdata('vitorias'); ?> Vitórias</figcaption>
				</figure>
			</div>

			<div class="row points">
				<figure class="derrotas">
					<img src="<?php echo base_url().'public/imagens/derrotas.png'; ?>" alt="Derrotas">
					<figcaption><?php echo $this->session->userdata('derrotas'); ?> Derrotas</figcaption>
				</figure>
			</div>

			<fieldset class="row box-online">
				<legend>
					<img src="<?php echo base_url().'public/imagens/linha.gif'; ?>">
					Online
					<img src="<?php echo base_url().'public/imagens/linha.gif'; ?>">
				</legend>
				<div class="persons">
					<p class="line"><img src="<?php echo base_url().'public/imagens/avatar-online.png'; ?>"><a href="">fulano</a></p>
					<p class="line"><img src="<?php echo base_url().'public/imagens/avatar-online.png'; ?>"><a href="">fulano</a></p>
					<p class="line"><img src="<?php echo base_url().'public/imagens/avatar-online.png'; ?>"><a href="">fulano</a></p>
					<p class="line"><img src="<?php echo base_url().'public/imagens/avatar-online.png'; ?>"><a href="">fulano</a></p>
					<p class="line"><img src="<?php echo base_url().'public/imagens/avatar-online.png'; ?>"><a href="">fulano</a></p>
					<p class="line"><img src="<?php echo base_url().'public/imagens/avatar-online.png'; ?>"><a href="">fulano</a></p>
					<p class="line"><img src="<?php echo base_url().'public/imagens/avatar-online.png'; ?>"><a href="">fulano</a></p>
					<p class="line"><img src="<?php echo base_url().'public/imagens/avatar-online.png'; ?>"><a href="">fulano</a></p>
					<p class="line"><img src="<?php echo base_url().'public/imagens/avatar-online.png'; ?>"><a href="">fulano</a></p>
					<p class="line"><img src="<?php echo base_url().'public/imagens/avatar-online.png'; ?>"><a href="">fulano</a></p>
					<p class="line"><img src="<?php echo base_url().'public/imagens/avatar-online.png'; ?>"><a href="">fulano</a></p>
					<p class="line"><img src="<?php echo base_url().'public/imagens/avatar-online.png'; ?>"><a href="">fulano</a></p>
					<p class="line"><img src="<?php echo base_url().'public/imagens/avatar-online.png'; ?>"><a href="">fulano</a></p>
					<p class="line"><img src="<?php echo base_url().'public/imagens/avatar-online.png'; ?>"><a href="">fulano</a></p>
					<p class="line"><img src="<?php echo base_url().'public/imagens/avatar-online.png'; ?>"><a href="">fulano</a></p>
					<p class="line"><img src="<?php echo base_url().'public/imagens/avatar-online.png'; ?>"><a href="">fulano</a></p>
					<p class="line"><img src="<?php echo base_url().'public/imagens/avatar-online.png'; ?>"><a href="">fulano</a></p>
					<p class="line"><img src="<?php echo base_url().'public/imagens/avatar-online.png'; ?>"><a href="">fulano</a></p>
					<p class="line"><img src="<?php echo base_url().'public/imagens/avatar-online.png'; ?>"><a href="">fulano</a></p>
					<p class="line"><img src="<?php echo base_url().'public/imagens/avatar-online.png'; ?>"><a href="">fulano</a></p>
					<p class="line"><img src="<?php echo base_url().'public/imagens/avatar-online.png'; ?>"><a href="">fulano</a></p>
					<p class="line"><img src="<?php echo base_url().'public/imagens/avatar-online.png'; ?>"><a href="">fulano</a></p>
				</div>
			</fieldset>

		</div>

		<div class="column12 box-transparent-strong game-container">
			
			<div class="row">
				<a href='' id="sala-1">
					<figure>
						<img src=" <?php echo base_url(); ?>public/imagens/sala.gif" />
						<figcaption>Sala 1</figcaption>
					</figure>
				</a>

				<a href='' id="sala-2">
					<figure>
						<img src=" <?php echo base_url(); ?>public/imagens/sala.gif" />
						<figcaption>Sala 2</figcaption>
					</figure>
				</a>

				<a href='' id="sala-3">
					<figure>
						<img src=" <?php echo base_url(); ?>public/imagens/sala.gif" />
						<figcaption>Sala 3</figcaption>
					</figure>
				</a>

				<a href='' id="sala-4">
					<figure>
						<img src=" <?php echo base_url(); ?>public/imagens/sala.gif" />
						<figcaption>Sala 4</figcaption>
					</figure>
				</a>
			</div>



			<div class="row">
				<a href='' id="sala-5">
					<figure>
						<img src=" <?php echo base_url(); ?>public/imagens/sala.gif" />
						<figcaption>Sala 5</figcaption>
					</figure>
				</a>

				<a href='' id="sala-6">
					<figure>
						<img src=" <?php echo base_url(); ?>public/imagens/sala.gif" />
						<figcaption>Sala 6</figcaption>
					</figure>
				</a>

				<a href='' id="sala-7">
					<figure>
						<img src=" <?php echo base_url(); ?>public/imagens/sala.gif" />
						<figcaption>Sala 7</figcaption>
					</figure>
				</a>

				<a href='' id="sala-8">
					<figure>
						<img src="<?php echo base_url(); ?>public/imagens/sala.gif" />
						<figcaption>Sala 8</figcaption>
					</figure>
				</a>
			</div>
		</div>

		<div class="column12 box-transparent-strong chat-container">
			<div class="row chat">
			</div>

			<div class="row send-message">
				<a href=""><img src="<?php echo base_url(); ?>public/imagens/colorpicker.png" /></a>
				<input type="text">
				<input type="button" class="btn-normal" value="Enviar">
			</div>
		</div>

	</div>
</div>