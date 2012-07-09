<?php 
	if(!defined("_access")) {
		die("Error: You don't have permission to access here..."); 
	}
	
?>
<!DOCTYPE html>
<html lang="<?php print get("webLang"); ?>">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1 ">
		<title><?php print $this->getTitle(); ?></title>
		

		<link href="<?php print $this->themePath; ?>/css/style.css" rel="stylesheet">
		<link href="<?php print $this->themePath; ?>/css/mediaqueries.css" rel="stylesheet">
		<?php print $this->getCSS(); ?>
		
		<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
			<!--[if lt IE 9]>
			  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
		<!-- Le styles -->
	</head>

	<body>

		<header>
			<div class="wrap"><!-- inicia wrap-->
				<div id="logo">
					<a herf="#">Anuncios Clasificados</a>
				</div>

				<nav>
					<ul>
						<li><a href="#" title="">HOME</a></li>
						<li><a href="#" title="">CONTACTO</a></li>
						<li><a href="#" title="">PORTAFOLIO</a></li>
						<li><a href="#" title="">HOME</a></li>
					</ul>
				</nav>
			</div><!-- fin wrap-->
		</header>