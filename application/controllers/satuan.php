<?php
class Satuan extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library(array('template','pagination','form_validation'));
		$this->load->model('m_satuan'); 
	}

	function index(){
		$data['title']="Satuan Barang";
		$data['satuan']=$this->m_satuan->semua()->result();
		$this->template->display('satuan/index',$data);
	}

	function tambah(){
		$data['title']="Tambah Data Satuan Barang";
		$this->validasi();

		if($this->form_validation->run()==true){
			$kode=$this->input->post('id');
			$cek=$this->m_satuan->cek($kode);
			if($cek->num_rows()>0){
				$data['message']="<div class='alert alert-danger'>ID Satuan sudah digunakan</div>";
				$this->template->display('satuan/tambah',$data);
			}else{
				$info=array(
					'id_satuan'=>$this->input->post('id'),
					'nm_satuan'=>$this->input->post('nama')
				);
				$this->m_satuan->simpan($info);
				redirect('satuan/detail/'.$kode);
			}
		}else{
			$data['message']="";
			$this->template->display('satuan/tambah',$data);
		}
	}

	function edit($id){
		$data['title']="Edit Data Satuan";
		$this->validasi();

		if($this->form_validation->run()==true){
			$info=array(
				'id_satuan'=>$this->input->post('id'),
				'nm_satuan'=>$this->input->post('nama')
			);
			$this->m_satuan->update($id,$info);
			$data['message']="<div class='alert alert-info'>Data Berhasil diupdate</div>";
		}else{
			$data['message']="";
		}
		$data['satuan']=$this->m_satuan->cek($id)->row_array();
		$this->template->display('satuan/edit',$data);
	}

	function hapus(){
		$kode=$this->input->post('kode');
		$this->m_satuan->hapus($kode);
	}

	function detail($id){
		$data['title']="Detail Satuan";
		$data['satuan']=$this->m_satuan->cek($id)->row_array();
		$this->template->display('satuan/detail',$data);
	}

	function validasi(){
		$this->form_validation->set_rules('id','ID Satuan','required|max_length[3]');
		$this->form_validation->set_rules('nama','Nama Satuan','required');
	}
}