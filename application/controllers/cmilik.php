<?php
Class cmilik extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_milik');
    }
    public function index($offset=0)
    {
    $header['url']="inventaris_cs";
    $data['tb_milik'] = $this->m_milik->getAll();
    $data['tb_milik1'] = $this->m_milik->getmilik(1);
    $this->load->view('header', $header);
    $this->load->view('milik_cs',$data);
    $this->load->view('footer',$data);
    }
    public function delete($id){
        $this->m_milik->delete($id);
        $this->session->set_flashdata('msg','<p class="alert alert-success">Delete Success</p>');
        redirect('cmilik');
    }
    public function add()
    {
        $header['url']="addasset_cs";
        $this->load->view('header', $header);
        $this->load->view('addmilik_cs');
        $this->load->view('footer');
    }
    public function addProses(){
        $dmilik = array(
            'idinventaris' => $this->input->post('idinventaris'),
            'idasset' => $this->input->post('idasset')
        );
        $this->m_milik->insert($dmilik);
        $this->session->set_flashdata('msg','<p class="alert alert-success">Input Success</p>');
        redirect('cmilik');
    }
    public function edit($id)
    {
      $header['url']="updatemilik_cs";
      $data['milik'] = $this->m_milik->getmilik($id);
      $this->load->view('header', $header);
      $this->load->view('updatemilik_cs',$data);
      $this->load->view('footer');
    }
    public function updatemilik($id){
      $dmilik = array(
          'idinventaris' => $this->input->post('idinventaris'),
          'idasset' => $this->input->post('idasset'),
          //'idinventaris' => $this->input->post('idinventaris')
      );
      $this->m_milik->update($id,$dmilik);
      $this->session->set_flashdata('msg','<p class="alert alert-success">Input Success</p>');
      redirect('cmilik');
    }
}
