<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('m_tulisan');
		$this->load->model('m_galeri');
		$this->load->model('m_pengunjung');
		$this->load->model('m_kontak');
        $this->m_pengunjung->count_visitor();
	}

	public function index()
	{
		$y['title']='Contact Us';
		$z['footer_deskripsi']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(31,1);
		$z['footer_alamat']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(32,1);
		$z['footer_email']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(34,1);
		$z['footer_number']=$this->m_tulisan->get_tulisan_by_kategori_withlimit(33,1);
		$this->load->view('v_header',$y);
		$this->load->view('v_contact',$z);
	}

	function kirim_pesan(){
                $nama=str_replace("'", "", $this->input->post('name',TRUE));
                $email=str_replace("'", "", $this->input->post('email',TRUE));      
                $pesan=str_replace("'", "", $this->input->post('message',TRUE));
                $this->m_kontak->kirim_pesan($nama,$email,$pesan);
                echo $this->session->set_flashdata('msg',' <p>NB: </strong> Terima Kasih Telah Menghubungi Kami.</p>');
                redirect('Contact');
        }
}
