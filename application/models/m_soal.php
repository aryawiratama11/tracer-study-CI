<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_soal extends CI_Model{
	public function selectAll() {
		$this->db->select('*');
		$query = $this->db->get('soal');
		return $query->result_array();
	}

	public function create($add) {
		$this->db->insert('soal', $add);
		return true;
	}

	public function update($data, $id) {
		$this->db->where('id_soal', $id);
		$this->db->update('soal', $data);
		return true;
	}
	public function delete($id){
		$query = $this->db->query("DELETE FROM `soal` WHERE `soal`.`id` = '$id'");
		return $query;
	}
}