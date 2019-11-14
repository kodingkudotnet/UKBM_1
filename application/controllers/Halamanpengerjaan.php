<?php 
 
class Halamanpengerjaan extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url','form');
		$this->load->model('m_halamanpengerjaan');
		$this->load->model('m_leftmenu');
		
		if($this->session->userdata('status') != "siswa"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
        $kode_soal = $this->input->get('kode_soal');
		$nis = $this->session->userdata('nis');
		$result['datasiswa'] = $this->m_halamanpengerjaan->ambildatasiswa($nis);
		$result['datastatuspengumpulan'] = $this->m_halamanpengerjaan->ambilstatuspengumpulan($nis,$kode_soal);
		$result['datajawabansementara'] = $this->m_halamanpengerjaan->ambiljawaban($kode_soal,$nis);
		$result['datasoal'] = $this->m_halamanpengerjaan->ambilsoal($kode_soal);
		$result['daftarsoal'] = $this->m_leftmenu->ambildaftarsoal();
        $this->load->view('halamanpengerjaan', $result);	
    }

    function updatejawaban(){
		if(isset($_POST['simpan'])){
			$id = $this->input->post('id');
			$jawaban = $this->input->post('jawaban');
			$updateArray = array();
	
			for($x = 0; $x < count($id); $x++){
	
			$updateArray[] = array(
				'id'=>$id[$x],
				'jawaban'=>$jawaban[$x], 
			);
		}      
		$this->db->update_batch('jawaban_sementara',$updateArray, 'id');
		redirect($_SERVER['HTTP_REFERER']);
		} elseif(isset($_POST['kumpulkan'])){
			$this->kumpulkan();
		}
        
	}
	
	function simpanjawaban(){
		if(isset($_POST['simpan'])){
			$nis = $this->input->post('nis');
			$kode_soal = $this->input->post('kode_soal');
			$no_soal = $this->input->post('no_soal');
			$jawaban = $this->input->post('jawaban');
			$saveArray = array();
	
			for($x = 0; $x < count($no_soal); $x++){
	
			$saveArray[] = array(
				'nis'=>$nis[$x],
				'kode_soal'=>$kode_soal[$x],
				'no_soal'=>$no_soal[$x],
				'jawaban'=>$jawaban[$x], 
			);
		}      
		$this->db->insert_batch('jawaban_sementara',$saveArray);
		redirect($_SERVER['HTTP_REFERER']);
		} elseif(isset($_POST['kumpulkan'])){
			$this->kumpulkan();
		}
		
	}
	
	function kumpulkan(){
		
			$nis = $this->input->post('nis');
			$kode_soal = $this->input->post('kode_soal');
			
			$kode_soal_selanjutnya = $kode_soal[0]+1;;
			$no_soal = $this->input->post('no_soal');
			$jawaban = $this->input->post('jawaban');
			$saveArray = array();
	
			for($x = 0; $x < count($jawaban); $x++){
	
			$saveArray[] = array(
				'nis'=>$nis[$x],
				'kode_soal'=>$kode_soal[$x],
				'no_soal'=>$no_soal[$x],
				'jawaban'=>$jawaban[$x], 
			);
		}      
		$this->db->insert_batch('jawaban_final',$saveArray);
		$updated_data = array(
			'status_pengerjaan' => $kode_soal_selanjutnya,
	 );

		$this->m_halamanpengerjaan->updatestatus($updated_data, $this->session->userdata('nis'));
		redirect($_SERVER['HTTP_REFERER']);
		
		}
		

		

		
}