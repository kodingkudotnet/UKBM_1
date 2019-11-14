<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_siswa extends CI_Model {

    function ambildatasiswa($nis) {
        $query=$this->db->query("SELECT * FROM pengguna_siswa WHERE nis = $nis");
        return $query->result();
    }


}