<?php
Class cinvlogistik extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_inv');
    }
    public function index($offset=0)
    {
    $header['url']="inventaris_logistik";
    $data['inventaris'] = $this->m_inv->getAll();
    $data['inventaris1'] = $this->m_inv->getInventaris(1);
    $this->load->view('header3', $header);
    $this->load->view('inventaris_logistik',$data);
    $this->load->view('footer',$data);
    }
   public function edit($id)
   {
     $header['url']="updateinv_logistik";
     $data['inventaris'] = $this->m_inv->getInventaris($id);
     $this->load->view('header3', $header);
     $this->load->view('updateinv_logistik',$data);
     $this->load->view('footer');
   }
   public function updateinvlogistik($id){
    $dinv = array(
         #'idinventaris' => $this->input->post('idinventaris'),
         #'nama_inv' => $this->input->post('nama_inv'),
         'kondisi' => $this->input->post('kondisi'),
         #'idpegawai' => $this->input->post('idpegawai')
     );
     $this->m_inv->update($id,$dinv);
     $this->session->set_flashdata('msg','<p class="alert alert-success">Update Success</p>');
     redirect('cinvlogistik');
   }
}
