<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {
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

    $this->load->model(['agenda_model']);
  }

  public function index(){
    $data['agenda'] = $this->agenda_model->get_agenda();
    $this->template_backend->view('admin/agenda', $data);
  }

  public function detail($id){
    if ($this->agenda_model->get_agenda_one($id) == TRUE) {
      $data['agenda'] = $this->agenda_model->get_agenda_one($id);
      $this->template_backend->view('agenda_detail', $data);
    }else {
      $this->session->set_flashdata('alert', "Tidak dapat menampilkan data agenda!");
      redirect($this->agent->referrer());
    }
  }

  public function Tambah(){
    $this->template_backend->view('admin/agenda_tambah');
  }

  public function Edit($ID_AGENDA){
    if ($this->agenda_model->get_agenda_one($ID_AGENDA) == FALSE) {
      $this->session->set_flashdata('alert', 'Gagal menampilkan data agenda tersebut!!');
      redirect(site_url('Agenda'));
    }else{
      $data['agenda'] = $this->agenda_model->get_agenda_one($ID_AGENDA);
      $this->template_backend->view('admin/agenda_edit', $data);
    }
  }

  public function Tambah_agenda(){
    $JUDUL  = $this->input->post('JUDUL');

    $vocal  = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U", " ");
    $scrap  = str_replace($vocal, "", $JUDUL);
    $begin  = substr($scrap, 0, 3);

    $chars  = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $uniqid   = "";

    do {
      for ($i = 0; $i < 5; $i++) {
        $uniqid      .= $chars[mt_rand(0, strlen($chars)-1)];
        $ID_AGENDA  = strtoupper($begin.'_'.$uniqid);
      }

    } while ($this->agenda_model->agenda_id($ID_AGENDA) > 0);

    if (!empty($_FILES['POSTER']['name'])) {
      $folder = "berkas/agenda/{$ID_AGENDA}/poster";

      $path       = $_FILES['POSTER']['name'];
      $ext        = pathinfo($path, PATHINFO_EXTENSION);
      $filename   = "poster_{$ID_AGENDA}.{$ext}";

      $config['file_name']      = $filename;
      
      if($ext == "png" || $ext == "jpg" || $ext == "jpeg" || $ext == "gif" ||){
        
        if (!is_dir($folder) || !file_exists($folder."/".$filename)) {
          mkdir($folder, 0755, true);
        }

        $config['upload_path']    = $folder;
        $config['allowed_types']  = 'png|jpg|jpeg|PNG|JPG|JPEG|gif|GIF';
        $config['max_size']       = 2048;
        $config['overwrite']      = true;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ( ! $this->upload->do_upload('POSTER')){
          $this->session->set_flashdata('alert', 'Gagal mengupload POSTER<br><span class="text-danger">'.$this->upload->display_errors().'</span> !!');
          header('location:' . site_url('Agenda/Tambah'));
        }else{
          if ($this->agenda_model->tambah_agenda($ID_AGENDA, $filename) == TRUE) {
            $this->session->set_flashdata('success', 'Berhasil menambahkan data agenda <b>'.$JUDUL.'</b>!!');
            header('location:' . site_url('Agenda'));
          }else{
            $this->session->set_flashdata('alert', 'Terjadi kesalahan saat menambahkan data agenda <b>'.$JUDUL.'</b>!!');
            header('location:' . site_url('Agenda/Tambah'));
          }
        }
      }else{
        $this->session->set_flashdata('alert', 'Hanya diperbolehkan png, jpg, jpeg atau gif untuk file poster <b>'.$JUDUL.'</b>!!');
        header('location:' . site_url('Agenda/Tambah'));
      }
    }else {
      if ($this->agenda_model->tambah_agenda($ID_AGENDA, null) == TRUE) {
        $this->session->set_flashdata('success', 'Berhasil menambahkan data agenda <b>'.$JUDUL.'</b>!!');
        header('location:' . site_url('Agenda'));
      }else{
        $this->session->set_flashdata('alert', 'Terjadi kesalahan saat menambahkan data agenda <b>'.$JUDUL.'</b>!!');
        header('location:' . site_url('Agenda/Tambah'));
      }
    }
  }

  public function edit_agenda(){
    $JUDUL      = $this->input->post('JUDUL');
    $ID_AGENDA  = $this->input->post('ID_AGENDA');

    if (!empty($_FILES['POSTER']['name'])) {
      $folder = "berkas/agenda/{$ID_AGENDA}/poster";

      $path       = $_FILES['POSTER']['name'];
      $ext        = pathinfo($path, PATHINFO_EXTENSION);
      $filename   = "poster_{$ID_AGENDA}.{$ext}";

      $config['file_name']      = $filename;

      if (!is_dir($folder) || !file_exists($folder."/".$filename)) {
        mkdir($folder, 0755, true);
      }

      $config['upload_path']    = $folder;
      $config['allowed_types']  = '*';
      $config['max_size']       = 2048;
      $config['overwrite']      = true;

      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if ( ! $this->upload->do_upload('POSTER')){
        $this->session->set_flashdata('alert', 'Gagal mengupload POSTER<br><span class="text-danger">'.$this->upload->display_errors().'</span> !!');
        header('location:' . site_url('Agenda/Edit/'.$ID_AGENDA));
      }
      else{
        if ($this->agenda_model->edit_agenda($ID_AGENDA, $filename) == TRUE) {
          $this->session->set_flashdata('success', 'Berhasil mengubah data agenda <b>'.$JUDUL.'</b>!!');
          header('location:' . site_url('Agenda'));
        }else{
          $this->session->set_flashdata('alert', 'Terjadi kesalahan saat mengubah data agenda <b>'.$JUDUL.'</b>!!');
          header('location:' . site_url('Agenda/Edit/'.$ID_AGENDA));
        }
      }echo "error: ".$folder."<br>".$this->upload->display_errors();
    }else {
      echo "string";
      if ($this->agenda_model->edit_agenda($ID_AGENDA, null) == TRUE) {
        $this->session->set_flashdata('success', 'Berhasil mengubah data agenda <b>'.$JUDUL.'</b>!!');
        header('location:' . site_url('Agenda'));
      }else{
        $this->session->set_flashdata('alert', 'Terjadi kesalahan saat mengubah data agenda <b>'.$JUDUL.'</b>!!');
        header('location:' . site_url('Agenda/Edit/'.$ID_AGENDA));
      }
    }
  }

  public function Hapus_agenda(){
    $JUDUL      = $this->input->post('JUDUL');
    $ID_AGENDA  = $this->input->post('ID_AGENDA');
    if ($this->agenda_model->Hapus_agenda($ID_AGENDA) == TRUE) {
      $this->session->set_flashdata('success', 'Berhasil menghapus data agenda <b>'.$JUDUL.'</b>!!');
      header('location:' . site_url('Agenda'));
    }else{
      $this->session->set_flashdata('alert', 'Terjadi kesalahan saat menghapus data agenda <b>'.$JUDUL.'</b>!!');
      header('location:' . site_url('Agenda'));
    }
  }

  public function tinymce_upload() {
    $config['upload_path'] = base_url().'berkas/post/';
    $config['allowed_types'] = '*';
    $config['max_size'] = 0;
    $config['file_name'] = date("dmY_His");
    $this->load->library('upload', $config);
    if ( ! $this->upload->do_upload('file')) {
      $this->output->set_header('HTTP/1.0 500 Server Error');
      exit;
    } else {
      $file = $this->upload->data();
      $this->output
      ->set_content_type('application/json', 'utf-8')
      ->set_output(json_encode(['location' => base_url().'berkas/post/'.$file['file_name']]))
      ->_display();
      exit;
    }
  }

}
