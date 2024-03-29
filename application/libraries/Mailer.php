<?php defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Mailer{
  public function __construct(){
    log_message('Debug', 'PHPMailer class is loaded.');
    $this->_ci = &get_instance();
    $this->_ci->load->database();
  }

  public function send($data){
    // Include PHPMailer library files
    require_once APPPATH.'third_party/PHPMailer/Exception.php';
    require_once APPPATH.'third_party/PHPMailer/PHPMailer.php';
    require_once APPPATH.'third_party/PHPMailer/SMTP.php';

    $mail = new PHPMailer(true);

    // SMTP configuration
    $mail->isSMTP();
    $mail->SMTPDebug  = 1;
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPKeepAlive = TRUE;
    $mail->SMTPSecure = "ssl";
    $mail->Port       = 465;
    $mail->Host       = "mail.nestivent.org";
    $mail->Username   = "support@nestivent.org";
    $mail->Password   = "?v8lRT,nfDiM";

    $mail->setFrom("support@nestivent.org", "Technofest");
    $mail->addReplyTo("support@nestivent.org", "Technofest");

    // Add a recipient
    $mail->addAddress($data['to']);

    // Email subject
    $mail->Subject = $data['subject'];

    // Set email format to HTML
    $mail->isHTML(true);
    // Email body content
    $mail->Body = $data['message'];

    // Send email
    if (!$mail->send()) {
			echo 'Message could not be sent. <br>';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
			echo '<br>Contact ADMIN ';
			die();
      return false;
    } else {
      return true;
    }
    $mail->clearAddresses();
    $mail->clearAttachments();
  }

}
?>
