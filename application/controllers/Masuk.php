<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller {
	public function __construct(){
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->model(['masuk_model', 'home_model']);
	}

	public function dev_mode(){
		$this->load->view('dev_mode');
	}

	public function index(){

		if ($this->input->post('email')) {
			if ($this->masuk_model->cek_email($this->input->post('email')) == TRUE) {
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
				$this->load->view('dev_masuk');
			}
		}else{
			$this->template_frontend->view('masuk');
		}
	}

	public function Daftar(){
		if ($this->session->userdata('ROLE') == 2 || $this->session->userdata('logged_in') == FALSE){
			if ($this->home_model->dev_status() == TRUE) {
				redirect('coming-soon');
			}
		}else{

			if ($this->input->post('nama')) {

				$cek_email = $this->masuk_model->cek_email($this->input->post("email"));

				if ($cek_email == FALSE) {
					if ($this->input->post("password") == $this->input->post("repassword")) {

						do {
							$kode = "USER_".substr(md5(time()), 0, 5);
						} while ($this->masuk_model->cek_kode($kode) > 0);

						$nama 				= $this->input->post("nama");
						$email 				= $this->input->post("email");
						$kampus 			= $this->input->post("kampus");
						$telepon 			= $this->input->post("telepon");
						$password 		= $this->input->post("password");

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
	}

	// public function sendToken($email, $KODE_USER, $nama){
	// 	if ($this->masuk_model->cek_status($email) == TRUE) {
	// 		$this->session->set_flashdata('alert', 'Akun anda telah aktif, anda tidak perlu melakukan proses aktivasi akun !!');
	// 		header('location:' . site_url('Masuk'));
	// 	}else{
	// 		$datatoken = $this->masuk_model->get_token($email);
	//
	// 		if($datatoken){
	// 			$token = $datatoken->token;
	//
	// 		} else {
	//
	// 			$token = bin2hex(random_bytes(32));
	// 			$datatoken = [
	// 				'email' => $email,
	// 				'token' => $token,
	// 				'date_created' => time()
	// 			];
	//
	// 			$this->masuk_model->save_token($datatoken);
	// 		}
	// 		$subject = 'Aktivasi Akun TechnoFest Anda';
	// 		$message = '<div style="margin: 0; padding: 0;">
	// 		<style type="text/css">
	// 		a[x-apple-data-detectors] {color: inherit !important;}
	// 		</style>
	//
	// 		<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
	// 		<tr>
	// 		<td style="padding: 20px 0 30px 0;">
	//
	// 		<table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse; border: 1px solid #cccccc;">
	// 		<tr>
	// 		<td align="center" bgcolor="#70bbd9" style="padding: 40px 0 30px 0;">
	// 		</td>
	// 		</tr>
	// 		<tr>
	// 		<td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
	// 		<table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
	// 		<tr>
	// 		<td style="color: #153643; font-family: Arial, sans-serif;">
	// 		<h1 style="font-size: 24px; margin: 0;">'.$subject.'!</h1>
	// 		</td>
	// 		</tr>
	// 		<tr>
	// 		<td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0 30px 0;">
	// 		<p style="margin: 0;">
	// 		Anda telah melakukan pendaftaran akun TechnoFest dengan:
	// 		</p>
	// 		<table width="100%">
	// 		<tr>
	// 		<td><b>USER ID</b></td>
	// 		<td>: '.$KODE_USER.'</td>
	// 		</tr>
	// 		<tr>
	// 		<td><b>Email</b></td>
	// 		<td>: '.$email.'</td>
	// 		</tr>
	// 		</table>
	// 		<p>Silakan lakukan verifikasi akun dengan klik tautan berikut ini:
	// 			</p>
	// 			</td>
	// 			</tr>
	// 			<tr>
	// 			<td>
	// 			<table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
	// 			<tr>
	// 			<td valign="top" style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0 30px 0;">
	//
	// 			Tautan akan valid selama 24 jam. Jika Anda merasa tidak melakukan pendaftaran TechnoFest, Anda dapat mengabaikan email ini.<br><br>
	//
	// 			<div style="border:none;padding:0;margin:0;text-align:center;line-height:0">
	//
	// 			<a href="'.base_url().'activate?email='.$email.'&token='.$token.'" style="text-decoration:none;color:#ffffff;margin-left:auto;margin-right:auto;max-width:240px;background-color:#1db954;border-radius:24px;display:block" target="_blank" data-saferedirecturl="'.base_url().'activate?email='.$email.'&token='.$token.'"><table style="border-collapse:collapse;padding:0;width:100%;max-width:240px;height:48px"><tbody style="border:none;padding:0;margin:0"><tr style="border:none;margin:0px;padding:0px"><td style="border:none;padding:0;margin:0;width:24px"></td><td style="border:none;padding:0;margin:0;font-family:&quot;circular&quot;,&quot;helvetica neue&quot;,&quot;helvetica&quot;,&quot;arial&quot;,sans-serif;font-weight:700;line-height:1.1em;letter-spacing:0.15px;font-size:14px;text-decoration:none;text-align:center;text-transform:uppercase;color:#ffffff">AKTIVASI AKUN SEKARANG</td><td style="border:none;padding:0;margin:0;width:24px"></td></tr></tbody></table></a>
	// 			</div><br>
	//
	// 			Atau klik link berikut ini <a href="'.base_url().'activate?email='.$email.'&token='.$token.'">'.base_url().'activate?email='.$email.'&token='.$token.'</a><br><br>
	//
	// 			Terima kasih. <br><br>
	//
	// 			Salam,<br>
	// 			ADMIN MAMAMOORENTAL<br>
	// 			<a href="https://technofest.stiki.ac.id/" target="_blank">www.technofest.stiki.ac.id</a><br>
	// 			</td>
	// 			</tr>
	// 			</table>
	// 			</td>
	// 			</tr>
	// 			</table>
	// 			</td>
	// 			</tr>
	// 			<tr>
	// 			<td bgcolor="#70bbd9" style="padding: 30px 30px;">
	// 			<table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
	// 			<tr>
	// 			<td style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;">
	// 			<p style="margin: 0;">&reg; MAMAMOORENTAL @ 2020<br/>
	// 			</td>
	// 			</tr>
	// 			</table>
	// 			</td>
	// 			</tr>
	// 			</table>
	//
	// 			</td>
	// 			</tr>
	// 			</table>
	// 			</div>';
	//
	// 			if ($this->send($email,$subject, $message) == TRUE) {
	// 				return TRUE;
	// 			}else {
	// 				return FALSE;
	// 			}
	// 		}
	// 	}

	// public function send($to, $subject, $message){
	// 	// Load PHPMailer library
	// 	$this->load->library('phpmailer_lib');
	//
	// 	// PHPMailer object
	// 	$mail = $this->phpmailer_lib->load();
	//
	// 	// SMTP configuration
	// 	$mail->isSMTP();
	// 	$mail->SMTPDebug  = FALSE;
	// 	$mail->SMTPAuth   = TRUE;
	// 	$mail->SMTPSecure = "tls";
	// 	$mail->Port       = 587;
	// 	$mail->Host       = "smtp.gmail.com";
	// 	$mail->Username   = 'mail.technofest@gmail.com';
	// 	$mail->Password   = 'technofest20@!';
	//
	// 	$mail->setFrom('mail.technofest@gmail.com','no-reply - TechnoFest');
	// 	$mail->addReplyTo('mail.technofest@gmail.com','no-reply - TechnoFest');
	//
	// 	// Add a recipient
	// 	$mail->addAddress($to);
	//
	// 	// Email subject
	// 	$mail->Subject = $subject;
	//
	// 	// Set email format to HTML
	// 	$mail->isHTML(true);
	// 	// Email body content
	// 	$mail->Body = $message;
	//
	// 	// Send email
	// 	if(!$mail->send()){
	// 		echo 'Message could not be sent. <br>';
	// 		echo 'Mailer Error: ' . $mail->ErrorInfo;
	// 		echo '<br>Contact ADMIN ';
	// 		die();
	// 		return false;
	// 	}else{
	// 		return true;
	// 	}
	// }


	public function logout(){
		$this->session->sess_destroy();
		$this->session->set_flashdata('success','Berhasil keluar!');
		header('location:' . base_url());
	}

}
