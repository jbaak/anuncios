<?php 
	if(!defined("_access")) {
		die("Error: You don't have permission to access here..."); 
	}
	
?>
<section>
	<div id="content">
	<?php $this->load(isset($view) ? $view : NULL, TRUE); ?>
	</div>
</section>
