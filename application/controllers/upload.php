<?php 

/**
* 
*/
class Upload extends CI_Controler
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url' ));
	}

	public function index(){
		$this->load->view('v_upload', array('error' => ' ' ));
	}

	public function aksi_upload(){
		$config['upload_path']		= './images/';
		$config['allowed_types']	= 'gif|jpg|png';
		$config['max_size']			= 100;
		$config['max_width']		= 1024;
		$config['max_height']		= 768;

		$this->load->library('upload', $config);

		if (! $this->upload->db_upload('berkas')){
			$error = array('error' => $this->upload->display_errors() );
			$this->load->view('v_upload', $error);
		} else {
			$data = array('upload_data' => $this->upload->data() );
			$this->load->view('v_upload_sukses', $data);
		}
	}




}
?>