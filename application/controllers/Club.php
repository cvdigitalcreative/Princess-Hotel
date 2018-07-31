<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Club extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('m_tulisan');
		$this->load->model('m_pengunjung');
		$this->load->model('m_galeri');
        $this->m_pengunjung->count_visitor();
	}


	public function index(){
		$x['deskripsi']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(29,1);
		$data=$this->m_tulisan->get_tulisan_by_kategori_withlimit(29,1);
		$q=$data->row_array();
		$kode=$q['tulisan_album_id'];
		$x['Background']=$this->m_galeri->get_galeri_by_album_id_withliit(17,1);
		$x['neopc']=$this->m_galeri->get_galeri_by_album_id($kode);
		$y['title']='neoPC';
		$x['footer_deskripsi']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(31,1);
		$x['footer_alamat']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(32,1);
		$x['footer_email']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(34,1);
		$x['footer_number']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(33,1);
		$z['footer_deskripsi']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(31,1);
		$z['footer_alamat']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(32,1);
		$z['footer_email']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(34,1);
		$z['footer_number']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(33,1);
		$this->load->view('v_header',$y);
		$this->load->view('v_neoPC',$x);
		$this->load->view('v_footer',$z);
	}

	public function wingsterrace()
	{
		$x['deskripsi']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(22,1);
		$data=$this->m_tulisan->get_tulisan_by_kategori_withlimit(22,1);
		$q=$data->row_array();
		$kode=$q['tulisan_album_id'];
		$x['Background']=$this->m_galeri->get_galeri_by_album_id_withliit(20,1);
		$x['wingt']=$this->m_galeri->get_galeri_by_album_id($kode);
		$y['title']='Wings @Terrace';
		$x['footer_deskripsi']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(31,1);
		$x['footer_alamat']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(32,1);
		$x['footer_email']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(34,1);
		$x['footer_number']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(33,1);
		$z['footer_deskripsi']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(31,1);
		$z['footer_alamat']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(32,1);
		$z['footer_email']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(34,1);
		$z['footer_number']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(33,1);
		$this->load->view('v_header',$y);
		$this->load->view('v_wingterrace',$x);
		$this->load->view('v_footer',$z);
	}

	public function neoPCevent(){
		$x['deskripsi']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(28,1);
		$data=$this->m_tulisan->get_tulisan_by_kategori_withlimit(28,1);
		$q=$data->row_array();
		$kode=$q['tulisan_album_id'];
		$x['Background']=$this->m_galeri->get_galeri_by_album_id_withliit(40,1);
		$x['neoPCevent']=$this->m_galeri->get_galeri_by_album_id($kode);
		$y['title']='neoPC Event Space & Club';
		$x['footer_deskripsi']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(31,1);
		$x['footer_alamat']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(32,1);
		$x['footer_email']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(34,1);
		$x['footer_number']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(33,1);
		$z['footer_deskripsi']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(31,1);
		$z['footer_alamat']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(32,1);
		$z['footer_email']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(34,1);
		$z['footer_number']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(33,1);
		$this->load->view('v_header',$y);
		$this->load->view('v_neoPCevent',$x);
		$this->load->view('v_footer',$z);
	}
}
