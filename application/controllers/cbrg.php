<?php
Class cbrg extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_brg');
    }
    public function index($offset=0)
    {
    $header['url']="inventaris_cs";
    $data['tb_barang'] = $this->m_brg->getAll();
    $data['tb_barang1'] = $this->m_brg->getbarang(1);
    $this->load->view('header', $header);
    $this->load->view('barang_cs',$data);
    $this->load->view('footer',$data);
    }
    public function delete($id){
        $this->m_brg->delete($id);
        $this->session->set_flashdata('msg','<p class="alert alert-success">Delete Success</p>');
        redirect('cbrg');
    }
    public function add()
    {
        $header['url']="addbarang_cs";
        $this->load->view('header', $header);
        $this->load->view('addbarang_cs');
        $this->load->view('footer');
    }
    public function addProses(){
        $dbrg = array(
            'idbarang' => $this->input->post('idbarang'),
            'jumlah' => $this->input->post('jumlah'),
            'idinventaris' => $this->input->post('idinventaris')
        );
        $this->m_brg->insert($dbrg);
        $this->session->set_flashdata('msg','<p class="alert alert-success">Input Success</p>');
        redirect('cbrg');
    }
    public function edit($id)
    {
      $header['url']="updatebarang_cs";
      $data['barang'] = $this->m_brg->getbarang($id);
      $this->load->view('header', $header);
      $this->load->view('updatebarang_cs',$data);
      $this->load->view('footer');
    }
    public function updatebrg($id){
      $dbrg = array(
          'idbarang' => $this->input->post('idbarang'),
          'jumlah' => $this->input->post('jumlah'),
          //'idinventaris' => $this->input->post('idinventaris')
      );
      $this->m_brg->update($id,$dbrg);
      $this->session->set_flashdata('msg','<p class="alert alert-success">Input Success</p>');
      redirect('cbrg');
    }
}
