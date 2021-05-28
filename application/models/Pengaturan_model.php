<?php

class Pengaturan_model extends CI_Model {

  public function dev_mode($status){
    $data = array(
      'VALUE' => $status,
    );

    $this->db->where('NAME', 'dev_mode');
    $this->db->update('TB_PENGATURAN', $data);
    return ($this->db->affected_rows() != 1) ? false : true;
  }

  //SEMESTER
  public function get_semester(){
    $query = $this->db->query("SELECT * FROM TB_SEMESTER");
    if ($query->num_rows() > 0) {
      return $query->result();
    }else {
      return FALSE;
    }
  }

  public function sem_count($id){
    $query  = $this->db->query("SELECT COUNT(*) as COUNTER FROM TB_KARYA WHERE ID_SEMESTER = '$id'");
    $query2 = $this->db->query("SELECT * FROM TB_SEMESTER WHERE STATUS = 1");
    if ($query->num_rows() > 0 || $query2->num_rows() > 0) {
      $data = $query->row();
      return $data->COUNTER+$query2->num_rows();
    }else{
      return false;
    }
  }

  public function aktif_count(){
    $query = $this->db->query("SELECT * FROM TB_SEMESTER WHERE STATUS = 1");
    return $query->num_rows();

  }

  public function semester_id($ID_SEMESTER){
    $query = $this->db->query("SELECT * FROM TB_SEMESTER WHERE ID_SEMESTER = '$ID_SEMESTER'");
    return $query->num_rows();

  }

  public function tambah_semester(){

    $SEMESTER     = $this->input->post('SEMESTER');
    $STATUS       = $this->input->post('STATUS');
    $KETERANGAN   = $this->input->post('KETERANGAN');

    $vocal  = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U", " ", "/", "-", "!", "#", "@", "_", "&", "=");
    $scrap  = str_replace($vocal, "", $SEMESTER);
    $begin  = substr($scrap, 0, 3);

    $chars 	= "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $uniqid 	= "";

    do {
      for ($i = 0; $i < 5; $i++) {
        $uniqid      .= $chars[mt_rand(0, strlen($chars)-1)];
        $ID_SEMESTER 	= strtoupper($begin.'_'.$uniqid);
      }

    } while ($this->kategori_id($ID_SEMESTER) > 0);

    $data = array(
      'ID_SEMESTER' => $ID_SEMESTER,
      'SEMESTER'    => $SEMESTER,
      'STATUS'      => is_null($STATUS)?0:1,
      'KETERANGAN'  => $KETERANGAN
    );

    $this->db->insert('TB_SEMESTER', $data);
    return ($this->db->affected_rows() != 1) ? false : true;
  }

  public function ubah_semester(){

    $ID_SEMESTER  = $this->input->post('ID_SEMESTER');
    $SEMESTER  = $this->input->post('SEMESTER');
    $STATUS       = $this->input->post('STATUS');
    $KETERANGAN   = $this->input->post('KETERANGAN');

    $data = array(
      'SEMESTER' => $SEMESTER,
      'STATUS'      => is_null($STATUS)?0:1,
      'KETERANGAN'  => $KETERANGAN
    );

    $this->db->where('ID_SEMESTER', $ID_SEMESTER);
    $this->db->update('TB_SEMESTER', $data);
    return ($this->db->affected_rows() != 1) ? false : true;
  }

  public function semester_aktif(){
    $ID_SEMESTER  = $this->input->post('ID_SEMESTER');
    $STATUS       = $this->input->post('STATUS');

    $data = array(
      'STATUS' => is_null($STATUS)?0:1,
    );

    $this->db->where('ID_SEMESTER', $ID_SEMESTER);
    $this->db->update('TB_SEMESTER', $data);
    return ($this->db->affected_rows() != 1) ? false : true;
  }

  public function hapus_semester(){

    $ID_SEMESTER     = $this->input->post('ID_SEMESTER');

    $this->db->where('ID_SEMESTER', $ID_SEMESTER);
    $this->db->delete('TB_SEMESTER');
    return ($this->db->affected_rows() != 1) ? false : true;
  }

