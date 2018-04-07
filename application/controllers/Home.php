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
		$this->load->model('blog');
		$data['blog_load']=$this->blog->getBlogQueryArray();
		$this->load->view('blog', $data);
	}

	function __construct(){
		parent::__construct();
			$this->load->helper('url');
	}
}