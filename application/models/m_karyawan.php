<?php
class M_karyawan extends CI_Model{
	private $table="karyawan";
	private $primary="id";

	function semua(){
		return $this->db->get($this->table);
	}

	function simpan($info){
		$this->db->insert($this->table,$info);
	}

	function cek($id){
		$this->db->where($this->primary,$id);
		return $this->db->get($this->table);
	}

	function update($id,$info){
		$this->db->where($this->primary,$id);
		$this->db->update($this->table,$info);
	}

	function hapus($id){
		$this->db->where($this->primary,$id);
		$this->db->delete($this->table);
	}
}