  //KATEGORI
  public function get_kategori(){
    $query = $this->db->query("SELECT * FROM TB_KATEGORI WHERE ID_SEMESTER IN (SELECT ID_SEMESTER FROM TB_SEMESTER WHERE STATUS =1)");
    if ($query->num_rows() > 0) {
      return $query->result();
    }else {
      return FALSE;
    }
  }

  public function kat_count($id){
    $query = $this->db->query("SELECT COUNT(*) as COUNTER FROM TB_KARYA WHERE ID_KATEGORI = '$id'");
    if ($query->num_rows() > 0) {
      $data = $query->row();
      return $data->COUNTER;
    }else{
      return false;
    }
  }

  public function kategori_id($ID_KATEGORI){
    $query = $this->db->query("SELECT * FROM TB_KATEGORI WHERE ID_KATEGORI = '$ID_KATEGORI'");
    return $query->num_rows();

  }

  public function tambah_kategori(){

    $KATEGORI     = $this->input->post('KATEGORI');
    $ID_SEMESTER  = $this->input->post('ID_SEMESTER');
    $KETERANGAN   = $this->input->post('KETERANGAN');

    $vocal  = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U", " ", "/", "-", "!", "#", "@", "_", "&", "=");
    $scrap  = str_replace($vocal, "", $KATEGORI);
    $begin  = substr($scrap, 0, 3);

    $chars 	= "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $uniqid 	= "";

    do {
      for ($i = 0; $i < 5; $i++) {
        $uniqid      .= $chars[mt_rand(0, strlen($chars)-1)];
        $ID_KATEGORI 	= strtoupper($begin.'_'.$uniqid);
      }

    } while ($this->kategori_id($ID_KATEGORI) > 0);

    $data = array(
      'ID_KATEGORI' => $ID_KATEGORI,
      'ID_SEMESTER' => $ID_SEMESTER,
      'KATEGORI'    => $KATEGORI,
      'KETERANGAN'  => $KETERANGAN
    );

    $this->db->insert('TB_KATEGORI', $data);
    return ($this->db->affected_rows() != 1) ? false : true;
  }

  public function ubah_kategori(){

    $ID_KATEGORI  = $this->input->post('ID_KATEGORI');
    $ID_SEMESTER  = $this->input->post('ID_SEMESTER');
    $KATEGORI     = $this->input->post('KATEGORI');
    $KETERANGAN   = $this->input->post('KETERANGAN');

    $data = array(
      'KATEGORI'    => $KATEGORI,
      'ID_SEMESTER' => $ID_SEMESTER,
      'KETERANGAN'  => $KETERANGAN
    );

    $this->db->where('ID_KATEGORI', $ID_KATEGORI);
    $this->db->update('TB_KATEGORI', $data);
    return ($this->db->affected_rows() != 1) ? false : true;
  }

  public function hapus_kategori(){

    $ID_KATEGORI     = $this->input->post('ID_KATEGORI');

    $this->db->where('ID_KATEGORI', $ID_KATEGORI);
    $this->db->delete('TB_KATEGORI');
    return ($this->db->affected_rows() != 1) ? false : true;
  }

  //PRODI
  public function get_prodi(){
    $query = $this->db->query("SELECT * FROM TB_PRODI");
    if ($query->num_rows() > 0) {
      return $query->result();
    }else {
      return FALSE;
    }
  }

  public function pro_count($id){
    $query = $this->db->query("SELECT COUNT(*) as COUNTER FROM TB_KARYA WHERE PRODI = '$id'");
    if ($query->num_rows() > 0) {
      $data = $query->row();
      return $data->COUNTER;
    }else{
      return false;
    }
  }

  public function prodi_id($ID_PRODI){
    $query = $this->db->query("SELECT * FROM TB_PRODI WHERE ID_PRODI = '$ID_PRODI'");
    return $query->num_rows();

  }

