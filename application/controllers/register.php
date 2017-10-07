<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('m_user');
	}

	public function index() {
		$this->load->view('v_register');
	}
	public function register() {
		$some = substr(str_shuffle(str_repeat("0123456789", 2)), 0, 8);
		$email = $this->input->post('email');
		$add['id'] = $some;
		$add['nama'] = $this->input->post('nama');
		$add['email'] = $this->input->post('email');
		$add['notlp'] = $this->input->post('notlp');
		$add['alamat'] = $this->input->post('alamat');
		$add['tanggal_b'] = $this->input->post('tanggal_b');
		$add['website'] = $this->input->post('alamat_web');

		$auth['nim'] = $some;
		$auth['email'] = $this->input->post('email');
		$auth['password'] = md5($this->input->post('password'));
		$auth['akseslv'] = "perusahaan";
		
		if ($this->m_user->cek_email_exist($email)) {
			echo "<script>alert('Email sudah digunakan!');history.go(-1);</script>";
		} else{
			$hasil = $this->m_user->create_company($add);
			$this->m_user->create_auth($auth);
			redirect(base_url()."auth");
		}

		// if ($hasil = $this->m_user->create_company($add) && $hasil = $this->m_user->create_auth($auth) ) {
		// 	$this->session->set_flashdata('success', 'User successfully generated.');
		// 	redirect(base_url()."auth");
		// }
		// else {
		// 	$this->session->set_flashdata('fail', 'User generate failed! Please check your input before submitting.');
		// 	redirect(base_url());
		// }

	}	

}