<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct(){

        parent::__construct();
        $this->load->model('Model_auth');
    }

    public function index(){

        if($this->session->has_userdata('hak_akses') == 'admin') {
            redirect(base_url('admin/'));
        }
        
        $this->load->view('templates_admin/header');
        $this->load->view('akses/akses_admin');
        $this->load->view('templates_admin/footer');
    }

    
    public function login(){

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $pass = md5($password);

        $cek_admin = $this->Model_auth->authAdmin($username, $pass);

        if($cek_admin->num_rows() == 1) {

            foreach($cek_admin->result() as $data) {
                $sess_data['hak_akses'] = $data->hak_akses;
                $this->session->set_userdata($sess_data);

                if($this->session->userdata('hak_akses') == 'admin') {
                    redirect(base_url('admin'));
                } else {
                    $this->session->set_flashdata('message', 'User not including admin');
                    return redirect($this->agent->referrer());
                }
            }

        }else{
            $this->session->set_flashdata('message', 'Akses ditolak');
            redirect($this->agent->referrer());
        }
    }

    public function logout(){
        if($this->session->userdata('hak_akses') == 'admin') {
            $this->session->sess_destroy();
        }

        redirect($this->agent->referrer());
    }
}

?>