<?php

class Masuk_model extends CI_Model {

  public function cek_email($email){
    $email = $this->db->escape($email);
    $query = $this->db->query("SELECT * FROM TB_AUTH WHERE EMAIL = $email");

    if ($query->num_rows() > 0) {
      return TRUE;
    }else {
      return FALSE;
    }
  }

  public function get_pengguna($email){
    $email = $this->db->escape($email);
    $query = $this->db->query("SELECT * FROM TB_AUTH WHERE EMAIL = $email");
    $cek = $query->num_rows();

    if ($cek > 0) {
      return $query->row();
    }else{
      return false;
    }
  }

  public function cek_kode($kode){
    $kode = $this->db->escape($kode);
    $query = $this->db->query("SELECT * FROM TB_AUTH WHERE KODE_USER = $kode");
    return $query->num_rows();
  }

  public function cek_akun($email){
    $email = $this->db->escape($email);
    $query = $this->db->query("SELECT * FROM TB_AUTH WHERE EMAIL = $email");

    if ($query->num_rows() > 0) {
      return TRUE;
    }else{
      return false;
    }
  }

  public function cek_token($token){
    $token = $this->db->escape($token);
    $query = $this->db->query("SELECT * FROM TB_TOKEN WHERE TOKEN = $token");

    if ($query->num_rows() > 0) {
      return TRUE;
    }else{
      return false;
    }
  }

  public function get_token($token){
    $token = $this->db->escape($token);
    $query = $this->db->query("SELECT * FROM TB_TOKEN WHERE TOKEN = $token");

    if ($query->num_rows() > 0) {
      return $query->row();
    }else{
      return false;
    }
  }

  public function postData($param){
    $this->db->insert('TB_AUTH', $param);
    return ($this->db->affected_rows() != 1) ? false : true;
  }


}
