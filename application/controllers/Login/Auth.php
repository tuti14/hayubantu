<?php 


class Auth extends CI_Controller {


    public function masuk() {

        $this->load->view('templates/header_home');
        $this->load->view('templates/header');
        $this->load->view('login/masuk');
        $this->load->view('templates/footer');
        $this->load->view('templates/footer_home');

    }

    public function register() {

        $this->load->view('templates/header_home');
        $this->load->view('templates/header');
        $this->load->view('login/registrasi');
        $this->load->view('templates/footer');
        $this->load->view('templates/footer_home');

    }

}

 ?>