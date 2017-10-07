<?php
class Admin_perusahaan extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_user');
		$filter = array('id'=>$this->session->userdata('nim'));
		$this->search_result = $this->m_user->user_company($filter);

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
			$data['class1'] = 'active';
			$data['class2'] = 'inactive';
			$data['class3'] = 'inactive';
			$data['class4'] = 'inactive';
			$data['datacompany'] = 'company/dashboard';

			$this->load->view('company/company', $data);
		}
		public function dataperusahaan(){
			$data['id'] = $this->search_result['id'];
			$id = $this->search_result['id'];
		//$data['nim'] = $this->search_result['nim'];
			$data['username'] = $this->search_result['nama'];
			$data['email'] = $this->search_result['email'];
			$data['alamat'] = $this->search_result['alamat'];
			$data['tanggal_b'] = $this->search_result['tanggal_b'];
			$data['website'] = $this->search_result['website'];
			$data['profil_p'] = $this->search_result['photo'];


		//data mahasiswa yang bekerja di perusahaan ini
			$data['usersa'] = $this->m_user->selectAll_company();
			$data['users'] = $this->m_user->selectAll_mhs_bekerja($id);
			

			$data['class1'] = 'inactive';
			$data['class2'] = 'active';
			$data['class3'] = 'inactive';
			$data['class4'] = 'inactive';

			$data['title'] = 'Dashboard | Profil';

			$data['datacompany'] = 'company/profil';

			$this->load->view('company/company', $data);
		}

		public function edit_company(){
			$data['id'] = $this->search_result['id'];
			$nim = $this->input->post('id');
			$update_data['id'] = $this->input->post('id');
			$update_data['nama'] = $this->input->post('nama');
			$update_data['email'] = $this->input->post('email');
			$update_data['alamat'] = $this->input->post('alamat');
			$update_data['tanggal_b'] = $this->input->post('tanggal_b');
			$update_data['website'] = $this->input->post('website');

			//$auth['password'] = md5($this->input->post('password'));

			if ($hasil = $this->m_user->update_company($update_data, $nim)/* && $hasil = $this->m_user->update($auth, $nim)*/) {
				$this->session->set_flashdata('success', 'User successfully updated.');
				redirect(base_url()."dashboard/company/biodata");
			}
			else {
				$this->session->set_flashdata('fail', 'User update failed.');
				redirect(base_url()."dashboard/company/biodata");
			}
		}
		public function dataalumni(){
			$data['id'] = $this->search_result['id'];
			$data['username'] = $this->search_result['nama'];
			$data['email'] = $this->search_result['email'];
			$data['profil_p'] = $this->search_result['photo'];
			$data['class1'] = 'inactive';
			$data['class2'] = 'inactive';
			$data['class3'] = 'active';
			$data['class4'] = 'inactive';
			$data['users'] = $this->m_user->selectAll_mhs();

			$data['title'] = 'Dashboard | Data Alumni';
			$data['datacompany'] = 'company/alumni';

			$this->load->view('company/company', $data);

		}
		public function edit_alumni(){
			$nim = $this->input->post('id');
			$update['id_perusahaan'] = $this->input->post('id_perusahaan');
			$update['jabatan'] = $this->input->post('jabatan');


			if ($hasil = $this->m_user->update_mhs($update, $nim)) {
				$this->session->set_flashdata('success', 'User successfully updated.');
				redirect(base_url()."dashboard/company/biodata");
			}
			else {
				$this->session->set_flashdata('fail', 'User update failed.');
				redirect(base_url()."dashboard/company/dataalumni");
			}
		}
		public function tracerAlumni(){
			$this->load->model('m_soal');
			$data['id'] = $this->search_result['id'];
			$id = $this->search_result['id'];
			$data['username'] = $this->search_result['nama'];
			$data['email'] = $this->search_result['email'];
			$data['profil_p'] = $this->search_result['photo'];
			$data['users'] = $this->m_user->selectAll_mhs_bekerja($id);
			$data['soala'] = $this->m_soal->selectAll();

			$data['class1'] = 'inactive';
			$data['class2'] = 'inactive';
			$data['class3'] = 'inactive';
			$data['class4'] = 'active';

			$data['title'] = 'Dashboard | Tracer Alumni';
			$data['datacompany'] = 'company/tracer';

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

