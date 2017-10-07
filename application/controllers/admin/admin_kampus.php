<?php
//session_start();
class Admin_kampus extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_user');
		$filter = array('nim'=>$this->session->userdata('nim'));
		$this->search_result = $this->m_user->user_adm($filter);	
		
		if ($this->session->userdata('nim')=="") {
			redirect('auth');
		}
		elseif ($this->session->userdata('akseslv')!='admin') {
			redirect('auth');		}
			$this->load->helper('text'); 

		}

		public function index() {
			$data['nim'] = $this->search_result['nim'];
			$data['username'] = $this->search_result['nama'];
			$data['email'] = $this->search_result['email'];
			$data['profil_p'] = $this->search_result['photo'];
			$data['users'] = $this->m_user->selectAll_mhs();
		//view
			$data['contentadmin'] = 'admin/dashboard';
		//title
			$data['title'] = 'Dashboard';
		//Mengaktifkan Menu
			$data['class1'] = 'active';
			$data['class2'] = 'inactive';
			$data['class3'] = 'inactive';
			$data['class4'] = 'inactive';

			$this->load->view('admin/admin', $data);
		}

		public function profil_adm() {
			$data['nim'] = $this->search_result['nim'];
			$data['username'] = $this->search_result['nama'];
			$data['email'] = $this->search_result['email'];
			$data['no_hp'] = $this->search_result['nohp'];
			$data['no_tlp'] = $this->search_result['telephon'];
			$data['profil_p'] = $this->search_result['photo'];
			$data['title'] = 'Dashboard | Profil';

			$data['class1'] = 'inactive';
			$data['class2'] = 'active';
			$data['class3'] = 'inactive';
			$data['class4'] = 'inactive';

			$data['users'] = $this->m_user->selectAll_adm();
			$data['usersauth'] = $this->m_user->selectAll();

			$data['contentadmin'] = 'admin/profil';
			$this->load->view('admin/admin', $data);
		}
		public function tambah_adm(){
			$add['nik'] = $this->input->post('nik');
			$add['nim'] = $this->input->post('nim');
			$add['nama'] = $this->input->post('nama');
			$add['email'] = $this->input->post('email');
			$add['alamat'] = $this->input->post('alamat');
			$add['gender'] = $this->input->post('gender');
			$add['tgllahir'] = $this->input->post('tgllahir');
			$add['nohp'] = $this->input->post('nohp');
			$add['telephon'] = $this->input->post('telephon');
			$add['agama'] = $this->input->post('agama');

			$config['upload_path'] = 'photo/admin';
			$config['allowed_types'] = 'jpeg|jpg|png';
			//$config['overwrite'] = true;
			//$config['max_width']  = '200';
			//$config['max_height']  = '300';  
			$this->load->library('upload', $config);

			if($this->upload->do_upload()) {
				$upload_data = $this->upload->data();

				$add['photo'] = $config['upload_path'].'/'.$upload_data['file_name'];
			}

			$auth['nim'] = $this->input->post('nim');
			$auth['password'] = md5($this->input->post('password'));
			$auth['akseslv'] = 'admin';

			if ($hasil = $this->m_user->create_adm($add) && $hasil = $this->m_user->create_auth($auth) ) {
				$this->session->set_flashdata('success', 'User successfully generated.');
				redirect(base_url()."dashboard/admin/dataadmin");
			}
			else {
				$this->session->set_flashdata('fail', 'User generate failed! Please check your input before submitting.');
				redirect(base_url()."dashboard/admin/dataadmin");
			}

		}
		public function edit_adm(){
			$nim = $this->input->post('nim');
			$update_data['nik'] = $this->input->post('nik');
			$update_data['nim'] = $this->input->post('nim');
			$update_data['nama'] = $this->input->post('nama');
			$update_data['email'] = $this->input->post('email');
			$update_data['alamat'] = $this->input->post('alamat');
			$update_data['gender'] = $this->input->post('gender');
			$update_data['tgllahir'] = $this->input->post('tgllahir');
			$update_data['nohp'] = $this->input->post('nohp');
			$update_data['telephon'] = $this->input->post('telephon');
			$update_data['agama'] = $this->input->post('agama');
			//$auth['password'] = md5($this->input->post('password'));

			if ($hasil = $this->m_user->update_adm($update_data, $nim)/* && $hasil = $this->m_user->update($auth, $nim)*/) {
				$this->session->set_flashdata('success', 'User successfully updated.');
				redirect(base_url()."dashboard/admin/dataadmin");
			}
			else {
				$this->session->set_flashdata('fail', 'User update failed.');
				redirect(base_url()."dashboard/admin/dataadmin");
			}


		}
		public function delete_adm($nim){
			if(!empty($nim)){
				$del = $this->m_user->delete_adm($nim);
				$del1 = $this->m_user->delete($nim);
				//unlink(base_url().$this->search_result['photo']);
				if($del){
					$this->session->set_flashdata('success', 'User successfully deleted.');
					redirect(base_url()."dashboard/admin/dataadmin");
				}
				else{
					$this->session->set_flashdata('fail', 'User delete failed.');
					redirect(base_url()."dashboard/admin/dataadmin");
				}
			}
		}


		public function data_alumni(){
			$data['nim'] = $this->search_result['nim'];
			$data['username'] = $this->search_result['nama'];
			$data['email'] = $this->search_result['email'];
			$data['profil_p'] = $this->search_result['photo'];
			//memanggil data mahasiswa
			$data['users'] = $this->m_user->selectAll_mhs();


			$data['contentadmin'] = 'admin/dataalumni';

			$data['title'] = 'Dashboard | Data Alumni';

			$data['class1'] = 'inactive';
			$data['class2'] = 'inactive';
			$data['class3'] = 'active';
			$data['class4'] = 'inactive';

			$this->load->view('admin/admin', $data);	
		}
		public function tambah_alumni(){
			$data['nim'] = $this->search_result['nim'];
			$data['username'] = $this->search_result['nama'];
			$data['email'] = $this->search_result['email'];
			$data['profil_p'] = $this->search_result['photo'];
			$data['contentadmin'] = 'admin/tambahalumni';
			$data['title'] = 'Dashboard | ADD Data Alumni';

			$data['class1'] = 'inactive';
			$data['class2'] = 'inactive';
			$data['class3'] = 'active';
			$data['class4'] = 'inactive';

			$this->load->view('admin/admin', $data);
		}
		public function save_alumni(){
			if ( $this->input->post('nim') == null &&
				$this->input->post('nama') == null &&
				$this->input->post('agama') == null &&
				$this->input->post('tahun_lulus') == null &&
				$this->input->post('jurusan') == null 

				) {
				echo "<script>alert('NIM, Nama, Agama, Jurusan, Tahun Kelulusan Tidak Boleh Kosong!');history.go(-1);</script>";
		} else {
			$add['nim'] = $this->input->post('nim');
			$add['nik'] = $this->input->post('nik');
			$add['id_perusahaan'] = $this->input->post('id_perusahaan');
			$add['nama'] = $this->input->post('nama');
			$add['email'] = $this->input->post('email');
			$add['alamat'] = $this->input->post('alamat');
			$add['gender'] = $this->input->post('gender');
			$add['tgllahir'] = $this->input->post('tgllahir');
			$add['jurusan'] = $this->input->post('jurusan');
			$add['nohp'] = $this->input->post('nohp');
			$add['telephon'] = $this->input->post('telephon');

			//$add['photo'] = $this->input->post('photo');

			$config['upload_path'] = 'photo/alumni';
			$config['allowed_types'] = 'jpeg|jpg|png';
			//$config['overwrite'] = true;
			//$config['max_width']  = '200';
			//$config['max_height']  = '300';  
			$this->load->library('upload', $config);

			if($this->upload->do_upload()) {
				$upload_data = $this->upload->data();

				$add['photo'] = $config['upload_path'].'/'.$upload_data['file_name'];
			}


			$add['agama'] = $this->input->post('agama');
			$add['warganegara'] = $this->input->post('warganegara');
			$add['kodepos'] = $this->input->post('kodepos');
			$add['kabupaten'] = $this->input->post('kabupaten');
			$add['profinsi'] = $this->input->post('profinsi');
			$add['tahun_lulus'] = $this->input->post('tahun_lulus');
			$add['judul_ta_sk'] = $this->input->post('judul_ta_sk');
			$add['penguasaan_bahasa'] = $this->input->post('penguasaan_bahasa');
			$add['level_bahasa'] = $this->input->post('level_bahasa');

			$auth['nim'] = $this->input->post('nim');
			$auth['password'] = md5($this->input->post('password'));
			$auth['akseslv'] = 'mahasiswa';

			if ($hasil = $this->m_user->create_mhs($add) && $hasil = $this->m_user->create_auth($auth) ) {
				$this->session->set_flashdata('success', 'User successfully generated.');
				redirect(base_url()."dashboard/admin/dataalumni");
			}
			else {
				$this->session->set_flashdata('fail', 'User generate failed! Please check your input before submitting.');
				redirect(base_url()."dashboard/admin/tambahdataalumni");
			}	
		}	
	}

	public function save_edit_alumni(){
		$nim = $this->input->post('nim');


		$config['upload_path'] = 'photo/alumni';
		$config['allowed_types'] = 'jpeg|jpg|png';
		//$config['overwrite'] = 'true';
		//$config['max_width']  = '700';
		//$config['max_height']  = '700';   
		$this->load->library('upload', $config);

		if($this->upload->do_upload()) {
			$upload_data = $this->upload->data();
			$data_update['photo'] = $config['upload_path'].'/'.$upload_data['file_name'];
		}

		$update_data['nik'] = $this->input->post('nik');
		$update_data['id_perusahaan'] = $this->input->post('id_perusahaan');
		$update_data['nama'] = $this->input->post('nama');
		$update_data['email'] = $this->input->post('email');
		$update_data['alamat'] = $this->input->post('alamat');
		$update_data['gender'] = $this->input->post('gender');
		$update_data['tgllahir'] = $this->input->post('tgllahir');
		$update_data['jurusan'] = $this->input->post('jurusan');
		$update_data['nohp'] = $this->input->post('nohp');
		$update_data['telephon'] = $this->input->post('telephon');

		
		$update_data['agama'] = $this->input->post('agama');
		$update_data['warganegara'] = $this->input->post('warganegara');
		$update_data['kodepos'] = $this->input->post('kodepos');
		$update_data['kabupaten'] = $this->input->post('kabupaten');
		$update_data['profinsi'] = $this->input->post('profinsi');
		$update_data['tahun_lulus'] = $this->input->post('tahun_lulus');
		$update_data['judul_ta_sk'] = $this->input->post('judul_ta_sk');
		$update_data['penguasaan_bahasa'] = $this->input->post('penguasaan_bahasa');
		$update_data['level_bahasa'] = $this->input->post('level_bahasa');

		$data_update['password'] = md5($this->input->post('password'));

		//$data['level'] = $this->input->post('level');
		// $data_update['updated_at'] = date('m/d/Y h:i:s a', time());
		$auth['nim'] = $this->input->post('nim');
		$auth['password'] = md5($this->input->post('password'));
		$auth['akseslv'] = 'mahasiswa';

		//image resize
		// $this->load->library('Image_moo');
		// if ($upload_data['file_name']) {
		// 	$this->image_moo
		// 	->load($upload_data["file_path"].$upload_data['file_name'])
		// 	->resize_crop(128,128)
		// 	->save($upload_data["file_path"].$upload_data['file_name'], $overwrite=TRUE);

		// 	if ($this->image_moo->errors) {
		// 		$data['error'] = $this->image_moo->display_errors() ;
		// 	}
		// }
		if ($hasil = $this->m_user->update_mhs($update_data, $nim) && $hasil = $this->m_user->update($auth, $nim)) {
			$this->session->set_flashdata('success', 'User successfully updated.');
			redirect(base_url()."dashboard/admin/dataalumni");
		}
		else {
			$this->session->set_flashdata('fail', 'User update failed.');
			redirect(base_url()."dashboard/admin/editalumni");
		}

	}

	public function destroy_alumni($nim){

		if(!empty($nim)){
			$del = $this->m_user->delete_mhs($nim);
			$del1 = $this->m_user->delete($nim);
			unlink(base_url().$this->search_result['photo']);
			if($del){
				$this->session->set_flashdata('success', 'User successfully deleted.');
				redirect(base_url()."dashboard/admin/dataalumni");
			}
			else{
				$this->session->set_flashdata('fail', 'User delete failed.');
				redirect(base_url()."dashboard/admin/dataalumni");
			}
		}
	}

	public function data_perusahaan(){
		$data['nim'] = $this->search_result['nim'];
		$data['username'] = $this->search_result['nama'];
		$data['email'] = $this->search_result['email'];
		$data['profil_p'] = $this->search_result['photo'];
		$data['contentadmin'] = 'admin/dataperusahaan';
		$data['title'] = 'Dashboard | Data Perusahaan';
		$data['users'] = $this->m_user->selectAll_company();

		$data['class1'] = 'inactive';
		$data['class2'] = 'inactive';
		$data['class3'] = 'inactive';
		$data['class4'] = 'active';

		$this->load->view('admin/admin', $data);		
	}
	public function tambah_company(){
		$add['id'] = $this->input->post('id');
		$add['nama'] = $this->input->post('nama');
		$add['email'] = $this->input->post('email');
		$add['alamat'] = $this->input->post('alamat');
		$add['tanggal_b'] = $this->input->post('tanggal_b');
		$add['website'] = $this->input->post('website');

		$config['upload_path'] = 'photo/company';
		$config['allowed_types'] = 'jpeg|jpg|png';
			//$config['overwrite'] = true;
			//$config['max_width']  = '200';
			//$config['max_height']  = '300';  
		$this->load->library('upload', $config);

		if($this->upload->do_upload()) {
			$upload_data = $this->upload->data();

			$add['photo'] = $config['upload_path'].'/'.$upload_data['file_name'];
		}

		$auth['nim'] = $this->input->post('id');
		$auth['password'] = md5($this->input->post('password'));
		$auth['akseslv'] = 'perusahaan';

		if ($hasil = $this->m_user->create_company($add) && $hasil = $this->m_user->create_auth($auth) ) {
			$this->session->set_flashdata('success', 'User successfully generated.');
			redirect(base_url()."dashboard/admin/dataperusahaan");
		}
		else {
			$this->session->set_flashdata('fail', 'User generate failed! Please check your input before submitting.');
			redirect(base_url()."dashboard/admin/dataperusahaan");
		}		
	}

	public function edit_company(){
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
			redirect(base_url()."dashboard/admin/dataperusahaan");
		}
		else {
			$this->session->set_flashdata('fail', 'User update failed.');
			redirect(base_url()."dashboard/admin/dataperusahaan");
		}
	}

	public function hapus_Company($id) {

		if(!empty($id)){
			$del = $this->m_user->delete_company($id);
			$del1 = $this->m_user->delete($id);
			//unlink(base_url().$this->search_result['photo']);
			if($del){
				$this->session->set_flashdata('success', 'User successfully deleted.');
				redirect(base_url()."dashboard/admin/dataperusahaan");
			}
			else{
				$this->session->set_flashdata('fail', 'User delete failed.');
				redirect(base_url()."dashboard/admin/dataperusahaan");
			}
		}

	}



	public function logout() {
		$this->session->unset_userdata('nim');
		$this->session->unset_userdata('akseslv');
		session_destroy();
		redirect('auth');
	}  
}
?>

