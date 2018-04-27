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
			author='".$data['author']."', date='".$data['date']."',
			title='".$data['title']."', content='".$data['content']."', nama_kategori = '".$data['nama_kategori']."',
			image_file='".$data['image_file']."' where id = '".$data['id']."'");
	}

	public function create_category()
    {
        $data = array(
            'cat_name'          => $this->input->post('cat_name'),
            'cat_description'   => $this->input->post('cat_description')
        );

        return $this->db->insert('categories', $data);
    }

    public function getKategoribyID($idKat)
    {
    	$kategori = $this->db->query('SELECT * from categories where cat_id = '.$idKat);
    	return $kategori->result_array();
    }

    public function editKategori($data)
    {
    	$this->db->query("UPDATE categories set cat_name = '".$data['cat_name']."',
    					cat_description = '".$data['cat_description']."' where cat_id = ".$data['cat_id']);
    	$this->db->query("UPDATE blog set nama_kategori = '".$data['cat_name']."' where nama_kategori = '".$data['kategori_lama']."'");
    }

    public function deleteCategory($cat_id, $cat_name)
    {
    	$this->db->query("DELETE from categories where cat_id = ".$cat_id);
    	$this->db->query("UPDATE blog set nama_kategori = 'kategori Terhapus' where nama_kategori = '".$cat_name."'");
    }

    public function selectCategory()
    {
    	$allCategories = $this->db->query("select * from categories");
    	return $allCategories->result_array();
    }

	public function updateWithoutImage($data)
	{
		$this->db->query("update blog set 
			author='".$data['author']."', date='".$data['date']."',
			title='".$data['title']."', content='".$data['content']."', nama_kategori = '".$data['nama_kategori']."'
			where id = '".$data['id']."'");	
	}
}
?>