<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cafe extends CI_Controller {

	function __construct(){
		 parent:: __construct();
		 $this->load->model('m_tulisan');
		 $this->load->model('m_galeri');
	}

	public function index()
	{
		$x['deskripsi']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(24,1);
		$data=$this->m_tulisan->get_tulisan_by_kategori_withlimit(24,1);
		$q=$data->row_array();
		$kode=$q['tulisan_album_id'];
		$x['Background']=$this->m_galeri->get_galeri_by_album_id_withliit(24,1);
		$x['cafe']=$this->m_galeri->get_galeri_by_album_id($kode);
		$y['title']='Putri Selako';
		$x['footer_deskripsi']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(31,1);
		$x['footer_alamat']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(32,1);
		$x['footer_email']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(34,1);
		$x['footer_number']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(33,1);
		$z['footer_deskripsi']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(31,1);
		$z['footer_alamat']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(32,1);
		$z['footer_email']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(34,1);
		$z['footer_number']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(33,1);
		$this->load->view('v_header',$y);
		$this->load->view('v_cafe',$x);
		$this->load->view('v_footer',$z);
	}
}
