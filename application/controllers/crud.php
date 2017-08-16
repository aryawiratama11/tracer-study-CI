<?php 

class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_user');
               // $this->load->helper('url');
	}

	function index(){
		$data['users'] = $this->m_user->tampil_data();
		$this->load->view('v_tampil',$data);
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->m_user->hapus_data($where,'users');
		redirect('crud/index');
	}

	function tambah(){
		$this->load->view('v_input');

	}

	function tambah_aksi(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$data = array(
			'id' => $id,
			'nama' => $nama,
			'email' => $email,
			'password' => $password );

		$this->m_user->input_data($data, 'users');
		redirect('crud/index');


	}

	function edit($id) {
		$where = array('id' => $id, );
		$data['users'] = $this->m_user->edit_data($where, 'users')->result();
		$this->load->view('v_edit', $data);

	}

	function update() {
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$data = array(
			'id' => $id,
			'nama' => $nama,
			'email' => $email,
			'password' => $password );

		$where = array('id' => $id );

		$this->m_user->update_data($where, $data, 'users');
		redirect('crud/index');
	}
	
}
	
?>