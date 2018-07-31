<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		 parent::__construct();
        $this->load->model('m_tulisan');
		$this->load->model('m_pengunjung');
		$this->load->model('m_galeri');
        $this->m_pengunjung->count_visitor();
	}

	public function index()
	{
		$x['service1']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(15,1);
		$x['service2']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(16,1);
		$x['service3']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(17,1);
		$x['service4']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(18,1);
		$x['judul_service']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(19,1);
		$x['promo']=$this->m_galeri->get_galeri_by_album_id_withliit(42,1);
		$x['judul_room_favorite']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(20,1);
		$x['judul_gallery']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(21,1);
		$x['Background']=$this->m_galeri->get_galeri_by_album_id(10);
		$x['header2']=$this->m_galeri->get_galeri_by_album_id(44);
		$x['Room']=$this->m_tulisan->get_tulisan_by_kategori(14);
		$y['title']='Princess Hotel Palembang';
		$z['footer_deskripsi']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(31,1);
		$z['footer_alamat']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(32,1);
		$z['footer_email']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(34,1);
		$z['footer_number']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(33,1);
		$this->load->view('v_header',$y);
		$this->load->view('v_home',$x);
		$this->load->view('v_footer',$z);
	}
}
