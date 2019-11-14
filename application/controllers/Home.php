<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('m_leftmenu');
		$this->load->model('m_siswa');
		
		if($this->session->userdata('status') != "guru"){
			redirect(base_url("login"));
		}
	}

	function index()
	{
		$result['daftarsoal'] = $this->m_leftmenu->ambildaftarsoal();
		$this->load->view('home',$result);
	}

}
