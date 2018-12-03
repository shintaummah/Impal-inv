<?php

class M_Login extends CI_Model
{

    public function login_adm($data){
        $this->db->select('*');
        $this->db->from('tb_pegawai');
        $result = $this->db->get();
        return $result;
    }

}