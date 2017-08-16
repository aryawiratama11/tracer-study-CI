<?php 

class M_user extends CI_Model{
	
	
	
	function tampil_data(){
	 	$ambil_data = $this->db->get('users');
	
		if ($ambil_data->num_rows() > 0 ) {
			foreach ($ambil_data->result() as $data) {
				$users[] = $data;
			}
			return $users;
		}
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete('users');
	}

	function input_data($data, $table){
		$this->db->insert($table, $data);
	}

	function edit_data($where, $table) {
		return $this->db->get_where($table, $where);
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

}
?>