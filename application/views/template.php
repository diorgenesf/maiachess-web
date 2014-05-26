<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
    <title><?php if(!isset($title)) echo "Maia Chess"; else echo $title; ?></title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/1140.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/style.css">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>public/imagens/favicon.gif">
<body>
	<?php 
		$this->load->view($menu_view);
		$this->load->view($name_view);
	 ?>
	<footer class="container16">
		<div class="row">
			<div class="column16">
				<p>Desenhado por <a href="http://www.facebook.com/diorgenesf">Diorgenes Ferreira</a><p>
			</div>
		</div>
	</footer>
</body>
</html>