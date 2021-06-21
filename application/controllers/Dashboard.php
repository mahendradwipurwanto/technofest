<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
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

		if ($this->session->userdata('ROLE') == 1) {
			$this->session->set_flashdata('alert', "Anda bukan admin");
			redirect('Masuk');
		}

		$this->load->model(['dashboard_model', 'home_model']);
	}

	public function index(){
		$data = array(
			'semester'     => $this->dashboard_model->get_semester(),
			'koordinator'     => $this->dashboard_model->get_koordinator(),
			'totalKarya' 		=> $this->dashboard_model->get_karya(),
			'karyaBelumVERIF' 		=> $this->dashboard_model->get_karyaBelumVERIF(),
			'c_agenda' 		=> $this->home_model->c_agenda(),
			'totalLike' 		=> $this->dashboard_model->getTotalData('TB_LIKE'),
			'totalPengunjung' 	=> $this->dashboard_model->getTotalData('TB_VISITOR'),
		);
		$this->template_backend->view('admin/dashboard', $data);
	}

	public function getDataStatistic(){
		$nameChart 					= $this->input->post('nameChart');
		$period 					= $this->input->post('period');
		$resDataStatistic['date'] 	= array();
		$resDataStatistic['total'] 	= array();

		$dataStore = array(
			'table' 	=> ($nameChart == "chart-like"? "TB_LIKE":"TB_VISITOR"),
			'period'	=> $period
		);

		$resGetDataStatistic = $this->dashboard_model->getDataStatistic($dataStore);
		foreach($resGetDataStatistic['data'] as $item){
			array_push($resDataStatistic['date'], $item->DATE);
			array_push($resDataStatistic['total'], $item->TOTAL);
		}

		echo json_encode($resDataStatistic);
	}

	public function dataPengguna(){
		$data['listData'] = $this->dashboard_model->getListData();
		$this->template_backend->view('admin/dataPengguna', $data);
	}

	function ubah_datapengguna(){

		$KODE_USER 				= $this->input->post('KODE_USER');

		if ($this->dashboard_model->ubah_datapengguna($KODE_USER) == TRUE){
			$this->session->set_flashdata('success', 'Berhasil mengubah data Pengguna: '.$NAMA.' !!');
			header('location:' . site_url('Pengguna'));
		}else{
			$this->session->set_flashdata('alert', 'Terjadi kesalahan saat mengubah data, coba lagi beberapa saat nanti !!');
			header('location:' . site_url('Pengguna'));
		}
	}

	function hapus_datapengguna(){

		$KODE_USER 				= $this->input->post('KODE_USER');

		if ($this->dashboard_model->hapus_datapengguna($KODE_USER) == TRUE){
			$this->session->set_flashdata('success', 'Berhasil menghapus data Pengguna: '.$NAMA.' !!');
			header('location:' . site_url('Pengguna'));
		}else{
			$this->session->set_flashdata('alert', 'Terjadi kesalahan saat menghapus data, coba lagi beberapa saat nanti !!');
			header('location:' . site_url('Pengguna'));
		}
	}

	public function Browser(){
		define('FM_EMBED', true);
		define('FM_SELF_URL',  $_SERVER['PHP_SELF']); // must be set if URL to manager not equal PHP_SELF
		require 'file_manager/tinyfilemanager.php';
	}

	public function Koordinator(){
		$data['Koordinator'] = $this->dashboard_model->get_koordinator();
		$this->template_backend->view('admin/uploader', $data);
	}

	function tambah_koordinator(){

		$NAMA 				= $this->input->post('NAMA');
		$EMAIL 				= $this->input->post('EMAIL');

		if ($this->dashboard_model->cek_email($EMAIL) == FALSE) {

			if ($this->dashboard_model->tambah_koordinator($ID_KARYA) == TRUE){
				$this->session->set_flashdata('success', 'Berhasil menambahkan data karya: '.$NAMA.' !!');
				header('location:' . site_url('Koordinator'));
			}else{
				$this->session->set_flashdata('alert', 'Terjadi kesalahan saat menambahkan data, coba lagi beberapa saat nanti !!');
				header('location:' . site_url('Koordinator'));
			}
		}else{
			$this->session->set_flashdata('alert', 'Email sudah digunakan !!');
			header('location:' . site_url('Koordinator'));
		}
	}

	function ubah_koordinator(){

		$KODE_USER 				= $this->input->post('KODE_USER');

		if ($this->dashboard_model->ubah_koordinator($KODE_USER) == TRUE){
			$this->session->set_flashdata('success', 'Berhasil mengubah data Koordinator: '.$NAMA.' !!');
			header('location:' . site_url('Koordinator'));
		}else{
			$this->session->set_flashdata('alert', 'Terjadi kesalahan saat mengubah data, coba lagi beberapa saat nanti !!');
			header('location:' . site_url('Koordinator'));
		}
	}

	function hapus_koordinator(){

		$KODE_USER 				= $this->input->post('KODE_USER');

		if ($this->dashboard_model->hapus_koordinator($KODE_USER) == TRUE){
			$this->session->set_flashdata('success', 'Berhasil menghapus data Koordinator: '.$NAMA.' !!');
			header('location:' . site_url('Koordinator'));
		}else{
			$this->session->set_flashdata('alert', 'Terjadi kesalahan saat menghapus data, coba lagi beberapa saat nanti !!');
			header('location:' . site_url('Koordinator'));
		}
	}

}
