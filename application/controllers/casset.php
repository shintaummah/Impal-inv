<?php
Class casset extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_asset');
    }
    public function index($offset=0)
    {
    $header['url']="inventaris_cs";
    $data['tb_asset'] = $this->m_asset->getAll();
    $data['tb_asset1'] = $this->m_asset->getasset(1);
    $this->load->view('header', $header);
    $this->load->view('asset_cs',$data);
    $this->load->view('footer',$data);
    }
    public function delete($id){
        $this->m_asset->delete($id);
        $this->session->set_flashdata('msg','<p class="alert alert-success">Delete Success</p>');
        redirect('casset');
    }
    public function add()
    {
        $header['url']="addasset_cs";
        $this->load->view('header', $header);
        $this->load->view('addasset_cs');
        $this->load->view('footer');
    }
    public function addProses(){
        $dasset = array(
            'idasset' => $this->input->post('idasset'),
            'nama' => $this->input->post('nama'),
        );
        $this->m_asset->insert($dasset);
        $this->session->set_flashdata('msg','<p class="alert alert-success">Input Success</p>');
        redirect('casset');
    }
}
