<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_excel extends CI_Model {
	function __construct(){
		parent::__construct();
	}

	public function get_sertifikatSemester($ID_SEMESTER){
		$query = $this->db->query("SELECT d.PRODI, c.KATEGORI, b.DOSPEM, b.JUDUL, a.NAMA, a.NRP, b.LINK_DEMO, b.LINK_GITHUB, b.LINK_VIDEO FROM `TB_AUTHOR` a LEFT JOIN TB_KARYA b ON a.ID_KARYA = b.ID_KARYA LEFT JOIN TB_KATEGORI c ON b.ID_KATEGORI = c.ID_KATEGORI LEFT JOIN TB_PRODI d ON b.PRODI = d.ID_PRODI WHERE b.IS_VERIF = true AND b.ID_SEMESTER = '$ID_SEMESTER'  ORDER BY d.ID_PRODI ASC, c.ID_KATEGORI ASC, b.JUDUL ASC, a.NRP ASC");
		if($query->num_rows() > 0){
			return $query->result();
		}else {
			return $query->num_rows();
		}

	}

	// public function get_sertifikatSemester($ID_SEMESTER){
	// 	$query = $this->db->query("SELECT * FROM TB_KARYA a LEFT JOIN TB_PRODI b ON a.PRODI = b.ID_PRODI LEFT JOIN TB_KATEGORI c ON a.ID_KATEGORI = c.ID_KATEGORI WHERE a.ID_SEMESTER = '$ID_SEMESTER' ORDER BY a.ID_KATEGORI ASC, a.JUDUL ASC");
	// 	if($query->num_rows() > 0){
	// 		return $query->result();
	// 	}else {
	// 		return $query->num_rows();
	// 	}

	// }

	public function check_semester($ID_SEMESTER){
		$query = $this->db->query("SELECT * FROM TB_SEMESTER WHERE ID_SEMESTER ='$ID_SEMESTER'");
		if ($query->num_rows() > 0) {
			return $query->row()->SEMESTER;
		}else {
			return FALSE;
		}
	}

	public function get_sertifikat(){
		$query = $this->db->query("SELECT d.PRODI, c.KATEGORI, b.DOSPEM, b.JUDUL, a.NAMA, a.NRP, b.LINK_DEMO, b.LINK_GITHUB, b.LINK_VIDEO FROM `TB_AUTHOR` a LEFT JOIN TB_KARYA b ON a.ID_KARYA = b.ID_KARYA LEFT JOIN TB_KATEGORI c ON b.ID_KATEGORI = c.ID_KATEGORI LEFT JOIN TB_PRODI d ON b.PRODI = d.ID_PRODI WHERE b.IS_VERIF = true AND b.ID_SEMESTER IN (SELECT ID_SEMESTER FROM TB_SEMESTER WHERE STATUS =1)  ORDER BY d.ID_PRODI ASC, c.ID_KATEGORI ASC, b.JUDUL ASC, a.NRP ASC");
		if($query->num_rows() > 0){
			return $query->result();
		}else {
			return $query->num_rows();
		}

	}

	// public function get_sertifikat(){
	// 	$query = $this->db->query("SELECT * FROM TB_KARYA a LEFT JOIN TB_PRODI b ON a.PRODI = b.ID_PRODI LEFT JOIN TB_KATEGORI c ON a.ID_KATEGORI = c.ID_KATEGORI WHERE a.IS_VERIF = true AND a.ID_SEMESTER IN (SELECT ID_SEMESTER FROM TB_SEMESTER WHERE STATUS =1) ORDER BY a.ID_KATEGORI ASC, a.JUDUL ASC");
	// 	if($query->num_rows() > 0){
	// 		return $query->result();
	// 	}else {
	// 		return $query->num_rows();
	// 	}

	// }

	public function get_anggota($ID_KARYA){
		$query = $this->db->query("SELECT * FROM TB_AUTHOR WHERE ID_KARYA = '$ID_KARYA'");
		if ($query->num_rows() > 0) {
			return $query->result();
		}else {
			return FALSE;
		}
	}

}