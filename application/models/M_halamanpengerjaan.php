<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_halamanpengerjaan extends CI_Model {

    function ambildata($kode_soal) {
        $query=$this->db->query("SELECT DISTINCT pengguna_siswa.nis, pengguna_siswa.nama, pengguna_siswa.no_absen, jawaban_sementara.kode_soal FROM pengguna_siswa JOIN jawaban_sementara ON jawaban_sementara.nis = pengguna_siswa.nis WHERE jawaban_sementara.kode_soal = $kode_soal");
        return $query->result();
    }

    function ambildatasiswa($nis) {
        $query=$this->db->query("SELECT nis,nama,no_absen,status_pengerjaan FROM pengguna_siswa WHERE nis = $nis");
        return $query->row();
    }

    function ambiljawaban($kode_soal,$nis){
        $queryjawaban=$this->db->query("SELECT id,no_soal,jawaban FROM jawaban_sementara WHERE nis = $nis AND kode_soal = $kode_soal");
        return $queryjawaban->result();
    }

    function ambilstatuspengumpulan($kode_soal,$nis){
        $querystatus=$this->db->query("SELECT id,no_soal,jawaban FROM jawaban_final WHERE nis = $nis AND kode_soal = $kode_soal");
        return $querystatus->result();
    }

    function ambilsoal($kode_soal){
        $querysoal=$this->db->query("SELECT kode_soal,no_soal,deskripsi_soal FROM soal WHERE kode_soal = $kode_soal");
        return $querysoal->result();
    }

    public function updatestatus($updated_data, $nis)
    {
        $this->db->where('nis', $nis);
        $this->db->update('pengguna_siswa',$updated_data); 
}

}