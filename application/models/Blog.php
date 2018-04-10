<?php
defined('BASEPATH') OR exit('No Direct script access allowed');

class Blog extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function getBlogQueryArray(){
		$query = $this->db->query("select * from blog");
		return $query->result_array();
	}

	public function getByID($id)
	{
		return $this->db->query(" SELECT * FROM blog WHERE id='".$id."' ")->row();
	}
}
?>