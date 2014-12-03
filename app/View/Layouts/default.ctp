<!DOCTYPE html>
<html>
	<body>
		<?php 
		echo $this->Html->charset();
		echo $this->Html->css(array('bootstrap.css','bootstrap-theme.css'));
		echo $this->Html->script(array('jquery-1.11.1.min.js','bootstrap.min.js'));
		echo $this->element('header', array());
		?>
		<div id="wrap" style='padding-top:60px;'>
			<div class="container">
				<?php
				echo $this->fetch('content');
				?>
			</div>
		</div>
		<?php
		echo $this->element('footer', array());
		?>
	</body>
</html>