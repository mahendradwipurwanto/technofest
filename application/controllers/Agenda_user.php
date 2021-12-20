<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda_user extends CI_Controller {
  public function __construct(){
    parent::__construct();
    date_default_timezone_set("Asia/Jakarta");

    $this->load->model(['agenda_model']);
  }

  public function detail($id){
    if ($this->agenda_model->get_agenda_one($id) == TRUE) {
      $data['agenda'] = $this->agenda_model->get_agenda_one($id);
      $data['controller'] = $this;
      $this->template_frontend->view('agenda_detail', $data);
    }else {
      $this->session->set_flashdata('alert', "Tidak dapat menampilkan data agenda!");
      redirect($this->agent->referrer());
    }
  }

}
