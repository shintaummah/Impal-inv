<?php
Class cinvpinjaman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_inv');
    }
    public function index($offset=0)
    {
    $header['url']="inventaris_peminjam";
    $data['inventaris'] = $this->m_inv->getAll();
    $data['inventaris1'] = $this->m_inv->getInventaris(1);
    $this->load->view('header2', $header);
    $this->load->view('inventaris_peminjam',$data);
    $this->load->view('footer',$data);
    }
}
