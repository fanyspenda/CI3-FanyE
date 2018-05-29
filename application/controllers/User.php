<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->model('user_model');
	}

	public function keAddUser()
	{
		$data_user = $this->session->userdata('datauser');
		if ($data_user['level']==0) {

			$this->session->set_userdata( 'datauser', null );
			$this->session->set_flashdata('tidakBerhak', 'anda Tidak Berhak Masuk ke Halaman Ini! Sesi Berakhir, login sebagai Admin!');
			$this->load->view('v_login');
		}

		else {
			$this->load->view('v_tambahUser');
		}
	}

	public function addUser()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]', 
			array(
				'is_unique' => 'username '.$this->input->post('username').' sudah digunakan'
			)
		);
		$this->form_validation->set_rules('kodepos', 'KodePos', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('confirmPass', 'Konfirmasi Password', 'required|matches[password]');

		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'nama' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'kodepos' => $this->input->post('kodepos'),
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password'))
			);
			$this->user_model->addUser($data);
			redirect('home/blogdatatable');
		}

		$this->load->view('v_tambahUser');

	}

	public function keLogin()
	{
		$this->load->view('v_login');
	}

	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() === FALSE){
            $this->load->view('v_login');
        } else {
        	$username = $this->input->post('username');
		    // Get & encrypt password
		    $password = md5($this->input->post('password'));

		    // Login user
		    $data['user'] = $this->user_model->login($username, $password);

		    foreach ($data['user'] as $key) {
			    if($key!=false){
			        // Buat session
			        $user_data = array(
			            'user_id' => $key['user_id'],
			            'username' => $username,
			            'logged_in' => true,
			            'level' => $key['level']
			    	);


			    	$this->session->set_userdata('datauser', $user_data);

			        // Set message
			        $this->session->set_flashdata('user_loggedin', 'You are now logged in');
		        	redirect('home/blogdatatable');
			    } else {
			        // Set message
			        $this->session->set_flashdata('login_failed', 'Login is invalid');

			        $this->load->view('v_login');
			    }
			}
        }
	}

	public function logout(){
     
        // Unset user data
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');
		$username = '';
        $user_data = array('username' => $username);

		$this->session->set_userdata('datauser', $user_data);

        // Set message
        $this->session->set_flashdata('user_loggedout', 'Anda sudah log out');

        redirect('user/keLogin');
    }

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */