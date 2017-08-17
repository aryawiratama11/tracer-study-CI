<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_user extends CI_Model{
	
	public function cek_user($data) {
		$query = $this->db->get_where('auth', $data);
		return $query;
	}

	public function user_mhs($nim) {
		$query = $this->db->query("select * from mhs where nim='$nim' limit 1");
		return $query;
	}

}
?>
