

<?php for($j=0; $j<sizeof($cat); $j++)
{
?>
	
	<h2><?php echo $cat[$j]["categoria"]?></h2>

	<?php 
	$sub =  $this->execute("Anuncios_Controller", "subcategorias",array($cat[$j]["id_categoria"]));
	#____($sub);
		for($i=0; $i<sizeof($sub); $i++)
		{
			?>
				<li><?php  echo $sub[$i]["subcategoria"]?></li><br>
				
			<?php
		}
	 
}
?>