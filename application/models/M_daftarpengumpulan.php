<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_daftarpengumpulan extends CI_Model {

    function ambildata($kode_soal) {
        $query=$this->db->query("SELECT DISTINCT pengguna_siswa.nis, pengguna_siswa.nama, pengguna_siswa.no_absen, jawaban_final.kode_soal FROM pengguna_siswa JOIN jawaban_final ON jawaban_final.nis = pengguna_siswa.nis WHERE jawaban_final.kode_soal = $kode_soal");
        return $query->result();
    }

    function ambildatasiswa($nis) {
        $query=$this->db->query("SELECT nis,nama,no_absen FROM pengguna_siswa WHERE nis = $nis");
        return $query->result();
    }

    function ambiljawaban($kode_soal,$nis){
        $queryjawaban=$this->db->query("SELECT no_soal,jawaban FROM jawaban_final WHERE nis = $nis AND kode_soal = $kode_soal");
        return $queryjawaban->result();
    }

    function ambilsoal($kode_soal){
        $querysoal=$this->db->query("SELECT no_soal,deskripsi_soal FROM soal WHERE kode_soal = $kode_soal");
        return $querysoal->result();
    }

}