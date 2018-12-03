<?php
Class cpinjaman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pinjaman');
    }
    public function index($offset=0)
    {
    $header['url']="pinjaman";
    $data['tb_pinjaman'] = $this->m_pinjaman->getAll();
    $data['tb_pinjaman1'] = $this->m_pinjaman->getpinjaman(1);
    $this->load->view('header2', $header);
    $this->load->view('pinjaman',$data);
    $this->load->view('footer',$data);
    }
    public function delete($id){
        $this->m_pinjaman->delete($id);
        $this->session->set_flashdata('msg','<p class="alert alert-success">Delete Success</p>');
        redirect('cpinjaman');
    }
    public function add()
    {
        $header['url']="addpinjaman";
        $this->load->view('header2', $header);
        $this->load->view('addpinjaman');
        $this->load->view('footer');
    }
    public function addProses(){
        $dpinjaman = array(
            'idpinjaman' => $this->input->post('idpinjaman'),
            'nim' => $this->input->post('nim'),
            'idinventaris' => $this->input->post('idinventaris'),
            'tglpinjam' => $this->input->post('tglpinjam'),
            'tglkembali' => $this->input->post('tglkembali')
        );
        $this->m_pinjaman->insert($dpinjaman);
        $this->session->set_flashdata('msg','<p class="alert alert-success">Input Success</p>');
        redirect('cpinjaman');
    }
    public function edit($id)
    {
      $header['url']="updatepinjaman";
      $data['pinjaman'] = $this->m_pinjaman->getpinjaman($id);
      $this->load->view('header2', $header);
      $this->load->view('updatepinjaman',$data);
      #$this->load->view('footer');
    }
    public function updatepinjaman($id){
      $dpinjaman = array(
          'idpinjaman' => $this->input->post('idpinjaman'),
          'nim' => $this->input->post('nim'),
          'idinventaris' => $this->input->post('idinventaris'),
          'tglpinjam' => $this->input->post('tglpinjam'),
          'tglkembali' => $this->input->post('tglkembali')
      );
      $this->m_pinjaman->update($id,$dpinjaman);
      $this->session->set_flashdata('msg','<p class="alert alert-success">Input Success</p>');
      redirect('cpinjaman');
    }
}
