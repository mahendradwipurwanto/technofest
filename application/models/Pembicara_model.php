<?php

class pembicara_model extends CI_Model {

  public function get_pembicara(){
    $query = $this->db->query("SELECT * FROM TB_PEMBICARA");

    if ($query->num_rows() > 0) {
      return $query->result();
    }else {
      return FALSE;
    }
  }


}
