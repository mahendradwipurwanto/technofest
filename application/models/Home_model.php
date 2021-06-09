<?php

class Home_model extends CI_Model {

	function dev_status(){
		$query = $this->db->query("SELECT VALUE FROM TB_PENGATURAN WHERE NAME = 'dev_mode'");
		return $query->row()->VALUE;
	}

	public function tentang(){
		$query = $this->db->query("SELECT VALUE FROM TB_PENGATURAN WHERE NAME = 'tentang'");
		return $query->row()->VALUE;
	}

	public function judul(){
		$query = $this->db->query("SELECT VALUE FROM TB_PENGATURAN WHERE NAME = 'judul'");
		return $query->row()->VALUE;
	}

	public function tanggal_mulai(){
		$query = $this->db->query("SELECT VALUE FROM TB_PENGATURAN WHERE NAME = 'tanggal_mulai'");
		return $query->row()->VALUE;
	}

	public function tanggal_akhir(){
		$query = $this->db->query("SELECT VALUE FROM TB_PENGATURAN WHERE NAME = 'tanggal_akhir'");
		return $query->row()->VALUE;
	}

	public function c_karya(){
		$query = $this->db->query("SELECT * FROM TB_KARYA WHERE IS_VERIF = true AND ID_SEMESTER IN (SELECT ID_SEMESTER FROM TB_SEMESTER WHERE STATUS =1)");
		return $query->num_rows();
	}

	public function c_agenda(){
		$query = $this->db->query("SELECT * FROM TB_AGENDA WHERE DRAFT = 0 AND ID_SEMESTER IN (SELECT ID_SEMESTER FROM TB_SEMESTER WHERE STATUS =1)");
		return $query->num_rows();
	}

	public function c_pengguna(){
		$query = $this->db->query("SELECT * FROM TB_AUTH");
		return $query->num_rows();
	}

	public function agenda(){
		$query = $this->db->query("SELECT * FROM TB_AGENDA WHERE DRAFT = 0 AND ID_SEMESTER IN (SELECT ID_SEMESTER FROM TB_SEMESTER WHERE STATUS =1) ORDER BY TANGGAL ASC");
		if($query->num_rows() > 0){
			return $query->result();
		}else {
			return $query->num_rows();
		}
	}

	public function pembicara(){
		$query = $this->db->query("SELECT * FROM TB_PEMBICARA");
		if($query->num_rows() > 0){
			return $query->result();
		}else {
			return $query->num_rows();
		}
	}

	public function karya(){
		$query = $this->db->query("SELECT * FROM TB_KARYA a LEFT JOIN TB_PRODI b ON a.PRODI = b.ID_PRODI LEFT JOIN TB_KATEGORI c ON a.ID_KATEGORI = c.ID_KATEGORI WHERE a.IS_VERIF = true AND a.ID_SEMESTER IN (SELECT ID_SEMESTER FROM TB_SEMESTER WHERE STATUS =1) ORDER BY a.LOG_TIME DESC");
		if($query->num_rows() > 0){
			return $query->result();
		}else {
			return $query->num_rows();
		}
	}

	public function get_foto($ID_KARYA){
		$query = $this->db->query("SELECT FOTO FROM TB_FOTO WHERE ID_KARYA = '$ID_KARYA' LIMIT 1");
		if ($query->num_rows() > 0) {
			return $query->row()->FOTO;
		}else {
			return false;
		}
	}

	public function kunjungi($KODE_USER, $PAGE){
		date_default_timezone_set("Asia/Jakarta");

		$data = array('KODE_USER' => $KODE_USER, 'PAGE' => $PAGE, 'LOG_TIME' => time());
		$this->db->insert('TB_VISITOR', $data);
	}

}
