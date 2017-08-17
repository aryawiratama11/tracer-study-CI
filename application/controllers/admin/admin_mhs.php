<?php
session_start();
class Admin_mhs extends CI_Controller {

	public function __construct() {
		parent::__construct();
		
		

		/*
		if ($this->session->userdata('nim')=="") {
			redirect('auth');
			echo "<script>alert('id');history.go(-1);</script>";
		}
		elseif ($this->session->userdata('akseslv')!='mahasiswa') {
			redirect('auth');
			echo "<script>alert('akses');history.go(-1);</script>";
		}
		$this->load->helper('text'); */

		}
  
	public function index() {
		$data1 = array('nim' => $this->session->userdata('nim', TRUE));
		$this->load->model('m_user');
		$hasil1 = $this->m_user->user_mhs($nim);
		if ($hasil1->num_rows() == 1) {
			foreach ($hasil1->result() as $sess) {			
				$sess_data['nim'] = $sess->nim;
				$sess_data['nama'] = $sess->nama;
				$sess_data['alamat'] = $sess->alamat;
				$sess_data['jenkel'] = $sess->jenkel;
				$sess_data['tgllahir'] = $sess->tgllahir;
				$sess_data['nohp'] = $sess->nohp;
				$sess_data['photo'] = $sess->photo;
				$this->session->set_userdata($sess_data);
			}
		}
		$datao['nama'] = $this->session->userdata('nama');
		$this->load->view('v_profil', $datao);
	}

	public function logout() {
		$this->session->unset_userdata('nim');
		$this->session->unset_userdata('akseslv');
		session_destroy();
		redirect('auth');
	}  
}
?>

