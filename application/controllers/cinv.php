<?php
Class cinv extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_inv');
    }
    public function index($offset=0)
    {
    $header['url']="inventaris_cs";
    $data['inventaris'] = $this->m_inv->getAll();
    $data['inventaris1'] = $this->m_inv->getInventaris(1);
    $this->load->view('header', $header);
    $this->load->view('inventaris_cs',$data);
    $this->load->view('footer',$data);
    }
    public function add()
    {
        $header['url']="add";
        //$this->load->view('header', $header);
        $this->load->view('add');
      //  $this->load->view('footer');
    }
    public function addProses(){
        $dinv = array(
            'idinventaris' => $this->input->post('idinventaris'),
            'nama_inv' => $this->input->post('nama_inv'),
            'kondisi' => $this->input->post('kondisi'),
            'idpegawai' => $this->input->post('idpegawai')
        );
        $this->m_inv->insert($dinv);
        $this->session->set_flashdata('msg','<p class="alert alert-success">Input Success</p>');
        redirect('cinv');
    }
    public function delete($id){
        $this->m_inv->delete($id);
        $this->session->set_flashdata('msg','<p class="alert alert-success">Delete Success</p>');
        redirect('cinv');
    }
   public function edit($id)
   {
     $header['url']="editinv";
     $data['inventaris'] = $this->m_inv->getInventaris($id);
     $this->load->view('header', $header);
     $this->load->view('editinv',$data);
     $this->load->view('footer');
   }
   public function updateinv($id){
    $dinv = array(
         'idinventaris' => $this->input->post('idinventaris'),
         'nama_inv' => $this->input->post('nama_inv'),
         'kondisi' => $this->input->post('kondisi$id'),
         'idpegawai' => $this->input->post('idpegawai')
     );
     $this->m_inv->update($id,$dinv);
     $this->session->set_flashdata('msg','<p class="alert alert-success">Update Success</p>');
     redirect('cinv');
   }
}
