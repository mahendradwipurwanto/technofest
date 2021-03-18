<?php

class Agenda_model extends CI_Model {

  public function get_agenda(){
    $query = $this->db->query("SELECT * FROM TB_AGENDA WHERE ID_SEMESTER IN (SELECT ID_SEMESTER FROM TB_SEMESTER WHERE STATUS =1)");
    if ($query->num_rows() > 0) {
      return $query->result();
    }else {
      return FALSE;
    }
  }

  public function get_agenda_one($ID_AGENDA){
    $query = $this->db->query("SELECT * FROM TB_AGENDA WHERE ID_AGENDA = '$ID_AGENDA' AND ID_SEMESTER IN (SELECT ID_SEMESTER FROM TB_SEMESTER WHERE STATUS =1)");
    if ($query->num_rows() > 0) {
      return $query->row();
    }else {
      return FALSE;
    }
  }

  public function agenda_id($ID_AGENDA){
    $query = $this->db->query("SELECT * FROM TB_AGENDA WHERE ID_AGENDA = '$ID_AGENDA'");
    return $query->num_rows();

  }

  public function tambah_agenda($ID_AGENDA, $filename = null){
    $DRAFT          = $this->input->post('DRAFT');
    $ID_SEMESTER    = $this->input->post('ID_SEMESTER');
    $JUDUL          = $this->input->post('JUDUL');
    $TANGGAL        = $this->input->post('TANGGAL');
    $WAKTU_MULAI    = $this->input->post('WAKTU_MULAI');
    $WAKTU_SELESAI  = $this->input->post('WAKTU_SELESAI');
    $SEMINAR        = $this->input->post('SEMINAR');
    $REGISTER       = $this->input->post('REGISTER');
    $BERBAYAR       = $this->input->post('BERBAYAR');
    $FEE            = $this->input->post('FEE');
    $MEDIA          = $this->input->post('MEDIA');
    $KETERANGAN     = $this->input->post('KETERANGAN');

    $WAKTU = "{$WAKTU_MULAI} - {$WAKTU_SELESAI}";

    if ($this->input->post('draft')) {

      $data = array(
        'ID_AGENDA'   => $ID_AGENDA,
        'ID_SEMESTER' => $ID_SEMESTER,
        'JUDUL'       => $JUDUL,
        'DRAFT'       => 1,
        'POSTER'      => $filename,
        'TANGGAL'     => $TANGGAL,
        'WAKTU'       => $WAKTU,
        'SEMINAR'     => is_null($SEMINAR)?0:1,
        'REGISTER'    => is_null($REGISTER)?0:1,
        'BERBAYAR'    => is_null($BERBAYAR)?0:1,
        'FEE'         => is_null($BERBAYAR)?null:$FEE,
        'MEDIA'       => is_null($SEMINAR)?null:$MEDIA,
        'KETERANGAN'  => $KETERANGAN
      );

    }else {

      $data = array(
        'ID_AGENDA'   => $ID_AGENDA,
        'JUDUL'       => $JUDUL,
        'ID_SEMESTER' => $ID_SEMESTER,
        'POSTER'      => $filename,
        'TANGGAL'     => $TANGGAL,
        'WAKTU'       => $WAKTU,
        'SEMINAR'     => is_null($SEMINAR)?0:1,
        'REGISTER'    => is_null($REGISTER)?0:1,
        'BERBAYAR'    => is_null($BERBAYAR)?0:1,
        'FEE'         => is_null($BERBAYAR)?null:$FEE,
        'MEDIA'       => is_null($SEMINAR)?null:$MEDIA,
        'KETERANGAN'  => $KETERANGAN
      );
    }

    $this->db->insert('TB_AGENDA', $data);
    return ($this->db->affected_rows() != 1) ? false : true;
  }

  public function edit_agenda($ID_AGENDA, $filename = null){
    $DRAFT          = $this->input->post('DRAFT');
    $ID_SEMESTER    = $this->input->post('ID_SEMESTER');
    $JUDUL          = $this->input->post('JUDUL');
    $TANGGAL        = $this->input->post('TANGGAL');
    $WAKTU_MULAI    = $this->input->post('WAKTU_MULAI');
    $WAKTU_SELESAI  = $this->input->post('WAKTU_SELESAI');
    $SEMINAR        = $this->input->post('SEMINAR');
    $REGISTER       = $this->input->post('REGISTER');
    $BERBAYAR       = $this->input->post('BERBAYAR');
    $FEE            = $this->input->post('FEE');
    $MEDIA          = $this->input->post('MEDIA');
    $KETERANGAN     = $this->input->post('KETERANGAN');

    $WAKTU = "{$WAKTU_MULAI} - {$WAKTU_SELESAI}";

    if ($this->input->post('draft')) {

      $data = array(
        'ID_AGENDA'   => $ID_AGENDA,
        'JUDUL'       => $JUDUL,
        'ID_SEMESTER' => $ID_SEMESTER,
        'DRAFT'       => 1,
        'POSTER'      => $filename,
        'TANGGAL'     => $TANGGAL,
        'WAKTU'       => $WAKTU,
        'SEMINAR'     => is_null($SEMINAR)?0:1,
        'REGISTER'    => is_null($REGISTER)?0:1,
        'BERBAYAR'    => is_null($BERBAYAR)?0:1,
        'FEE'         => is_null($BERBAYAR)?null:$FEE,
        'MEDIA'       => is_null($SEMINAR)?null:$MEDIA,
        'KETERANGAN'  => $KETERANGAN
      );

    }else {

      $data = array(
        'ID_AGENDA'   => $ID_AGENDA,
        'JUDUL'       => $JUDUL,
        'ID_SEMESTER' => $ID_SEMESTER,
        'DRAFT'       => 0,
        'POSTER'      => $filename,
        'TANGGAL'     => $TANGGAL,
        'WAKTU'       => $WAKTU,
        'SEMINAR'     => is_null($SEMINAR)?0:1,
        'REGISTER'    => is_null($REGISTER)?0:1,
        'BERBAYAR'    => is_null($BERBAYAR)?0:1,
        'FEE'         => is_null($BERBAYAR)?null:$FEE,
        'MEDIA'       => is_null($SEMINAR)?null:$MEDIA,
        'KETERANGAN'  => $KETERANGAN
      );
    }

    $this->db->where('ID_AGENDA', $ID_AGENDA);
    $this->db->update('TB_AGENDA', $data);
    return ($this->db->affected_rows() != 1) ? false : true;
  }

  public function hapus_agenda($ID_AGENDA){

    $this->db->where('ID_AGENDA', $ID_AGENDA);
    $this->db->delete('TB_AGENDA');
    return ($this->db->affected_rows() != 1) ? false : true;
  }
}
