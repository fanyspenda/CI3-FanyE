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

	public function tambahKategori()
	{
		$this->load->helper('form');
		$this->load->view('v_tambahKategori');
	}

	public function lihatKategori()
	{
		$data['dataKategori'] = $this->blog->selectCategory();
		$this->load->view('v_lihatKategori', $data);
	}

	public function keEditKategori()
	{
		$this->load->helper('form');
		$idKat = $this->input->post('edit');
		$data['detailKat'] = $this->blog->getKategoribyID($idKat);
		$this->load->view('v_editKategori', $data);
	}

	public function editKategori()
	{
		$cat_id = $this->input->post('cat_id');
		$cat_name = $this->input->post('cat_name');
		$kategori_lama = $this->input->post('cat_name_old');
		$cat_description = $this->input->post('cat_description');

		$data = array('cat_name' => $cat_name,
					'kategori_lama' => $kategori_lama,
					'cat_description' => $cat_description,
					'cat_id' => $cat_id);

		$this->blog->editKategori($data);
		redirect('home/lihatKategori');
	}

	public function hapusKategori()
	{
		$cat_id = $this->input->post('delete');
		$cat_name = $this->input->post('cat_name');
		$this->blog->deleteCategory($cat_id, $cat_name);
		redirect('home/lihatKategori');
	}

	public function create()
	{
		// Judul Halaman
		$data['page_title'] = 'Buat Kategori Baru';

		// Kita butuh helper dan library berikut
		$this->load->helper('form');
		$this->load->library('form_validation');

		// Form validasi untuk Nama Kategori
		$this->form_validation->set_rules(
			'cat_name',
			'Nama Kategori',
			'required|is_unique[categories.cat_name]',
			array(
				'required' => 'Isi %s donk, males amat.',
				'is_unique' => 'Judul <strong>' . $this->input->post('cat_name') . '</strong> sudah ada bosque.'
			)
		);

		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header');
			$this->load->view('categories/cat_create', $data);
			$this->load->view('templates/footer');
		} else {
			$this->blog->create_category();
			redirect('home/blog');
		}
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
		$data['Kategori'] = $this->blog->selectCategory();
		$this->load->view('blogCreate.php', $data);
	}

	public function tambahGambar()
	{
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$author = $this->input->post('author');
		$isiArtikel = $this->input->post('isi');
		$tanggal = $this->input->post('tanggal');
		$kategori = $this->input->post('kategori');
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
				'nama_kategori' => $kategori,
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
		$data['Kategori'] = $this->blog->selectCategory();
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
		$kategori = $this->input->post('kategori');
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
				'nama_kategori' => $kategori,
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
				'nama_kategori' => $kategori,
				'content' => $isiArtikel);

			$this->blog->updateWithoutImage($data);
			redirect('home/blog');
		}
	}

	public function pagination()
	{
		$limit_per_page = 2;

        // URI segment untuk mendeteksi "halaman ke berapa" dari URL
        $start_index = ( $this->uri->segment(3) ) ? $this->uri->segment(3) : 0;

        // Dapatkan jumlah data
        $total_records = $this->blog->get_total();

        if ($total_records > 0) {
		    // Dapatkan data pada halaman yg dituju
		    $data["all_artikel"] = $this->blog->get_all_artikel($limit_per_page, $start_index);
		    
		    // Konfigurasi pagination
		    $config['base_url'] = base_url() . 'home/pagination';
		    $config['total_rows'] = $total_records;
		    $config['per_page'] = $limit_per_page;
		    $config["uri_segment"] = 3;
		    
		    $this->pagination->initialize($config);
		    
		    // Buat link pagination
		    $data["links"] = $this->pagination->create_links();
		    $this->load->view('blog', $data);
		}

	}

	function __construct(){
		parent::__construct();
			$this->load->helper('url');
			$this->load->model('blog');
	}
}