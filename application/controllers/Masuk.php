<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller {
	public function __construct(){
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->model(['masuk_model', 'home_model', 'pengaturan_model']);
		$this->load->library('mailer');
	}

	public function test(){
		echo $this->encryption->encrypt($this->input->post("email"));
	}

	public function dev_mode(){

		$data['logo'] = $this->pengaturan_model->get_logo();
		$data['judul'] = $this->pengaturan_model->get_judul();

		$this->load->view('dev_mode', $data);
	}

	public function lupa_pass(){
		$this->template_frontend->view('lupa-pass');
	}

	public function proses_lupa(){
		if ($this->masuk_model->cek_akun(htmlspecialchars($this->input->post("email"), TRUE)) == TRUE) {

			$this->db->where("email", htmlspecialchars($this->input->post('email'), TRUE));
			$this->db->delete("TB_TOKEN");

			do {
				$token = bin2hex(random_bytes(32));
			} while ($this->masuk_model->cek_token($token) == TRUE);

			$data = array(
				'EMAIL' => htmlspecialchars($this->input->post("email"), TRUE),
				'TOKEN' => $token,
				'DATE_CREATED' => time()
			);

			$this->db->insert("TB_TOKEN", $data);

			if ($this->send_token(htmlspecialchars($this->input->post("email"), TRUE), $token) == TRUE) {
				$this->session->set_flashdata('success', 'Berhasil mengirimkan email, cek kontak masuk atau folder spam anda');
				redirect(site_url('Lupa-pass'));
			}else {
				$this->session->set_flashdata('error', 'Terjadi kesalahan saat mengirimkan token recovery pass ke email anda !!');
				redirect($this->agent->referrer());
			}
		}else {
			$this->session->set_flashdata('error', 'Tidak dapat menemukan akan dengan email <b>'.htmlspecialchars($this->input->post("email"), TRUE).'</b> !!');
			redirect($this->agent->referrer());
		}
	}

	public function ubah_pass($token){

		if ($this->masuk_model->cek_token($token) == TRUE) {

			$user = $this->masuk_model->get_token($token);

			$data['email']	= $user->EMAIL;
			$data['token']	= $token;

			$this->template_frontend->view('reset-pass', $data);

		}else {
			$this->session->set_flashdata('error', 'Token tidak dikenali, harap lakukan proses recovery akun ulang jika hal ini masih terjadi');
			redirect(site_url('Masuk'));
		}

	}

	public function reset_pass(){

		$data = array('PASSWORD' => password_hash(htmlspecialchars($this->input->post("password"), TRUE), PASSWORD_DEFAULT));

		$this->db->where("EMAIL", htmlspecialchars($this->input->post("email"), TRUE));
		$this->db->update('TB_AUTH', $data);

		$this->session->set_flashdata('success', 'Berhasil mereset password anda, harap masuk menggunakan hak akses baru anda');
		redirect(site_url('Masuk'));
	}


	function send_token($email, $token){

		$message = "Hai, kami mendapatkan permintaan recovery password atas akun dengan email <b>{$email}</b>.<br> Harap klik link berikut untuk melanjutkan proses recovery password! <br><hr>".base_url()."index.php/Recovery-password/".$token;

		$mail = array(
			'to' 				=> $email,
			'subject'		=> "RESET PASSWORD AKUN TECHNOFEST",
			'message'		=> $message
		);

		if ($this->mailer->send($mail) == TRUE) {
			return true;
		}else {
			return false;
		}
	}

	public function hash(){
		echo password_hash("technoSTIKI!@#$", PASSWORD_DEFAULT);
	}

	public function index(){

		if (htmlspecialchars($this->input->post('email'), TRUE)) {
			if ($this->masuk_model->cek_email(htmlspecialchars($this->input->post('email'), TRUE)) == TRUE) {
				// technoSTIKI!@#$ <- ADMIN PASS
				$email		= htmlspecialchars($this->input->post('email'), TRUE);
				$pass 		= htmlspecialchars($this->input->post('password'), TRUE);

				$pengguna	= $this->masuk_model->get_pengguna($email);

				if (password_verify($pass, $pengguna->PASSWORD)) {

					$nama = $pengguna->NAMA;

					$sessiondata = array(
						'KODE_USER' 		=> $pengguna->KODE_USER,
						'EMAIL'	    		=> $email,
						'NAMA' 					=> $pengguna->NAMA,
						'ROLE' 					=> $pengguna->ROLE,
						'logged_in' 		=> TRUE
					);

					$this->session->set_userdata($sessiondata);
					if ($pengguna->ROLE == 0 || $pengguna->ROLE == 2) {
						if ($this->session->userdata('redirect')) {
							$this->session->set_flashdata('success', 'Selamat datang kembali, silahkan melanjutkan aktivitas anda !!');
							redirect($this->session->userdata('redirect'));
						} else {
							$this->session->set_flashdata('success', 'Selamat datang');
							header('location:' . site_url('Dashboard'));
						}
					}elseif ($pengguna->ROLE == 1) {
						if ($this->session->userdata('redirect')) {
							$this->session->set_flashdata('success', 'Selamat datang kembali, silahkan melanjutkan aktivitas anda !!');
							// redirect($this->session->userdata('redirect'));
							redirect('UploadKarya');
						} else {
							$this->session->set_flashdata('success', 'Selamat Datang');
							redirect('UploadKarya');
							// header('location:' . base_url());
						}
					}
				}else{
					$this->session->set_flashdata('error', 'Password anda salah, harap masukkan password dengan benar!!');
					header('location:' . site_url('Masuk'));
				}
			}else {
				$this->session->set_flashdata('error', 'Email '.$this->input->post('email').' tidak terdaftar, Harap gunakan email yang terdaftar atau daftarkan akun atas nama email ini!!');
				header('location:' . site_url('Masuk'));
			}
		}

		if ($this->home_model->dev_status() == TRUE) {
			if ($this->session->userdata('logged_in') == TRUE || $this->session->userdata('logged_in')){
				if ($this->session->userdata('redirect')) {
					$this->session->set_flashdata('success', 'Selamat datang kembali, silahkan melanjutkan aktivitas anda !!');
					redirect($this->session->userdata('redirect'));
				} else {
					$this->session->set_flashdata('success', 'Selamat datang');
					header('location:' . site_url('Dashboard'));
				}
			}else{

				$data['logo'] = $this->pengaturan_model->get_logo();
				$data['judul'] = $this->pengaturan_model->get_judul();

				$this->load->view('dev_masuk', $data);
			}
		}else{
			$this->template_frontend->view('masuk');
		}
	}

	public function Daftar(){
		if ($this->home_model->dev_status() == TRUE) {
			redirect('coming-soon');
		}

		if (htmlspecialchars($this->input->post('nama'), TRUE)) {

			$cek_email = $this->masuk_model->cek_email(htmlspecialchars($this->input->post("email"), TRUE));

			if ($cek_email == FALSE) {
				if (htmlspecialchars($this->input->post("password"), TRUE) == htmlspecialchars($this->input->post("repassword"), TRUE)) {

					do {
						$kode = "USER_".substr(md5(time()), 0, 5);
					} while ($this->masuk_model->cek_kode($kode) > 0);

					$nama 				= htmlspecialchars($this->input->post("nama"), TRUE);
					$email 				= htmlspecialchars($this->input->post("email"), TRUE);
					$kampus 			= htmlspecialchars($this->input->post("kampus"), TRUE);
					$telepon 			= htmlspecialchars($this->input->post("telepon"), TRUE);
					$password 		= htmlspecialchars($this->input->post("password"), TRUE);

					$dataStore = array(
						'KODE_USER' 		=> $kode,
						'NAMA' 					=> $nama,
						'EMAIL'					=> $email,
						'HP' 						=> $telepon,
						'ASAL_KAMPUS' 	=> $kampus,
						'PASSWORD' 			=> password_hash($password, PASSWORD_DEFAULT),
						'ROLE'					=> 1,
					);

					if ($this->masuk_model->postData($dataStore) == TRUE) {
						$this->send_pendaftaran($email);

						$this->session->set_flashdata('success', 'Berhasil mendaftarkan akun anda, Anda dapat masuk sekarang!!');
						header('location:' . site_url('Masuk'));
					}else{
						$this->session->set_flashdata('error', 'Gagal mendaftarkan akun anda, Coba lagi nanti. Jika hal ini masih terjadi, harap hubungi kami!!');
						header('location:' . site_url('Daftar'));
					}

				}else {
					$this->session->set_flashdata('error', 'Password konfirmasi salah, Harap masukkan password konfirmasi dengan benar!!');
					header('location:' . site_url('Daftar'));
				}
			}else {
				$this->session->set_flashdata('error', 'Email telah digunakan, Harap gunakan email lain!!');
				header('location:' . site_url('Daftar'));
			}
		}
		$this->template_frontend->view('daftar');
	}

	function send_pendaftaran($email){

		$message = "Hai, selamat kamu telah melakukan pendaftaran atas akun dengan email <b>{$email}</b> pada technofest.stiki.ac.id.<br> Klik link berikut untuk masuk ke akun anda <br><hr>".base_url()."Masuk";

		$mail = array(
			'to' 				=> $email,
			'subject'		=> "PENDAFTARAN AKUN TECHNOFEST",
			'message'		=> $message
		);

		if ($this->mailer->send($mail) == TRUE) {
			return true;
		}else {
			return false;
		}
	}


	public function logout(){
		$this->session->sess_destroy();
		$this->session->set_flashdata('success','Berhasil keluar!');
		header('location:' . base_url());
	}

}
