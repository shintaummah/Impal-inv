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
    $data['tb_tanah'] = $this->m_tnh->getAll();
    $data['tb_tanah1'] = $this->m_tnh->gettanah(1);
    $this->load->view('header', $header);
    $this->load->view('tanah_cs',$data);
    $this->load->view('footer',$data);
    }
    public function delete($id){
        $this->m_tnh->delete($id);
        $this->session->set_flashdata('msg','<p class="alert alert-success">Delete Success</p>');
        redirect('ctnh');
    }
    public function add()
    {
        $header['url']="addtanah_cs";
        $this->load->view('header', $header);
        $this->load->view('addtanah_cs');
        $this->load->view('footer');
    }
    public function addProses(){
        $dtnh = array(
            'idtanah' => $this->input->post('idtanah'),
            'luas' => $this->input->post('luas'),
            'idinventaris' => $this->input->post('idinventaris')
        );
        $this->m_tnh->insert($dtnh);
        $this->session->set_flashdata('msg','<p class="alert alert-success">Input Success</p>');
        redirect('ctnh');
    }
    public function edit($id)
    {
      $header['url']="updatetanah_cs";
      $data['tanah'] = $this->m_tnh->gettanah($id);
      $this->load->view('header', $header);
      $this->load->view('updatetanah_cs',$data);
      $this->load->view('footer');
    }
    public function updatetanah($id){
      $dtnh = array(
          'idtanah' => $this->input->post('idtanah'),
          'luas' => $this->input->post('luas'),
          //'idinventaris' => $this->input->post('idinventaris')
      );
      $this->m_tnh->update($id,$dtnh);
      $this->session->set_flashdata('msg','<p class="alert alert-success">Input Success</p>');
      redirect('ctnh');
    }

}
