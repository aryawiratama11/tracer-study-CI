<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_user extends CI_Model{
	
	public function cek_user($data) {
		$query = $this->db->get_where('auth', $data);
		return $query;
	}
	public function cek_email_exist($email){
		$this->db->where('email', $email);
		$this->db->from('perusahaan');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return $query->result();
			//return FALSE;
		}
	}

	//alumni
	public function user_mhs($data) {
		$this->db->select('*')
		->where($data);
		$query = $this->db->get('mhs');
		return $query->row_array();
	}

	public function selectAll_mhs() {
		$this->db->select('*');
		$query = $this->db->get('mhs');
		return $query->result_array();
	}
	public function selectAll_mhs_bekerja($id_perusahaan){
		$this->db->select('*');
		$this->db->where('id_perusahaan',$id_perusahaan);
		$result = $this->db->get('mhs')->result_array();
		return $result;
	}
	public function create_mhs($add) {
		$this->db->insert('mhs', $add);
		return true;
	}
	
	public function update_mhs($data, $nim) {
		$this->db->where('nim', $nim);
		$this->db->update('mhs', $data);
		return true;
	}
	public function delete_mhs($nim){
		$query = $this->db->query("DELETE FROM `mhs` WHERE `mhs`.`nim` = '$nim'");
		return $query;
	}
	//Auth
	public function delete($nim){
		$query = $this->db->query("DELETE FROM `auth` WHERE `auth`.`nim` = '$nim'");
		return $query;
	}
	public function update($data, $nim){
		$this->db->where('nim', $nim);
		$this->db->update('auth', $data);
		return true;
	}
	public function create_auth($auth) {
		$this->db->insert('auth', $auth);
		return true;
	}
	public function selectAll() {
		$this->db->select('*');
		$query = $this->db->get('auth');
		return $query->result_array();
	}

	//company
	public function user_company($data) {
		$this->db->select('*')
		->where($data);
		$query = $this->db->get('perusahaan');
		return $query->row_array();
	}
	public function selectAll_company() {
		$this->db->select('*');
		$query = $this->db->get('perusahaan');
		return $query->result_array();
	}
	public function create_company($data) {
		$this->db->insert('perusahaan', $data);
		return true;
	}
	
	public function update_company($data, $id) {
		$this->db->where('id', $id);
		$this->db->update('perusahaan', $data);
		return true;
	}
	public function delete_company($id){
		$query = $this->db->query("DELETE FROM `perusahaan` WHERE `perusahaan`.`id` = '$id'");
		return $query;
	}

	//Admin
	public function user_adm($data) {
		$this->db->select('*')
		->where($data);
		$query = $this->db->get('adm_amikom');
		return $query->row_array();
	}

	public function selectAll_adm() {
		$this->db->select('*');
		$query = $this->db->get('adm_amikom');
		return $query->result_array();
	}
	public function create_adm($data) {
		$this->db->insert('adm_amikom', $data);
		return true;
	}
	
	public function update_adm($data, $nim) {
		$this->db->where('nim', $nim);
		$this->db->update('adm_amikom', $data);
		return true;
	}
	public function delete_adm($nim){
		$query = $this->db->query("DELETE FROM `adm_amikom` WHERE `adm_amikom`.`nim` = '$nim'");
		return $query;
	}


	public function buat_kode()   {

		$this->db->select('RIGHT(user.id_odojers,4) as kode', FALSE);
		$this->db->order_by('id_odojers','DESC');    
		$this->db->limit(1);    
		  $query = $this->db->get('user');      //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
		   //jika kode ternyata sudah ada.      
		  	$data = $query->row();      
		  	$kode = intval($data->kode) + 1;    
		  }
		  else {      
		   //jika kode belum ada      
		  	$kode = 1;    
		  }

		  $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);    
		  $kodejadi = "15.21.".$kodemax;    
		  return $kodejadi;  
		}

	}
	?>
