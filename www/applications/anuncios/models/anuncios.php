<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

class Anuncios_Model extends ZP_Model {
	
	public function __construct() {
		$this->Db = $this->db();
		
		$this->helpers();
	
		$this->table = "categorias";

		
		
	}

	public function getCategorias() {
		$data = $this->Db->query("select * from zan_subcategorias JOIN zan_categorias ON zan_categorias.id_categoria = zan_subcategorias.id_categoria ");
		#$data= $this->Db->findAll($this->table);
		#____($data);
		return $data;
	}

	public function getsubcategorias($id)
	{
		$this->Db->select("*");
 		$this->Db->from("subcategorias");
		$this->Db->where("id_categoria = $id");
 
 		//SELECT Username FROM zan_users WHERE Email = 'contact@milkzoft.com'
 		$data = $this->Db->get();

 		return $data;
	}
	
}