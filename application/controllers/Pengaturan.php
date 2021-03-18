<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {
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

		$this->load->model(['pengaturan_model']);

	}

	public function index(){
		$this->template_backend->view('admin/pengaturan');
	}

	public function dev_mode($status, $uri){
		if ($this->pengaturan_model->dev_mode($status) == TRUE) {
			$this->session->set_flashdata('success', 'Berhasil <b>'.($status == 1 ? 'mengaktifkan' : 'menonaktifkan').'</b> developer mode !!');
			// header('location:' . site_url('Pengaturan/Semester'));
			redirect($uri);
		}else{
			$this->session->set_flashdata('alert', 'Terjadi kesalahan saat <b>'.($status == 1 ? 'mengaktifkan' : 'menonaktifkan').'</b> developer mode !!');
			redirect($uri);
		}
	}

	//SEMESTER
	public function Semester(){
		$data['semester']     = $this->pengaturan_model->get_semester();
		$data['controller']   = $this;

		$this->template_backend->view('admin/pengaturan_semester', $data);
	}

	public function tambah_semester(){
		if ($this->pengaturan_model->aktif_count() > 0) {
			$this->session->set_flashdata('alert', 'Telah ada semester dengan STATUS AKTIF, anda hanya dapat mengaktifkan 1 SEMESTER !!');
			header('location:' . site_url('Pengaturan/Semester'));
		}else{
			$SEMESTER = $this->input->post('SEMESTER');
			if ($this->pengaturan_model->tambah_semester() == TRUE) {
				$this->session->set_flashdata('success', 'Berhasil menambahkan data Semester <b>'.$SEMESTER.'</b> !!');
				header('location:' . site_url('Pengaturan/Semester'));
			}else{
				$this->session->set_flashdata('alert', 'Terjadi kesalahan saat menambahkan data Semester <b>'.$SEMESTER.'</b> !!');
				header('location:' . site_url('Pengaturan/Semester'));
			}
		}
	}

	public function ubah_semester(){
		$SEMESTER = $this->input->post('SEMESTER');
		if ($this->pengaturan_model->ubah_semester() == TRUE) {
			$this->session->set_flashdata('success', 'Berhasil mengubah data Semester <b>'.$SEMESTER.'</b> !!');
			header('location:' . site_url('Pengaturan/Semester'));
		}else{
			$this->session->set_flashdata('alert', 'Terjadi kesalahan saat mengubah data Semester <b>'.$SEMESTER.'</b> !!');
			header('location:' . site_url('Pengaturan/Semester'));
		}
	}

	public function semester_aktif(){
		$STATUS = $this->input->post('STATUS');
		if (is_null($STATUS)) {
			$SEMESTER = $this->input->post('SEMESTER');
			if ($this->pengaturan_model->semester_aktif() == TRUE) {
				$this->session->set_flashdata('success', 'Berhasil mengubah status Semester <b>'.$SEMESTER.'</b> !!');
				header('location:' . site_url('Pengaturan/Semester'));
			}else{
				$this->session->set_flashdata('alert', 'Terjadi kesalahan saat mengubah status Semester <b>'.$SEMESTER.'</b> !!');
				header('location:' . site_url('Pengaturan/Semester'));
			}
		}else{
			if ($this->pengaturan_model->aktif_count() > 0) {
				$this->session->set_flashdata('alert', 'Telah ada semester dengan STATUS AKTIF, anda hanya dapat mengaktifkan 1 SEMESTER !!');
				header('location:' . site_url('Pengaturan/Semester'));
			}else{
				$SEMESTER = $this->input->post('SEMESTER');
				if ($this->pengaturan_model->semester_aktif() == TRUE) {
					$this->session->set_flashdata('success', 'Berhasil mengubah status Semester <b>'.$SEMESTER.'</b> !!');
					header('location:' . site_url('Pengaturan/Semester'));
				}else{
					$this->session->set_flashdata('alert', 'Terjadi kesalahan saat mengubah status Semester <b>'.$SEMESTER.'</b> !!');
					header('location:' . site_url('Pengaturan/Semester'));
				}
			}
		}
	}

	public function hapus_semester(){
		$SEMESTER = $this->input->post('SEMESTER');
		if ($this->pengaturan_model->hapus_semester() == TRUE) {
			$this->session->set_flashdata('success', 'Berhasil menghapus data Semester <b>'.$SEMESTER.'</b> !!');
			header('location:' . site_url('Pengaturan/Semester'));
		}else{
			$this->session->set_flashdata('alert', 'Terjadi kesalahan saat menghapus data Semester <b>'.$SEMESTER.'</b> !!');
			header('location:' . site_url('Pengaturan/Semester'));
		}
	}

	//KATEGORI
	public function Kategori(){
		$data['kategori']     = $this->pengaturan_model->get_kategori();
		$data['semester']     = $this->pengaturan_model->get_semester();
		$data['controller']   = $this;

		$this->template_backend->view('admin/pengaturan_kategori', $data);
	}

	public function tambah_kategori(){
		$kategori = $this->input->post('KATEGORI');
		if ($this->pengaturan_model->tambah_kategori() == TRUE) {
			$this->session->set_flashdata('success', 'Berhasil menambahkan data kategori <b>'.$kategori.'</b> !!');
			header('location:' . site_url('Pengaturan/Kategori'));
		}else{
			$this->session->set_flashdata('alert', 'Terjadi kesalahan saat menambahkan data kategori <b>'.$kategori.'</b> !!');
			header('location:' . site_url('Pengaturan/Kategori'));
		}
	}

	public function ubah_kategori(){
		$kategori = $this->input->post('KATEGORI');
		if ($this->pengaturan_model->ubah_kategori() == TRUE) {
			$this->session->set_flashdata('success', 'Berhasil mengubah data kategori <b>'.$kategori.'</b> !!');
			header('location:' . site_url('Pengaturan/Kategori'));
		}else{
			$this->session->set_flashdata('alert', 'Terjadi kesalahan saat mengubah data kategori <b>'.$kategori.'</b> !!');
			header('location:' . site_url('Pengaturan/Kategori'));
		}
	}

	public function hapus_kategori(){
		$kategori = $this->input->post('KATEGORI');
		if ($this->pengaturan_model->hapus_kategori() == TRUE) {
			$this->session->set_flashdata('success', 'Berhasil menghapus data kategori <b>'.$kategori.'</b> !!');
			header('location:' . site_url('Pengaturan/Kategori'));
		}else{
			$this->session->set_flashdata('alert', 'Terjadi kesalahan saat menghapus data kategori <b>'.$kategori.'</b> !!');
			header('location:' . site_url('Pengaturan/Kategori'));
		}
	}

	//PRODI
	public function Prodi(){
		$data['prodi']     = $this->pengaturan_model->get_prodi();
		$data['controller']   = $this;

		$this->template_backend->view('admin/pengaturan_prodi', $data);
	}

	public function tambah_prodi(){
		$prodi = $this->input->post('PRODI');
		if ($this->pengaturan_model->tambah_prodi() == TRUE) {
			$this->session->set_flashdata('success', 'Berhasil menambahkan data prodi <b>'.$prodi.'</b> !!');
			header('location:' . site_url('Pengaturan/Prodi'));
		}else{
			$this->session->set_flashdata('alert', 'Terjadi kesalahan saat menambahkan data prodi <b>'.$prodi.'</b> !!');
			header('location:' . site_url('Pengaturan/Prodi'));
		}
	}

	public function ubah_prodi(){
		$prodi = $this->input->post('PRODI');
		if ($this->pengaturan_model->ubah_prodi() == TRUE) {
			$this->session->set_flashdata('success', 'Berhasil mengubah data prodi <b>'.$prodi.'</b> !!');
			header('location:' . site_url('Pengaturan/Prodi'));
		}else{
			$this->session->set_flashdata('alert', 'Terjadi kesalahan saat mengubah data prodi <b>'.$prodi.'</b> !!');
			header('location:' . site_url('Pengaturan/Prodi'));
		}
	}

	public function hapus_prodi(){
		$prodi = $this->input->post('PRODI');
		if ($this->pengaturan_model->hapus_prodi() == TRUE) {
			$this->session->set_flashdata('success', 'Berhasil menghapus data prodi <b>'.$prodi.'</b> !!');
			header('location:' . site_url('Pengaturan/Prodi'));
		}else{
			$this->session->set_flashdata('alert', 'Terjadi kesalahan saat menghapus data prodi <b>'.$prodi.'</b> !!');
			header('location:' . site_url('Pengaturan/Prodi'));
		}
	}

	//WEBSITE

	public function Website(){
		$data['tentang']     	= $this->pengaturan_model->get_tentang();
		$data['controller']   = $this;

		$this->template_backend->view('admin/pengaturan_website', $data);
	}

	public function ubah_website(){
		if ($this->pengaturan_model->ubah_website() == TRUE) {
			$this->session->set_flashdata('success', 'Berhasil mengubah data website !!');
			header('location:' . site_url('Pengaturan/Website'));
		}else{
			$this->session->set_flashdata('alert', 'Terjadi kesalahan saat mengubah data website !!');
			header('location:' . site_url('Pengaturan/Website'));
		}
	}
}
