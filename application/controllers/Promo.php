<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promo extends CI_Controller {

	function __construct(){
		 parent:: __construct();
		 $this->load->model('m_tulisan');
		 $this->load->model('m_galeri');
		 $this->load->model('m_pengunjung');
		 $this->m_pengunjung->count_visitor();
	}

	public function index()
	{

		$jum=$this->m_tulisan->get_tulisan_by_kategori(30);
	    $page=$this->uri->segment(3);
	    if(!$page):
	        $offset = 0;
	    else:
	        $offset = $page;
	    endif;
	    $limit=6;
	    $config['base_url'] = base_url() . 'Promo/index';
	    $config['total_rows'] = $jum->num_rows();
	    $config['per_page'] = $limit;
	    $config['uri_segment'] = 3;
	    $config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] = '</ul>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		    
		$config['prev_link'] = '<<';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';


		$config['next_link'] = '>>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$this->pagination->initialize($config);
	    $x['page'] =$this->pagination->create_links();
		$x['data']=$this->m_tulisan->berita_perpage_by_kategori(30,$offset,$limit);
		$y['title']='Promo Princess Hotel';
		$z['footer_deskripsi']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(31,1);
		$z['footer_alamat']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(32,1);
		$z['footer_email']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(34,1);
		$z['footer_number']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(33,1);
		$this->load->view('v_header',$y);
		$this->load->view('v_promo',$x);
		$this->load->view('v_footer',$z);
	}

	function detail($slug)
	{
		$data=$this->m_tulisan->get_berita_by_slug($slug);
		$q=$data->row_array();
		$kode=$q['tulisan_album_id'];
		$title=$q['tulisan_judul'];
		$x['deskripsi']=$this->m_tulisan->get_berita_by_slug($slug);
		// $x['Background']=$this->m_galeri->get_galeri_by_album_id_withliit(17,1);
		$x['gambar']=$this->m_galeri->get_galeri_by_album_id($kode);
		$y['title']=$title;
		$x['footer_deskripsi']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(31,1);
		$x['footer_alamat']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(32,1);
		$x['footer_email']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(34,1);
		$x['footer_number']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(33,1);
		$z['footer_deskripsi']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(31,1);
		$z['footer_alamat']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(32,1);
		$z['footer_email']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(34,1);
		$z['footer_number']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(33,1);
		$this->load->view('v_header',$y);
		$this->load->view('v_promo_detail',$x);
		$this->load->view('v_footer',$z);
	}

}
