<?php
Class ctnh extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_tnh');
    }
    public function index($offset=0)
    {
    $header['url']="inventaris_cs";
    $data['tb_barang'] = $this->m_tnh->getAll();
    $data['tb_tanah1'] = $this->m_tnh->getanah(1);
    $this->load->view('header', $header);
    $this->load->view('tanah_cs',$data);
    $this->load->view('footer',$data);
    }
    public function delete($id){
        $this->m_tnh->delete($id);
        $this->session->set_flashdata('msg','<p class="alert alert-success">Delete Success</p>');
        redirect('ctnh');
    }
}
