<?php
class Admin_perusahaan extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_user');
		$filter = array('id'=>$this->session->userdata('nim'));
		$this->search_result = $this->m_user->user_company($filter);

		$mhsdata = array('id_perusahaan'=>$this->session->userdata('nim'));
		$this->search_result_mhs = $this->m_user->user_mhs($mhsdata);		
		
		if ($this->session->userdata('nim')=="") {
			redirect('auth');
		}
		elseif ($this->session->userdata('akseslv')!='perusahaan') {
			redirect('auth');		}
		$this->load->helper('text'); 

		}
  
	public function index() {
		$data['id'] = $this->search_result['id'];
		$data['username'] = $this->search_result['nama'];
		$data['email'] = $this->search_result['email'];
		$data['profil_p'] = $this->search_result['photo'];
		$data['title'] = 'Dashboard';
		$data['datacompany'] = 'company/dashboard';

		$this->load->view('company/company', $data);
	}
	public function dataperusahaan(){
		$data['id'] = $this->search_result['id'];
		//$data['nim'] = $this->search_result['nim'];
		$data['username'] = $this->search_result['nama'];
		$data['email'] = $this->search_result['email'];
		$data['alamat'] = $this->search_result['alamat'];
		$data['tglberdiri'] = $this->search_result['tanggal_b'];
		$data['website'] = $this->search_result['website'];
		$data['profil_p'] = $this->search_result['photo'];

		//data mahasiswa yang bekerja di perusahaan ini
		$data['mhs_photo'] = $this->search_result_mhs['photo'];
		$data['mhs_nama'] = $this->search_result_mhs['nama'];
		$data['mhs_nim'] = $this->search_result_mhs['nim'];

		$data['title'] = 'Dashboard | Profil';

		$data['datacompany'] = 'company/profil';

		$this->load->view('company/company', $data);
	}
	public function dataalumni(){
		$data['id'] = $this->search_result['id'];
		$data['username'] = $this->search_result['nama'];
		$data['email'] = $this->search_result['email'];
		$data['profil_p'] = $this->search_result['photo'];

		$data['title'] = 'Dashboard | Data Alumni';
		$data['datacompany'] = 'company/alumni';

		$this->load->view('company/company', $data);

	}

	public function logout() {
		$this->session->unset_userdata('nim');
		$this->session->unset_userdata('akseslv');
		session_destroy();
		redirect('auth');
	}  
}
?>

