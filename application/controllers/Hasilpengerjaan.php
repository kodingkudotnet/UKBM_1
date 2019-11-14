<?php 
 
class Hasilpengerjaan extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url','form');
		$this->load->model('m_hasilpengerjaan');
		$this->load->model('m_leftmenu');
		
		if($this->session->userdata('status') != "siswa"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
        $kode_soal = $this->input->get('kode_soal');
		$nis = $this->input->get('nis');
		$result['datajawaban'] = $this->m_hasilpengerjaan->ambiljawaban($kode_soal,$nis);
		$result['datasoal'] = $this->m_hasilpengerjaan->ambilsoal($kode_soal);
		$result['daftarsoal'] = $this->m_leftmenu->ambildaftarsoal();
		$this->load->view('hasilpengerjaan', $result);
		}
		
}