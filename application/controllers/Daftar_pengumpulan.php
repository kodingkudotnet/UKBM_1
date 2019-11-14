<?php 
 
class Daftar_pengumpulan extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url','form');
		$this->load->model('m_daftarpengumpulan');
		$this->load->model('m_leftmenu');
		
		if($this->session->userdata('status') != "guru"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
    $kode_soal = $this->input->get('kode_soal');	
		$result['data'] = $this->m_daftarpengumpulan->ambildata($kode_soal);
		$result['daftarsoal'] = $this->m_leftmenu->ambildaftarsoal();
		$this->load->view('daftar_pengumpulan', $result);
		//$this->load->view('leftmenu');
		}
		
		function jawaban(){
		$kode_soal = $this->input->get('kode_soal');
		$nis = $this->input->get('nis');
		$result['datasiswa'] = $this->m_daftarpengumpulan->ambildatasiswa($nis);
		$result['datajawaban'] = $this->m_daftarpengumpulan->ambiljawaban($kode_soal,$nis);
		$result['datasoal'] = $this->m_daftarpengumpulan->ambilsoal($kode_soal);
		$result['daftarsoal'] = $this->m_leftmenu->ambildaftarsoal();
		$this->load->view('lihat_jawaban', $result);
		}

		
}