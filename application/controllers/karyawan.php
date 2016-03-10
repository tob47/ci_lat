<?php
class Karyawan extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library(array('template','pagination','form_validation'));
		$this->load->model('m_karyawan'); 
	}

	function index(){
		$data['title']="";
		$data['karyawan']=$this->m_karyawan->semua()->result();
		$data['karyawan2']= $this->db->query("select * from karyawan")->result_array();
		$this->template->display('karyawan/index',$data);
	}

	function tambah(){
		$data['title']="Tambah Data";
		$data['karyawan2']= $this->db->query("select * from karyawan")->result_array();
		$this->validasi();

		if($this->form_validation->run()==true){
			 
				$info=array( 
					'nama'=>$this->input->post('nama'),
					'id_atasan'=>$this->input->post('id_atasan'),
					'tgl_lahir'=>$this->input->post('tgl_lahir') 
				);
				$this->m_karyawan->simpan($info);
				redirect('karyawan'); 
		}else{
			$data['message']="";
			$this->template->display('karyawan/tambah',$data);
		}
	}
	
	function edit($id){
		$data['title']="Edit Data";
		$this->validasi();

		if($this->form_validation->run()==true){
			$info=array(
				'nama'=>$this->input->post('nama'),
				'id_atasan'=>$this->input->post('id_atasan'),
				'tgl_lahir'=>$this->input->post('tgl_lahir') 
			);
			$this->m_karyawan->update($id,$info);
			$data['message']="<div class='alert alert-info'>Data Berhasil diupdate</div>";
		}else{
			$data['message']="";
		}
		$data['karyawan']=$this->m_karyawan->cek($id)->row_array();
		$this->template->display('karyawan/edit',$data);
	}
	
	function hapus(){
		$kode=$this->input->post('kode');
		$this->m_karyawan->hapus($kode);
	}

	 

	function validasi(){ 
		$this->form_validation->set_rules('nama','Nama Satuan','required');
	}
}