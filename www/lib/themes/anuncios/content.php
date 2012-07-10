<?php 
	if(!defined("_access")) {
		die("Error: You don't have permission to access here..."); 
	}
	
?>
<div class="wrap"><!-- inicia wrap-->
	<section>
		<div id="content">
		<?php $this->load(isset($view) ? $view : NULL, TRUE); ?>
		</div>
	</section>
