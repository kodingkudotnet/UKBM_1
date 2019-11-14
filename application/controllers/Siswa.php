<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('m_leftmenu');
		$this->load->model('m_siswa');
		
		if($this->session->userdata('status') != "siswa"){
			redirect(base_url("login"));
		}
	}

	function index()
	{
		$nis = $this->session->userdata('nis');
		$result['datasiswa'] = $this->m_siswa->ambildatasiswa($nis);
		$result['daftarsoal'] = $this->m_leftmenu->ambildaftarsoal();
		$this->load->view('siswa',$result);
	}
}
