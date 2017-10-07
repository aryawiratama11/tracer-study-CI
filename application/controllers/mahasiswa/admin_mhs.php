<?php
//session_start();
class Admin_mhs extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_user');
		$filter = array('nim'=>$this->session->userdata('nim'));
		$this->search_result = $this->m_user->user_mhs($filter);		
		
		if ($this->session->userdata('nim')=="") {
			redirect('auth');
		}
		elseif ($this->session->userdata('akseslv')!='mahasiswa') {
			redirect('auth');		}
			$this->load->helper('text'); 

		}

		public function index() {
			$data['nim'] = $this->search_result['nim'];
			$data['username'] = $this->search_result['nama'];
			$data['profil_p'] = $this->search_result['photo'];
			$data['datauser'] = 'dashboard/mhs_dashboard';
			$data['title'] = 'Dashboard';

			$data['class1'] = 'active';
			$data['class2'] = 'inactive';
			$data['class3'] = 'inactive';
			$data['class4'] = 'inactive';


			$this->load->view('dashboard/mhs', $data);
		}
		public function user() {
			$data['nim'] = $this->search_result['nim'];
			$data['username'] = $this->search_result['nama'];
			$data['email'] = $this->search_result['email'];
			$data['nik'] = $this->search_result['nik'];
			$data['id_perusahaan'] = $this->search_result['id_perusahaan'];
			$data['alamat'] = $this->search_result['alamat'];
			$data['profil_p'] = $this->search_result['photo'];
			$data['gender'] = $this->search_result['gender'];
			$data['tgllahir'] = $this->search_result['tgllahir'];
			$data['jurusan'] = $this->search_result['jurusan'];
			$data['nohp'] = $this->search_result['nohp'];
			$data['telephon'] = $this->search_result['telephon'];
			$data['agama'] = $this->search_result['agama'];
			$data['warganegara'] = $this->search_result['warganegara'];
			$data['kodepos'] = $this->search_result['kodepos'];
			$data['kabupaten'] = $this->search_result['kabupaten'];
			$data['profinsi'] = $this->search_result['profinsi'];
			$data['judul_ta_sk'] = $this->search_result['judul_ta_sk'];
			$data['penguasaan_bahasa'] = $this->search_result['penguasaan_bahasa'];
			$data['level_bahasa'] = $this->search_result['level_bahasa'];
			$data['tahun_lulus'] = $this->search_result['tahun_lulus'];

			
			$data['datauser'] = 'dashboard/mhs_profil';
			$data['title'] = 'Dashboard | Profil Alumni';

			$data['class1'] = 'inactive';
			$data['class2'] = 'active';
			$data['class3'] = 'inactive';
			$data['class4'] = 'inactive';

			$this->load->view('dashboard/mhs', $data);
		}

		public function data_alumni(){
			$data['nim'] = $this->search_result['nim'];
			$data['username'] = $this->search_result['nama'];
			$data['email'] = $this->search_result['email'];
			$data['profil_p'] = $this->search_result['photo'];
			$data['class1'] = 'inactive';
			$data['class2'] = 'inactive';
			$data['class3'] = 'active';
			$data['class4'] = 'inactive';
			$data['users'] = $this->m_user->selectAll_mhs();

			$data['title'] = 'Dashboard | Data Alumni';
			$data['datauser'] = 'dashboard/mhs_tracer';

			$this->load->view('dashboard/mhs', $data);

		}

		public function logout() {
			$this->session->unset_userdata('nim');
			$this->session->unset_userdata('akseslv');
			session_destroy();
			redirect('auth');
		}  
	}
	?>

