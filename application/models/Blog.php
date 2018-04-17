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

	public function getData($key)
	{
		$this->db->WHERE("id", $key);
		$hasil = $this->db->get('judul');
		return $hasil;
	}


	public function insert($data, $tabel){
		$this->db->insert("blog", $data);
	}

	public function hapus($id)
	{
		$this->db->query("DELETE from blog where id =".$id);
	}

	public function updateWithImage($data){
		$this->db->query("update blog set 
			author='".$data['author']."', date=".$data['date'].",
			title='".$data['title']."', content='".$data['content']."',
			image_file='".$data['image_file']."' where id = '".$data['id']."'");
	}

	public function updateWithoutImage($data)
	{
		$this->db->query("update blog set 
			author='".$data['author']."', date=".$data['date'].",
			title='".$data['title']."', content='".$data['content']."' 
			where id = '".$data['id']."'");	
	}
}
?>