  public function tambah_prodi(){

    $PRODI        = $this->input->post('PRODI');
    $KETERANGAN   = $this->input->post('KETERANGAN');

    $vocal  = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U", " ", "/", "-", "!", "#", "@", "_", "&", "=");
    $scrap  = str_replace($vocal, "", $PRODI);
    $begin  = substr($scrap, 0, 3);

    $chars 	= "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $uniqid 	= "";

    do {
      for ($i = 0; $i < 5; $i++) {
        $uniqid      .= $chars[mt_rand(0, strlen($chars)-1)];
        $ID_PRODI 	= strtoupper($begin.'_'.$uniqid);
      }

    } while ($this->prodi_id($ID_PRODI) > 0);

    $data = array(
      'ID_PRODI' => $ID_PRODI,
      'PRODI'    => $PRODI,
      'KETERANGAN'  => $KETERANGAN
    );

    $this->db->insert('TB_PRODI', $data);
    return ($this->db->affected_rows() != 1) ? false : true;
  }

  public function ubah_prodi(){

    $ID_PRODI  = $this->input->post('ID_PRODI');
    $PRODI     = $this->input->post('PRODI');
    $KETERANGAN   = $this->input->post('KETERANGAN');

    $data = array(
      'PRODI'    => $PRODI,
      'KETERANGAN'  => $KETERANGAN
    );

    $this->db->where('ID_PRODI', $ID_PRODI);
    $this->db->update('TB_PRODI', $data);
    return ($this->db->affected_rows() != 1) ? false : true;
  }

  public function hapus_prodi(){

    $ID_PRODI     = $this->input->post('ID_PRODI');

    $this->db->where('ID_PRODI', $ID_PRODI);
    $this->db->delete('TB_PRODI');
    return ($this->db->affected_rows() != 1) ? false : true;
  }

  //WEBSITE

  public function get_tentang(){
    $query = $this->db->query("SELECT VALUE FROM TB_PENGATURAN WHERE NAME = 'tentang'");
    if ($query->num_rows() > 0) {
      return $query->row()->VALUE;
    }else {
      return FALSE;
    }
  }

  public function get_judul(){
    $query = $this->db->query("SELECT VALUE FROM TB_PENGATURAN WHERE NAME = 'judul'");
    if ($query->num_rows() > 0) {
      return $query->row()->VALUE;
    }else {
      return FALSE;
    }
  }

  public function get_tanggal_mulai(){
    $query = $this->db->query("SELECT VALUE FROM TB_PENGATURAN WHERE NAME = 'tanggal_mulai'");
    if ($query->num_rows() > 0) {
      return $query->row()->VALUE;
    }else {
      return FALSE;
    }
  }

  public function get_tanggal_akhir(){
    $query = $this->db->query("SELECT VALUE FROM TB_PENGATURAN WHERE NAME = 'tanggal_akhir'");
    if ($query->num_rows() > 0) {
      return $query->row()->VALUE;
    }else {
      return FALSE;
    }
  }

  public function get_logo(){
    $query = $this->db->query("SELECT VALUE FROM TB_PENGATURAN WHERE NAME = 'logo'");
    if ($query->num_rows() > 0) {
      return $query->row()->VALUE;
    }else {
      return FALSE;
    }
  }

  public function ubah_website($logo){

    $tentang        = $this->input->post('tentang');
    $judul          = $this->input->post('judul');
    $tanggal_mulai  = $this->input->post('tanggal_mulai');
    $tanggal_akhir  = $this->input->post('tanggal_akhir');

    // $data = array(
    //   'VALUE'       => $tentang
    // );

    // $this->db->where('NAME', 'tentang');
    // $this->db->update('TB_PENGATURAN', $data);

    $query = $this->db->query("UPDATE TB_PENGATURAN SET VALUE = '$tentang' WHERE NAME = 'tentang'");
    $query2 = $this->db->query("UPDATE TB_PENGATURAN SET VALUE = '$judul' WHERE NAME = 'judul'");
    $query3 = $this->db->query("UPDATE TB_PENGATURAN SET VALUE = '$tanggal_mulai' WHERE NAME = 'tanggal_mulai'");
    $query4 = $this->db->query("UPDATE TB_PENGATURAN SET VALUE = '$tanggal_akhir' WHERE NAME = 'tanggal_akhir'");
    if ($logo != null || isset($logo)) {
      $query4 = $this->db->query("UPDATE TB_PENGATURAN SET VALUE = '$logo' WHERE NAME = 'logo'");
    }

    return TRUE;


    // return ($this->db->affected_rows() != 1) ? false : true;
  }

}
