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

	public function uploadBaru()
	{
		$this->load->helper('form');
		$this->load->view('blogCreate.php');
	}

	public function tambahGambar()
	{
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$author = $this->input->post('author');
		$isiArtikel = $this->input->post('isi');
		$tanggal = $this->input->post('tanggal');
		$gambar = $_FILES['gambar']['name'];

		if($gambar=''){}else {
			$config['upload_path'] = './assets/imgDatabase';
			$config['allowed_types'] = 'gif|jpg|png';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('gambar')){
				$error = array('error' => $this->upload->display_errors());
			}
			else{
				$gambar = $this->upload->data('file_name');
			}

			$data = array(
				'id' => $id,
				'title' => $judul,
				'author' =>$author,
				'date' => $tanggal,
				'content' => $isiArtikel,
				'image_file'=>$gambar);

			$this->blog->insert($data, "blog");
			redirect('home/blog');
		}
	}

	public function hapus()
	{
		$namaGambar = $this->input->post('namaGambar');
		$id = $this->input->post('id');
		unlink('assets/imgDatabase/'.$namaGambar);
		$this->blog->hapus($id);
		redirect('home/blog');
	}

	public function formEdit(){
		$id = $this->input->post('id');
		$data['key'] = $this->blog->getByID($id);
		$this->load->helper('form');
		$this->load->view('blogEdit', $data);
	}

	public function edit()
	{
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$author = $this->input->post('author');
		$isiArtikel = $this->input->post('isi');
		$tanggal = $this->input->post('tanggal');
		$radioGambar = $this->input->post('radioGambarBaru');
		$gambarLama = $this->input->post('gambarLama');
		$gambarBaru = $_FILES['gambarBaru']['name'];

		if($radioGambar=='ya'){
			$config['upload_path'] = './assets/imgDatabase';
			$config['allowed_types'] = 'gif|jpg|png';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload("gambarBaru")){
				$error = array('error' => $this->upload->display_errors());
			}
			else{
				$gambarBaru = $this->upload->data('file_name');
			}
			$data = array(
				'id' => $id,
				'title' => $judul,
				'author' =>$author,
				'date' => $tanggal,
				'content' => $isiArtikel,
				'image_file'=>$gambarBaru);

			$this->blog->updateWithImage($data);
			unlink('assets/imgDatabase/'.$gambarLama);
			redirect('home/blog');
		}
		elseif ($radioGambar=='tidak') {
			$data = array(
				'id' => $id,
				'title' => $judul,
				'author' =>$author,
				'date' => $tanggal,
				'content' => $isiArtikel);

			$this->blog->updateWithoutImage($data);
			redirect('home/blog');
		}
	}

	function __construct(){
		parent::__construct();
			$this->load->helper('url');
			$this->load->model('blog');
	}
}