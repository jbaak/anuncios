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

	public function categorias() {
		$data = $this->Anuncios_Model->getCategorias();
		#____($data);
		if($data)
		{
			$vars["cat"]= $data;
			$vars["view"]= $this->view("categorias", TRUE);
			$this->render("content", $vars);
		}else
		{
			$this->render("error404");
		}
	}

	public function subcategorias($id) {
		
		$data=$this->Anuncios_Model->getsubcategorias($id);
		#____($data);
		return $data;
		
	}

}
