<?php

class m_login_peminjam extends CI_Model
{

    public function login_adm($data){
        $this->db->select('*');
        $this->db->from('tb_peminjam');
        $result = $this->db->get();
        return $result;
    }

}