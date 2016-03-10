<?php
class M_satuan extends CI_Model{
	private $table="satuan";
	private $primary="id_satuan";

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