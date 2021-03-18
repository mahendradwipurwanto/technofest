<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembicara extends CI_Controller {
	public function __construct(){
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
		if ($this->session->userdata('logged_in') == FALSE || !$this->session->userdata('logged_in')){
			if (!empty($_SERVER['QUERY_STRING'])) {
				$uri = uri_string() . '?' . $_SERVER['QUERY_STRING'];
			} else {
				$uri = uri_string();
			}
			$this->session->unset_userdata('redirect');
			$this->session->set_userdata('redirect', $uri);
			$this->session->set_flashdata('alert', "Harap login ke akun anda, untuk melanjutkan");
			redirect('Masuk');
		}

		if ($this->session->userdata('ROLE') == 1 || $this->session->userdata('ROLE') == 2) {
			$this->session->set_flashdata('alert', "Anda bukan admin");
			redirect('Masuk');
		}

		$this->load->model(['pembicara_model']);
	}

	public function index(){
		$data['pembicara'] = $this->pembicara_model->get_pembicara();
		$this->template_backend->view('admin/pembicara', $data);
	}

}
