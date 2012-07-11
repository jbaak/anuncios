<?php
/**
 * Access from index.php:
 */


class Anuncios_Controller extends ZP_Controller {
	
	public function __construct() {
		$this->app("anuncios");
		
		$this->Templates = $this->core("Templates");

		$this->Templates->theme();

		$this->Anuncios_Model = $this->model("Anuncios_Model");
	}
	
	public function index() {	
		$vars["message"] = __(_("hola desde categorias"));
		$vars["view"]	 = $this->view("categorias", TRUE);
		
		$this->render("content", $vars);
	}

	public function test($param1 = "Hola", $param2 = "Adios") {
		print "New dispatcher it's works fine: $param1, $param2";
	}

	public function show($message) {
		$vars["message"] = $message;
		$vars["view"]	 = $this->view("show", TRUE);
		
		$this->render("content", $vars);
		#$this->view("show", $vars);
	}

}
