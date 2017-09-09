<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index() {
		$this->load->view('v_login');
	}

	public function cek_login() {
		$data = array('nim' => $this->input->post('user_id', TRUE),
					'password' => md5($this->input->post('pass_id', TRUE))
			);
		$this->load->model('m_user'); // load model_user
		$hasil = $this->m_user->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['id'] = $sess->id;
				$sess_data['nim'] = $sess->nim;
				$sess_data['password'] = $sess->password;
				$sess_data['akseslv'] = $sess->akseslv;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('akseslv')=='admin') {
				redirect('dashboard/admin');
				//echo "<script>alert('admin');history.go(-1);</script>";
			}
			elseif ($this->session->userdata('akseslv')=='perusahaan') {
				//echo "<script>alert('perusahaan');history.go(-1);</script>";
				redirect('dashboard/company');
			}
			elseif ($this->session->userdata('akseslv')=='mahasiswa') {
				redirect('dashboard/alumni');	
				//echo "<script>alert('embuh lah mahasiswa');history.go(-1);</script>";	
			}		
		}
		else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}

}

?>