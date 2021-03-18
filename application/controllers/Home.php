<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->model(['home_model']);
		if ($this->session->userdata('ROLE') == 2 || $this->session->userdata('logged_in') == FALSE){
			if ($this->home_model->dev_status() == TRUE) {
				redirect('coming-soon');
			}
		}
	}

	public function index(){
		$data['tentang']		= $this->home_model->tentang();

		$data['c_karya'] 		= $this->home_model->c_karya();
		$data['c_agenda'] 	= $this->home_model->c_agenda();
		$data['c_pengguna'] = $this->home_model->c_pengguna();

		$data['agenda'] 		= $this->home_model->agenda();
		$data['pembicara'] 	= $this->home_model->pembicara();

		$data['karya'] 			= $this->home_model->karya();
		$data['controller'] 			= $this;

		if ($this->session->userdata('logged_in') == FALSE || !$this->session->userdata('logged_in')){
			$KODE_USER = "visitor";
		}else{
			$KODE_USER = $this->session->userdata('KODE_USER');
		}

		// $this->home_model->kunjungi($KODE_USER, "home");

		$this->template_frontend->view('home', $data);
	}

	public function error404(){
		$this->load->view('error404');
	}

}
