<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('biodata');
		$data['biodata_array']=$this->biodata->getBiodataQueryArray();
		$data['biodata_object']=$this->biodata->getBiodataQueryObject();
		$data['biodatabuilder_array']=$this->biodata->getBiodataBuilderArray();
		$data['biodatabuilder_object']=$this->biodata->getBiodataBuilderObject();

		$this->load->view('home', $data);
	}
		public function about()
	{
		$this->load->view('about');
	}
		public function contact()
	{
		$this->load->view('contact');
	}
		public function news()
	{
		$this->load->view('news');
	}

		public function blog()
	{
		$data['blog_load']=$this->blog->getBlogQueryArray();
		$this->load->view('blog', $data);
	}

	public function detail()
	{
		$cek = $this->input->post('id');
		$data['key'] = $this->blog->getByID($cek);
		$this->load->view('blog_details', $data);
		/*echo json_encode($data);*/
	}

	public function tes()
	{
		$this->load->view('blog_details');
	}

	public function uploadBaru()
	{
		$data['content']	='blogCreate.php';
		$this->load->view('blogCreate.php',$data);
	}

	public function tambah()
	{
		$key = $this->input->post("id");
		$dataBaru['id'] = $this->input->post("id");
		$dataBaru['author'] = $this->input->post("author");
		$dataBaru['date'] = $this->input->post("tanggal");
		$dataBaru['title'] = $this->input->post("judul");
		$dataBaru['content'] = $this->input->post("isi");

		$query = $this->Blog->getData($key);
		$query = $this->db->get("judul");

		if($query->num_rows()>0){
			$this->Blog->getUpdate($key, $dataBaru);
		}else{
			$this->Blog->getInsert($dataBaru);
		}
	}

	function __construct(){
		parent::__construct();
			$this->load->helper('url');
			$this->load->model('blog');
	}
}