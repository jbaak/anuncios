

<?php

if(is_array($cat))
{
	 for($j=0; $j<sizeof($cat); $j++)
	{
		

	?>
		
		<h2><?php echo $cat[$j]["categoria"];?></h2>

		<?php 
		#$sub =  $this->execute("Anuncios_Controller", "subcategorias",array($cat[$j]["id_categoria"]));
		#____($sub);
		#	for($i=0; $i<sizeof($sub); $i++)
		#	{
				?>
					<?php # echo $sub[$i]["subcategoria"]?>
					
				<?php
			#}

		 ?>
		 <h3><?php echo $cat[$j]["subcategoria"]?></h3>
		 <?php
	}

}
?>