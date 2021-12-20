<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karya extends CI_Controller {
	private $namafolder = '';

	public function __construct(){
		parent::__construct();
		$this->load->library('pagination');
		date_default_timezone_set("Asia/Jakarta");
		$this->load->model(['karya_model', 'home_model', 'pengaturan_model']);
	}

	public function index($page = 0){
		if ($this->session->userdata('ROLE') == 1 || $this->session->userdata('logged_in') == FALSE){
			if ($this->home_model->dev_status() == TRUE) {
				redirect('coming-soon');
			}
		}

		$config['base_url'] 				= base_url().'index.php/Karya/page';
		$config['total_rows'] 				= $this->home_model->c_karya();
		$config['per_page'] 				= 20;

		$config['full_tag_open'] 			= '<nav class="d-flex justify-content-center align-items-center" aria-label="Page navigation example"><ul class="pagination justify-content-center">';
		$config['full_tag_close'] 			= '</ul></nav>';

		$config['next_link'] 				= '&raquo';
		$config['next_tag_open'] 			= '<li class="page-item">';
		$config['next_tag_close'] 			= '</li>';

		$config['prev_link'] 				= '&laquo';
		$config['prev_tag_open'] 			= '<li class="page-item">';
		$config['prev_tag_close'] 			= '</li>';

		$config['cur_tag_open'] 			= '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] 			= '<span class="sr-only">(current)</span></a></li>';

		$config['num_tag_open'] 			= '<li class="page-item">';
		$config['num_tag_close'] 			= '</li>';

		$config['attributes']				= array('class' => 'page-link');

		$this->pagination->initialize($config);

		$data['karya'] 			= $this->home_model->karya_pagenation($config['per_page'], (!$this->uri->segment(2) ? 0 : $this->uri->segment(2)));
		$data['controller'] 			= $this;

		$data['kategori'] = $this->karya_model->get_kategori();

		$data['logo'] = $this->pengaturan_model->get_logo();
		$data['judul'] = $this->pengaturan_model->get_judul();

		$this->load->view('frontend_karya', $data);
		$this->load->view('karya', $data);
		$this->load->view('frontend_footer', $data);
	}

	public function page($page = 0){
		if ($this->session->userdata('ROLE') == 1 || $this->session->userdata('logged_in') == FALSE){
			if ($this->home_model->dev_status() == TRUE) {
				redirect('coming-soon');
			}
		}

		$config['base_url'] 				= base_url().'index.php/Karya/page';
		$config['total_rows'] 				= $this->home_model->c_karya();
		$config['per_page'] 				= 20;

		$config['full_tag_open'] 			= '<nav class="d-flex justify-content-center align-items-center" aria-label="Page navigation example"><ul class="pagination justify-content-center">';
		$config['full_tag_close'] 			= '</ul></nav>';

		$config['next_link'] 				= '&raquo';
		$config['next_tag_open'] 			= '<li class="page-item">';
		$config['next_tag_close'] 			= '</li>';

		$config['prev_link'] 				= '&laquo';
		$config['prev_tag_open'] 			= '<li class="page-item">';
		$config['prev_tag_close'] 			= '</li>';

		$config['cur_tag_open'] 			= '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] 			= '<span class="sr-only">(current)</span></a></li>';

		$config['num_tag_open'] 			= '<li class="page-item">';
		$config['num_tag_close'] 			= '</li>';

		$config['attributes']				= array('class' => 'page-link');

		$this->pagination->initialize($config);

		$data['karya'] 			= $this->home_model->karya_pagenation($config['per_page'], (!$this->uri->segment(3) ? 0 : $this->uri->segment(3)));
		$data['controller'] 			= $this;

		$data['kategori'] = $this->karya_model->get_kategori();

		$data['logo'] = $this->pengaturan_model->get_logo();
		$data['judul'] = $this->pengaturan_model->get_judul();

		$this->load->view('frontend_karya', $data);
		$this->load->view('karya', $data);
		$this->load->view('frontend_footer', $data);
	}

	public function history_karya(){

		$data['semester'] 						= $this->pengaturan_model->get_semester();
		$data['controller'] 			= $this;

		$data['kategori'] = $this->karya_model->get_kategori();
		$this->template_backend->view('admin/history_karya', $data);
	}

	public function list_karya($ID_SEMESTER){
		if ($this->karya_model->check_semester($ID_SEMESTER) == FALSE){
			$this->session->set_flashdata('alert', 'Gagal menampilkan daftar karya dengan kategori tersebut!!');
			redirect(site_url('HistoryKarya'));
		}else{
			$data['controller']	= $this;
			$data['semester'] = $this->karya_model->check_semester($ID_SEMESTER);
			$data['karya'] 		= $this->karya_model->list_karya($ID_SEMESTER);

			$this->template_backend->view('admin/list_karya', $data);
		}
	}

	public function semester_karya(){

		$data['karya'] 			= $this->home_model->karya();
		$data['controller'] 			= $this;

		$data['kategori'] = $this->karya_model->get_kategori();
		$this->template_backend->view('admin/karya', $data);
	}

	public function adminkarya(){

		$data['karya'] 			= $this->home_model->karya();
		$data['controller'] 			= $this;

		$data['kategori'] = $this->karya_model->get_kategori();
		$this->template_backend->view('admin/karya', $data);
	}

	public function AwalUpload(){
		if ($this->karya_model->get_kategori() == FALSE) {
			$this->session->set_flashdata('alert', 'Anda belum mengatur Kategori Karya!!');
			redirect(site_url('Pengaturan/Kategori'));
		}else{
			$data['controller']	= $this;
			$data['kategori'] = $this->karya_model->get_kategori();

			$this->template_backend->view('admin/karya_upload', $data);
		}
	}

	public function StatusKarya(){
		if ($this->input->post('cari_karya')) {
			$data['CariKarya'] = $this->karya_model->get_karyaCari($this->input->post('cari_karya'));
		}else{
			$data['CariKarya']	= null;
		}
		$data['karya'] = $this->karya_model->get_karyaPeserta($this->session->userdata('KODE_USER'));

		$this->template_backend->view('admin/status_karya', $data);
	}

	public function Tambah($ID_KATEGORI){
		if ($this->karya_model->get_kategori_one($ID_KATEGORI) == FALSE){
			$this->session->set_flashdata('alert', 'Gagal menampilkan daftar karya dengan kategori tersebut!!');
			redirect(site_url('AdminKarya'));
		}else{
			if ($this->karya_model->get_prodi() == FALSE){
				$this->session->set_flashdata('alert', 'Anda belum mengatur PRODI!!');
				redirect(site_url('Pengaturan/Prodi'));
			}else{
				$data['controller']	= $this;
				$data['kategori'] = $this->karya_model->get_kategori_one($ID_KATEGORI);
				$data['prodi']    = $this->karya_model->get_prodi();

				$this->template_backend->view('admin/karya_tambah', $data);
			}
		}
	}

	public function Edit($ID_KARYA){
		if ($this->karya_model->get_karya_single($ID_KARYA) == FALSE){
			$this->session->set_flashdata('alert', 'Gagal menampilkan daftar karya dengan kategori tersebut!!');
			redirect(site_url('AdminKarya'));
		}else{
			$data['controller']	= $this;
			$data['karya'] 			= $this->karya_model->get_karya_single($ID_KARYA);
			$data['foto'] 			= $this->karya_model->get_karya_foto($ID_KARYA);

			$data['prodi']    	= $this->karya_model->get_prodi();

			$this->template_backend->view('admin/karya_edit', $data);
		}
	}

	// public function EditKarya($ID_KARYA){
	// 	if ($this->karya_model->get_karya_foto($ID_KARYA) == FALSE){
	// 		$this->session->set_flashdata('alert', 'Gagal menampilkan data foto foto tersebut!!');
	// 		redirect(site_url('AdminKarya'));
	// 	}else{
	// 		$data['controller']	= $this;
	// 		$data['karya'] 			= $this->karya_model->get_karya_single($ID_KARYA);
	// 		$data['foto'] 			= $this->karya_model->get_karya_foto($ID_KARYA);

	// 		$this->template_backend->view('admin/karya_edit', $data);
	// 	}
	// }

	public function Daftar($ID_KATEGORI){
		if ($this->karya_model->get_kategori_one($ID_KATEGORI) == FALSE){
			$this->session->set_flashdata('alert', 'Gagal menampilkan daftar karya dengan kategori tersebut!!');
			redirect(site_url('AdminKarya'));
		}else{
			$data['controller']	= $this;
			$data['kategori'] = $this->karya_model->get_kategori_one($ID_KATEGORI);
			$data['karya'] 		= $this->karya_model->get_karya($ID_KATEGORI);
			// print_r($data['karya']);
			$this->template_backend->view('admin/karya_daftar', $data);
		}
	}

	public function detail($ID_KARYA){
		if ($this->home_model->dev_status() == TRUE){
			redirect('coming-soon');
		}else{
			if ($this->karya_model->get_karya_single($ID_KARYA) == FALSE){
				$this->session->set_flashdata('alert', 'Gagal menampilkan data karya tersebut!!');
				redirect($this->agent->referrer());
			}else{
				$data['controller']	= $this;
				$data['karya'] 			= $this->karya_model->get_karya_single($ID_KARYA);
				$data['foto'] 			= $this->karya_model->get_karya_foto($ID_KARYA);

				if ($this->session->userdata('logged_in') == FALSE || !$this->session->userdata('logged_in')){
					$KODE_USER = null;
				}else{
					$KODE_USER = $this->session->userdata('KODE_USER');
				}

				// $this->home_model->kunjungi($KODE_USER, $ID_KARYA);


				$data['logo'] = $this->pengaturan_model->get_logo();
				$data['judul'] = $this->pengaturan_model->get_judul();

				$this->load->view('frontend_karya', $data);
				$this->load->view('karya_detail', $data);
				$this->load->view('frontend_footer', $data);
			}
		}
	}

	public function Lihat($ID_KARYA){
		if ($this->karya_model->get_karya_single($ID_KARYA) == FALSE){
			$this->session->set_flashdata('alert', 'Gagal menampilkan data karya tersebut!!');
			redirect($this->agent->referrer());
		}else{
			$data['controller']	= $this;
			$data['karya'] 			= $this->karya_model->get_karya_single($ID_KARYA);
			$data['foto'] 			= $this->karya_model->get_karya_foto($ID_KARYA);
			$this->template_backend->view('admin/karya_lihat', $data);
		}
	}

	public function Upload(){
		$JUDUL  = $this->input->post('JUDUL');

		$vocal  = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U", " ");
		$scrap  = str_replace($vocal, "", $JUDUL);
		$begin  = substr($scrap, 0, 3);

		$chars 	= "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$uniqid 	= "";

		do {
			for ($i = 0; $i < 5; $i++){
				$uniqid      .= $chars[mt_rand(0, strlen($chars)-1)];
				$ID_KARYA 	= strtoupper($begin.'_'.$uniqid);
			}

		} while ($this->karya_model->karya_id($ID_KARYA) > 0);

		if ($this->karya_model->tambah_karya($ID_KARYA) == TRUE){

			if (!empty($_FILES['FOTO']['name'])) {

				$char = array('!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '+', '=', '|', ';', '.', '`', '~', '[', ']', '{', '}', '?', '/\s+/', ' ', '_');
				$namafolder = str_replace($char, '_', $JUDUL);
				// $namafolder = str_replace('__', '_', $namafolder);

				$folder = "berkas/karya/{$namafolder}/foto";

				if (!is_dir($folder)) {
					mkdir($folder, 0755, true);
				}
				$config['upload_path']          = $folder;
				$config['allowed_types']        = 'gif|jpg|png';
				$config['max_size']             = 10048;
				$config['overwrite'] 						= true;
				$this->load->library('upload', $config);

				$files = $_FILES['FOTO'];

				$images = array();

				foreach ($files['name'] as $key => $image) {
					$_FILES['FOTO[]']['name']= $files['name'][$key];
					$_FILES['FOTO[]']['type']= $files['type'][$key];
					$_FILES['FOTO[]']['tmp_name']= $files['tmp_name'][$key];
					$_FILES['FOTO[]']['error']= $files['error'][$key];
					$_FILES['FOTO[]']['size']= $files['size'][$key];

					$fileName = $namafolder.'-'.preg_replace("/[^a-zA-Z0-9.]/", "", $image);;

					$images[] = $fileName;

					$config['file_name'] = $fileName;

					$this->upload->initialize($config);

					if ($this->upload->do_upload('FOTO[]')) {
						$upload_data 	= $this->upload->data();
						$data = array('ID_KARYA' => $ID_KARYA, 'FOTO' => $upload_data['file_name']);
						$this->db->insert('TB_FOTO', $data);

						$data = array('FOLDER' => $namafolder);
						$this->db->where('ID_KARYA', $ID_KARYA);
						$this->db->update('TB_KARYA', $data);
					}
				}

				//OLD

				// $jml	 = count($_FILES['FOTO']['name']);
				// for($i = 0; $i < $jml; $i++){
				// 	if(!empty($_FILES['FOTO']['name'][$i])){
				// 		$_FILES['file']['name'] = $_FILES['FOTO']['name'][$i];
				// 		$_FILES['file']['type'] = $_FILES['FOTO']['type'][$i];
				// 		$_FILES['file']['tmp_name'] = $_FILES['FOTO']['tmp_name'][$i];
				// 		$_FILES['file']['error'] = $_FILES['FOTO']['error'][$i];
				// 		$_FILES['file']['size'] = $_FILES['FOTO']['size'][$i];
				//
				// 		if($this->upload->do_upload('file')){
				// 			$data = array('ID_KARYA' => $ID_KARYA, 'FOTO' => $_FILES['FOTO']['name'][$i]);
				// 			$this->db->insert('TB_FOTO', $data);
				// 		}
				// 	}
				// }
			}
			$ID_KATEGORI = $this->input->post('ID_KATEGORI');
			$this->session->set_flashdata('success', 'Berhasil menambahkan data karya <b>'.$JUDUL.'</b>!!');
			header('location:' . site_url('UploadKarya/'.$ID_KATEGORI));
		}else{
			$this->session->set_flashdata('alert', 'Terjadi kesalahan saat menambahkan data karya <b>'.$JUDUL.'</b>!!');
			header('location:' . site_url('Karya/UploadKarya'));
		}
	}

	function Ubah(){

		$JUDUL 				= $this->input->post('JUDUL');
		$ID_KARYA		 	= $this->input->post('ID_KARYA');
		$ID_KATEGORI 	= $this->input->post('ID_KATEGORI');
		$namafolder 	= $this->input->post('namafolder');

		if ($this->karya_model->edit_karya($ID_KARYA) == TRUE){

			if (!empty($_FILES['FOTO']['name']) || !empty($_FILES['FOTOA']['name'])) {

				$folder = "berkas/karya/{$namafolder}/foto";

				if (!is_dir($folder)) {
					mkdir($folder, 0755, true);
				}
				$config['upload_path']          = $folder;
				$config['allowed_types']        = 'gif|jpg|png';
				$config['max_size']             = 10048;
				$config['overwrite'] 						= true;
				$this->load->library('upload', $config);

				$ID_FOTO = $this->input->post('ID_FOTO', true);
				$files = $_FILES['FOTO'];
				$filesa = $_FILES['FOTOA'];

					// $this->db->where('KODE_UNIT', $KODE_UNIT);
					// $this->db->delete('TB_INVENTARISFOTO');

				$images = array();
				$imagesa = array();

				foreach ($files['name'] as $key => $image) {
					$_FILES['FOTO[]']['name']= $files['name'][$key];
					$_FILES['FOTO[]']['type']= $files['type'][$key];
					$_FILES['FOTO[]']['tmp_name']= $files['tmp_name'][$key];
					$_FILES['FOTO[]']['error']= $files['error'][$key];
					$_FILES['FOTO[]']['size']= $files['size'][$key];

					$fileName = $KODE_UNIT.'-'.preg_replace("/[^a-zA-Z0-9.]/", "", $image);;

					$images[] = $fileName;

					$config['file_name'] = $fileName;

					$this->upload->initialize($config);

					if ($this->upload->do_upload('FOTO[]')) {
						$upload_data 	= $this->upload->data();

						$data = array('ID_KARYA' => $ID_KARYA, 'FOTO' => $upload_data['file_name']);
						$this->db->where('ID_FOTO', isset($ID_FOTO[$key]) ? $ID_FOTO[$key] : '');
						$this->db->update('TB_FOTO', $data);
					}
				}

				foreach ($filesa['name'] as $keya => $imagea) {
					$_FILES['FOTOA[]']['name']= $filesa['name'][$keya];
					$_FILES['FOTOA[]']['type']= $filesa['type'][$keya];
					$_FILES['FOTOA[]']['tmp_name']= $filesa['tmp_name'][$keya];
					$_FILES['FOTOA[]']['error']= $filesa['error'][$keya];
					$_FILES['FOTOA[]']['size']= $filesa['size'][$keya];

					$fileNamea = $KODE_UNIT.'-'.preg_replace("/[^a-zA-Z0-9.]/", "", $imagea);;

					$imagesa[] = $fileNamea;

					$config['file_name'] = $fileNamea;

					$this->upload->initialize($config);

					if ($this->upload->do_upload('FOTOA[]')) {
						$upload_dataa 	= $this->upload->data();

						$data = array('ID_KARYA' => $ID_KARYA, 'FOTO' => $upload_dataa['file_name']);
						$this->db->insert('TB_FOTO', $data);
					}
				}
			}
			$this->session->set_flashdata('success', 'Berhasil mengubah data karya: '.$JUDUL.' !!');
			header('location:' . site_url('DaftarKarya/'.$ID_KATEGORI));
		}else{
			$this->session->set_flashdata('alert', 'Terjadi kesalahan saat mengubah data, coba lagi beberapa saat nanti !!');
			header('location:' . site_url('EditKarya/'.$ID_KARYA));
		}
	}

	public function UbahFoto(){
		$JUDUL  		= $this->input->post('JUDUL');
		$ID_KARYA   = $this->input->post('ID_KARYA');

		$namefile   = $this->input->post('filename');

		$vocal  = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U", " ");
		$scrap  = str_replace($vocal, "", $JUDUL);
		$begin  = substr($scrap, 0, 3);

		$chars 	= "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$uniqid 	= "";

		if (!empty($_FILES['FOTO']['name'])) {

			$char = array('!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '+', '=', '|', ';', '.', '`', '~', '[', ']', '{', '}', '?', '/\s+/', ' ');
			$namafolder = str_replace($char, '_', $JUDUL);
			$namafolder = str_replace('__', '_', $namafolder);

			$folder = "berkas/karya/{$namafolder}/foto";

			$file   = $folder."/".$namefile;

			unlink($file);

			if (!is_dir($folder)) {
				mkdir($folder, 0755, true);
			}

			$config['upload_path']          = $folder;
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 10048;
			$config['overwrite'] 						= true;
			$this->load->library('upload', $config);

			$fileName = $namafolder.'-'.preg_replace("/[^a-zA-Z0-9.]/", "", $image);;

			$images[] = $fileName;

			$config['file_name'] = $fileName;

			$this->upload->initialize($config);

			if ($this->upload->do_upload('FOTO')) {
				$upload_data 	= $this->upload->data();
				$data = array('ID_KARYA' => $ID_KARYA, 'FOTO' => $upload_data['file_name']);
				$this->db->where('ID_FOTO', $ID_FOTO);
				$this->db->update('TB_FOTO', $data);
				echo "string";
				// $this->session->set_flashdata('alert', 'Terjadi kesalahan saat menambahkan data karya <b>'.$JUDUL.'</b>!!');
				// header('location:' . site_url('Karya/UploadKarya'));
			} else {
				// $this->session->set_flashdata('alert', 'Terjadi kesalahan saat menambahkan data karya <b>'.$JUDUL.'</b>!!');
				// header('location:' . site_url('Karya/UploadKarya'));
			}
		}

		//OLD

		// $jml	 = count($_FILES['FOTO']['name']);
		// for($i = 0; $i < $jml; $i++){
		// 	if(!empty($_FILES['FOTO']['name'][$i])){
		// 		$_FILES['file']['name'] = $_FILES['FOTO']['name'][$i];
		// 		$_FILES['file']['type'] = $_FILES['FOTO']['type'][$i];
		// 		$_FILES['file']['tmp_name'] = $_FILES['FOTO']['tmp_name'][$i];
		// 		$_FILES['file']['error'] = $_FILES['FOTO']['error'][$i];
		// 		$_FILES['file']['size'] = $_FILES['FOTO']['size'][$i];
		//
		// 		if($this->upload->do_upload('file')){
		// 			$data = array('ID_KARYA' => $ID_KARYA, 'FOTO' => $_FILES['FOTO']['name'][$i]);
		// 			$this->db->insert('TB_FOTO', $data);
		// 		}
		// 	}
		// }
	}

	function vote($ID_KARYA){
		if ($this->session->userdata('logged_in') == TRUE) {
			$KODE_USER = $this->session->userdata('KODE_USER');
			if ($this->karya_model->cek_vote($ID_KARYA, $KODE_USER) == TRUE) {
				if ($this->karya_model->vote($ID_KARYA, $KODE_USER) == TRUE){
					$this->session->set_flashdata('success', 'Berhasil like karya tersebut !!');
					header('location:' . site_url('DetailKarya/'.$ID_KARYA));
				}else{
					$this->session->set_flashdata('alert', 'Terjadi kesalahan saat like karya tersebut, coba lagi beberapa saat nanti !!');
					header('location:' . site_url('DetailKarya/'.$ID_KARYA));
				}
			}else{
				$this->session->set_flashdata('alert', 'Anda telah like karya tersebut !!');
				header('location:' . site_url('EditKarya/'.$ID_KARYA));
			}
		}else{
			if (!empty($_SERVER['QUERY_STRING'])) {
				$uri = uri_string() . '?' . $_SERVER['QUERY_STRING'];
			} else {
				$uri = uri_string();
			}
			$this->session->unset_userdata('redirect');
			$this->session->set_userdata('redirect', $uri);
			$this->session->set_flashdata('alert', 'Anda harus login terlebih dahulu !!');
			header('location:' . site_url('Masuk'));
		}
	}

	function BuangAnggota($ID_KARYA){

		$NAMA = $this->input->post('NAMA');

		if ($this->karya_model->buang_anggota() == TRUE){
			$this->session->set_flashdata('success', 'Berhasil menghapus data anggota: '.$NAMA.' !!');
			header('location:' . site_url('EditKarya/'.$ID_KARYA));
		}else{
			$this->session->set_flashdata('alert', 'Terjadi kesalahan saat menghapus data anggota, coba lagi beberapa saat nanti !!');
			header('location:' . site_url('EditKarya/'.$ID_KARYA));
		}
	}

	function hapus($ID_KATEGORI){

		$JUDUL = $this->input->post('JUDUL');

		if ($this->karya_model->hapus_karya() == TRUE){
			$this->session->set_flashdata('success', 'Berhasil menghapus data karya: '.$JUDUL.' !!');
			header('location:' . site_url('DaftarKarya/'.$ID_KATEGORI));
		}else{
			$this->session->set_flashdata('alert', 'Terjadi kesalahan saat menghapus data, coba lagi beberapa saat nanti !!');
			header('location:' . site_url('DaftarKarya/'.$ID_KATEGORI));
		}
	}
	function verif($ID_KATEGORI){

		$JUDUL = $this->input->post('JUDUL');

		if ($this->karya_model->verif_karya() == TRUE){
			$this->session->set_flashdata('success', 'Berhasil verifikasi data karya: '.$JUDUL.' !!');
			header('location:' . site_url('DaftarKarya/'.$ID_KATEGORI));
		}else{
			$this->session->set_flashdata('alert', 'Terjadi kesalahan saat verifikasi data, coba lagi beberapa saat nanti !!');
			header('location:' . site_url('DaftarKarya/'.$ID_KATEGORI));
		}
	}

	function hapus_karya_pilih($ID_KATEGORI){
		$data = count(array($this->input->post('msg')));
		if ($data > 0) {
			if ($this->karya_model->hapus_karya_pilih() == TRUE){
				$this->session->set_flashdata('success', 'Berhasil menghapus '.$data.' data !!');
				header('location:' . site_url('DaftarKarya/'.$ID_KATEGORI));
			}else{
				$this->session->set_flashdata('alert', 'Terjadi kesalahan saat menghapus data, coba lagi beberapa saat nanti !!');
				header('location:' . site_url('DaftarKarya/'.$ID_KATEGORI));
			}
		}else{
			$this->session->set_flashdata('alert', 'Anda tidak memilih satupun data untuk dihapus !!');
			header('location:' . site_url('DaftarKarya/'.$ID_KATEGORI));
		}
	}

}
