<?php
class C_Loginpgw extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Login');
        $this->load->library('session');
    }

    public function index()
    {
        $data = array(
            'title' => 'login',
            'filename' => 'loginlg'
        );
        $this->load->view('loginlg',$data);
    }

    public function cek_login()
    {
         $username = $this->input->post('username');
         $password = $this->input->post('password');

         $this->load->model('M_Login');
         $login_adm = $this->M_Login->Login_adm($username, $password);
         $user = $login_adm->result()[0];
         if ($login_adm) {
                if ($login_adm->num_rows()==0) {
                   redirect('C_Loginpgw/index');
                }else {
                    $tht=$login_adm->result();
                    $sess_data = array(
                    'logged_in' => "Sudah Login",
                    'username' => $tht[0]->username,
                    'nama' => $tht[0]->nama,
                    'password' => $tht[0]->password,
                    'status' => $tht[0]->status
                    );
                    $this->session->set_userdata($sess_data);
                    redirect('cindex_cs/index');
                }
           }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('C_Loginpgw/index');
    }
}
?>
