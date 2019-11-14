<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_leftmenu extends CI_Model {

    function ambildaftarsoal(){
        $querydaftarsoal=$this->db->get("daftar_soal");
        return $querydaftarsoal->result();
    }

   
}