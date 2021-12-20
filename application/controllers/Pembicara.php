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
		$data['pembicara']  = $this->pembicara_model->get_pembicara();
		$data['controller'] = $this;
		$this->template_backend->view('admin/pembicara', $data);
	}

	function tambah(){

		$foto 	= null;

		$folder = "berkas/karya/01pembicara";

		if (!is_dir($folder)) {
			mkdir($folder, 0755, true);
		}
		$config['upload_path']          = $folder;
		$config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|GIF|PNG|JPEG';
		$config['max_size']             = 10048;
		$config['overwrite'] 						= true;
		$this->load->library('upload', $config);

		if($this->upload->do_upload('FOTO')){
			$upload_data 	= $this->upload->data();
			$foto = $upload_data['file_name'];
		}

		if ($this->pembicara_model->tambah($foto) == TRUE){
			$this->session->set_flashdata('success', 'Berhasil menambahkan data pembicara!!');
			header('location:' . site_url('Pembicara'));
		}else{
			$this->session->set_flashdata('alert', 'Terjadi kesalahan saat menambahkan data pembicara, coba lagi beberapa saat nanti !!');
			header('location:' . site_url('Pembicara'));
		}
	}

	function edit(){

		$foto 	= null;

		$folder = "berkas/karya/01pembicara";

		if (!is_dir($folder)) {
			mkdir($folder, 0755, true);
		}
		$config['upload_path']          = $folder;
		$config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|GIF|PNG|JPEG';
		$config['max_size']             = 10048;
		$config['overwrite'] 						= true;
		$this->load->library('upload', $config);

		if($this->upload->do_upload('FOTO')){
			$upload_data 	= $this->upload->data();
			$foto = $upload_data['file_name'];
		}

		if ($this->pembicara_model->edit($foto) == TRUE){
			$this->session->set_flashdata('success', 'Berhasil mengubah data pembicara!!');
			header('location:' . site_url('Pembicara'));
		}else{
			$this->session->set_flashdata('alert', 'Terjadi kesalahan saat mengubah data pembicara, coba lagi beberapa saat nanti !!');
			header('location:' . site_url('Pembicara'));
		}
	}

	function hapus(){

		if ($this->pembicara_model->hapus() == TRUE){
			$this->session->set_flashdata('success', 'Berhasil menghapus data pembicara!!');
			header('location:' . site_url('Pembicara'));
		}else{
			$this->session->set_flashdata('alert', 'Terjadi kesalahan saat menghapus data pembicara, coba lagi beberapa saat nanti !!');
			header('location:' . site_url('Pembicara'));
		}
	}

}
