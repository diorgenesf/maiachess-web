<div id="Ranking">
	<div class="container16">
		<div class="box-transparent-light box">
			<div class="half row">
				<div class="SubTituloContent">
					<div class="column6">
						<img src="<?php echo base_url(); ?>public/imagens/linha.gif"/> 
					</div>
					
					<h3 class="column4">Ranking</h3> 
					
					<div class="column6">
						<img src="<?php echo base_url(); ?>public/imagens/linha.gif"/> 
					</div>
				</div>
			</div>	
			
			<div class="row lineContentRankedUser">

				<?php 
					for($i=0;$i<5;$i++)
					{
				?>
					<div class="column3 ContentRankedUser box-transparent-black">
						<div class="row title">
							<div class="line">
								<img src="<?php echo base_url(); ?>public/imagens/linha.gif"/> 
							</div>
							
							<div class="position"><?php echo $i+1; ?>º Lugar</div> 
							
							<div class="line">
								<img src="<?php echo base_url(); ?>public/imagens/linha.gif"/> 
							</div>	
						</div>

						<div class="row vitorias">
							<?php echo $ranking[$i]->vitorias; ?> vitórias
						</div>

						<div class="row avatar">
							<?php 
								$path = base_url()."public/avatar/";
								$name_img = $ranking[$i]->avatar=='' ? "default.png" : $ranking[$i]->avatar;
							?>
							<img src="<?php echo $path.$name_img; ?> ">
						</div>

						<div class="row nome">
							<?php echo $ranking[$i]->nome; ?>
						</div>	
					</div>
				<?php 
					}
				?>
			</div>

			<div class="row lineContentRankedUser">
				<?php 
					for($i=5;$i<10;$i++)
					{
				?>
					<div class="column3 ContentRankedUser box-transparent-black">
						<div class="row title">
							<div class="line">
								<img src="<?php echo base_url(); ?>public/imagens/linha.gif"/> 
							</div>
							
							<div class="position"><?php echo $i+1; ?>º Lugar</div> 
							
							<div class="line">
								<img src="<?php echo base_url(); ?>public/imagens/linha.gif"/> 
							</div>	
						</div>

						<div class="row vitorias">
							<?php echo $ranking[$i]->vitorias; ?> vitórias
						</div>

						<div class="row avatar">
							<?php 
								$path = base_url()."public/avatar/";
								$name_img = $ranking[$i]->avatar=='' ? "default.png" : $ranking[$i]->avatar;
							?>
							<img src="<?php echo $path.$name_img; ?> ">
						</div>

						<div class="row nome">
							<?php echo $ranking[$i]->nome; ?>
						</div>	
					</div>
				<?php 
					}
				?>
			</div>
			
		</div>
	</div>
</div>