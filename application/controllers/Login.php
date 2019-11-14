<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function siswa(){
		$this->load->view('login_siswa');
	}

	public function guru(){
		$this->load->view('login_guru');
	}

	function actionguru(){
		$nip = $this->input->post('nip');
		$password = $this->input->post('password');
		$where = array(
			'nip' => $nip,
			'password' => $password
			);
		$cek = $this->m_login->cek_login("pengguna_guru",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nip' => $nip,
				'status' => "guru",
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url('home'));
 
		}else{
			echo '<script>';
			echo 'alert("NIP / password salah atau tidak terdaftar")';
			echo '</script>';
		}
	}

	function actionsiswa(){
		$nis = $this->input->post('nis');
		$password = $this->input->post('password');
		$where = array(
			'nis' => $nis,
			'password' => $password
			);
		$cek = $this->m_login->cek_login("pengguna_siswa",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nis' => $nis,
				'status' => "siswa",
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url('siswa'));
 
		}else{
			echo '<script>';
			echo 'alert("NIS / password salah atau tidak terdaftar")';
			echo '</script>';
		}
	}

	
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
