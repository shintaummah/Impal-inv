<?php

class m_login_logistik extends CI_Model
{

    public function login_adm($data){
        $this->db->select('*');
        $this->db->from('tb_logistik');
        $result = $this->db->get();
        return $result;
    }

}