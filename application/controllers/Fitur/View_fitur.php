<?php 


class View_fitur extends CI_Controller {

	public function user() {

		$this->load->view('templates/header_home');
		$this->load->view('templates/header');
		$this->load->view('fitur/fitur_akun/hal1_fitur_akun');
		$this->load->view('templates/footer');
		$this->load->view('templates/footer_home');

	}

	public function donasisaya() {

		$this->load->view('templates/header_home');
		$this->load->view('templates/header');
		$this->load->view('fitur/fitur_donasisaya/hal1_fitur_donasisaya');
		$this->load->view('templates/footer');
		$this->load->view('templates/footer_home');
	}

	public function update() {

		$this->load->view('templates/header_home');
		$this->load->view('templates/header');
		$this->load->view('fitur/fitur_inbox/hal1_fitur_update_inbox');
		$this->load->view('templates/footer');
		$this->load->view('templates/footer_home');
	}

	public function notification() {

		$this->load->view('templates/header_home');
		$this->load->view('templates/header');
		$this->load->view('fitur/fitur_inbox/hal1_fitur_notifikasi_inbox');
		$this->load->view('templates/footer');
		$this->load->view('templates/footer_home');
	}

	public function galangdana() {

		$this->load->view('templates/header_home');
		$this->load->view('templates/header');
		$this->load->view('fitur/fitur_galangdana/hal1_fitur_galangdana');
		$this->load->view('templates/footer');
		$this->load->view('templates/footer_home');
	}


}



 ?>