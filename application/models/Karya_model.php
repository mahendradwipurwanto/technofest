<?php

class Karya_model extends CI_Model {

	public function get_karyaPeserta($KODE_USER){
		$query = $this->db->query("SELECT * FROM TB_KARYA WHERE KODE_USER = '$KODE_USER'");
		if ($query->num_rows() > 0) {
			return $query->row();
		}else {
			return FALSE;
		}
	}
	public function get_karyaCari($CARI){
		$query = $this->db->query("SELECT * FROM TB_KARYA WHERE JUDUL LIKE '%$CARI%'");
		if ($query->num_rows() > 0) {
			return $query->result();
		}else {
			return FALSE;
		}
	}
	public function list_karya($ID_SEMESTER){
		$query = $this->db->query("SELECT * FROM TB_KARYA a INNER JOIN TB_PRODI b ON a.PRODI = b.ID_PRODI LEFT JOIN TB_KATEGORI c ON a.ID_KATEGORI = c.ID_KATEGORI WHERE a.ID_SEMESTER = '$ID_SEMESTER' AND a.ID_KARYA IN (SELECT ID_KARYA FROM TB_FOTO) ORDER BY a.ID_KATEGORI DESC, a.JUDUL ASC");
		if ($query->num_rows() > 0) {
			return $query->result();
		}else {
			return FALSE;
		}
	}

	public function check_semester($ID_SEMESTER){
		$query = $this->db->query("SELECT * FROM TB_SEMESTER WHERE ID_SEMESTER ='$ID_SEMESTER'");
		if ($query->num_rows() > 0) {
			return $query->row();
		}else {
			return FALSE;
		}
	}

	public function get_kategori(){
		$query = $this->db->query("SELECT * FROM TB_KATEGORI WHERE ID_SEMESTER IN (SELECT ID_SEMESTER FROM TB_SEMESTER WHERE STATUS =1)");
		if ($query->num_rows() > 0) {
			return $query->result();
		}else {
			return FALSE;
		}
	}

	public function cek_karya($ID_KATEGORI){
		$query = $this->db->query("SELECT * FROM TB_KARYA WHERE ID_KATEGORI = '$ID_KATEGORI' AND ID_SEMESTER IN (SELECT ID_SEMESTER FROM TB_SEMESTER WHERE STATUS =1)");
		return $query->num_rows();
	}

	public function cek_like($ID_KARYA){
		$query = $this->db->query("SELECT * FROM TB_LIKE WHERE ID_KARYA = '$ID_KARYA'");
		return $query->num_rows();
	}

	public function cek_vote($ID_KARYA, $KODE_USER){
		$query = $this->db->query("SELECT * FROM TB_LIKE WHERE ID_KARYA = '$ID_KARYA' AND KODE_USER = '$KODE_USER'");
		if ($query->num_rows() == 0) {
			return TRUE;
		}else {
			return FALSE;
		}
	}

	public function get_prodi(){
		$query = $this->db->query("SELECT * FROM TB_PRODI");
		if ($query->num_rows() > 0) {
			return $query->result();
		}else {
			return FALSE;
		}
	}

	public function get_anggota($ID_KARYA){
		$query = $this->db->query("SELECT * FROM TB_AUTHOR WHERE ID_KARYA = '$ID_KARYA'");
		if ($query->num_rows() > 0) {
			return $query->result();
		}else {
			return FALSE;
		}
	}

	public function get_kategori_one($ID_KATEGORI){
		$query = $this->db->query("SELECT * FROM TB_KATEGORI WHERE ID_KATEGORI = '$ID_KATEGORI'");
		if ($query->num_rows() > 0) {
			return $query->row();
		}else {
			return FALSE;
		}
	}

	public function get_karya_single($ID_KARYA){
		$query = $this->db->query("SELECT * FROM TB_KARYA a INNER JOIN TB_PRODI b ON a.PRODI = b.ID_PRODI INNER JOIN TB_KATEGORI c ON a.ID_KATEGORI = c.ID_KATEGORI WHERE a.ID_KARYA = '$ID_KARYA' GROUP BY a.ID_KARYA");
		if ($query->num_rows() > 0) {
			return $query->row();
		}else {
			return FALSE;
		}
	}

	public function get_karya_foto($ID_KARYA){
		$query = $this->db->query("SELECT * FROM TB_FOTO WHERE ID_KARYA = '$ID_KARYA'");
		if ($query->num_rows() > 0) {
			return $query->result();
		}else {
			return FALSE;
		}
	}

	public function get_karya($ID_KATEGORI){
			$query = $this->db->query("SELECT * FROM TB_KARYA a INNER JOIN TB_PRODI b ON a.PRODI = b.ID_PRODI WHERE a.ID_KATEGORI = '$ID_KATEGORI' AND a.ID_SEMESTER IN (SELECT ID_SEMESTER FROM TB_SEMESTER WHERE STATUS =1) ORDER BY a.IS_VERIF ASC, a.LOG_TIME DESC");
		if ($query->num_rows() > 0) {
			return $query->result();
		}else {
			return FALSE;
		}
	}

	public function karya_id($ID_KARYA){
		$query = $this->db->query("SELECT * FROM TB_KARYA WHERE ID_KARYA = '$ID_KARYA'");
		return $query->num_rows();

	}

	public function tambah_karya($ID_KARYA){
		$JUDUL			= $this->input->post('JUDUL');
		$KATEGORI	  = $this->input->post('ID_KATEGORI');
		$ID_SEMESTER= $this->input->post('ID_SEMESTER');
		$DESKRIPSI	= $this->input->post('DESKRIPSI');
		$PRODI			= $this->input->post('PRODI');
		$DOSPEM			= $this->input->post('DOSPEM');
		$GITHUB   	= $this->input->post('LINK_GITHUB');
		$LINK_DEMO	= $this->input->post('LINK_DEMO');
		$LINK_VIDEO	= $this->input->post('LINK_VIDEO');
		$IS_VERIF   = $this->input->post('IS_VERIF');

		$data = array(
			'ID_KARYA' 		=> $ID_KARYA,
			'ID_KATEGORI' => $KATEGORI,
			'ID_SEMESTER' => $ID_SEMESTER,
			'JUDUL'			 	=> $JUDUL,
			'DESKRIPSI' 	=> $DESKRIPSI,
			'PRODI' 			=> $PRODI,
			'DOSPEM'			=> $DOSPEM,
			'LINK_GITHUB' => $GITHUB,
			'LINK_DEMO' 	=> $LINK_DEMO,
			'LINK_VIDEO' 	=> $LINK_VIDEO,
			'IS_VERIF' 		=> $IS_VERIF,
		);
		$this->db->insert('TB_KARYA', $data);
		$cek =  ($this->db->affected_rows() != 1) ? false : true;

		if ($cek = TRUE) {
			$NAMA 	= $this->input->post('NAMA', true);
			$NRP 		= $this->input->post('NRP', true);

			foreach ($NAMA as $i => $a) {
				$anggota = array(
					'ID_KARYA' 	=> $ID_KARYA,
					'NAMA' 			=> isset($NAMA[$i]) ? $NAMA[$i] : '',
					'NRP'				=> isset($NRP[$i]) ? $NRP[$i] : ''
				);
				$this->db->insert('TB_AUTHOR', $anggota);
			}
			return ($this->db->affected_rows() != 1) ? false : true;
		}else {
			return FALSE;
		}
	}

	public function edit_karya($ID_KARYA){
		$JUDUL			= $this->input->post('JUDUL');
		$KATEGORI	  = $this->input->post('ID_KATEGORI');
		$ID_SEMESTER  = $this->input->post('ID_SEMESTER');
		$DESKRIPSI	= $this->input->post('DESKRIPSI');
		$PRODI			= $this->input->post('PRODI');
		$DOSPEM			= $this->input->post('DOSPEM');
		$GITHUB   	= $this->input->post('LINK_GITHUB');
		$LINK_DEMO	= $this->input->post('LINK_DEMO');
		$LINK_VIDEO	= $this->input->post('LINK_VIDEO');

		$data = array(
			'ID_KARYA' 		=> $ID_KARYA,
			'KODE_USER' 		=> $this->session->userdata('KODE_USER'),
			'ID_KATEGORI' => $KATEGORI,
			'ID_SEMESTER' => $ID_SEMESTER,
			'JUDUL'			 	=> $JUDUL,
			'DESKRIPSI' 	=> $DESKRIPSI,
			'PRODI' 			=> $PRODI,
			'DOSPEM'			=> $DOSPEM,
			'LINK_GITHUB' => $GITHUB,
			'LINK_DEMO' 	=> $LINK_DEMO,
			'LINK_VIDEO' 	=> $LINK_VIDEO,
		);
		$this->db->where('ID_KARYA', $ID_KARYA);
		$this->db->update('TB_KARYA', $data);

		$ID_AUTHOR 	= $this->input->post('ID_ANGGOTA', true);
		$NAMA 			= $this->input->post('OLD_NAMA', true);
		$NRP 				= $this->input->post('OLD_NRP', true);

		foreach ($NAMA as $i => $a) {
			$anggota = array(
				'ID_KARYA' 	=> $ID_KARYA,
				'NAMA' 			=> isset($NAMA[$i]) ? $NAMA[$i] : '',
				'NRP'				=> isset($NRP[$i]) ? $NRP[$i] : ''
			);
			$this->db->where('ID_AUTHOR', $ID_AUTHOR);
			$this->db->update('TB_AUTHOR', $anggota);
		}

		if (in_array("", $this->input->post('NAMA'))) {
		}else {
			$this->add_member($ID_KARYA);
		}

		return TRUE;
	}

	public function add_member($ID_KARYA){
		if ($cek = TRUE) {
			$NAMA 	= $this->input->post('NAMA', true);
			$NRP 		= $this->input->post('NRP', true);

			foreach ($NAMA as $i => $a) {
				$anggota = array(
					'ID_KARYA' 	=> $ID_KARYA,
					'NAMA' 			=> isset($NAMA[$i]) ? $NAMA[$i] : '',
					'NRP'				=> isset($NRP[$i]) ? $NRP[$i] : ''
				);
				$this->db->insert('TB_AUTHOR', $anggota);
			}
			return TRUE;
		}else {
			return FALSE;
		}
	}

	public function vote($ID_KARYA, $KODE_USER){

		$data = array('KODE_USER' => $KODE_USER, 'ID_KARYA' => $ID_KARYA );

		$this->db->insert('TB_LIKE', $data);
		return ($this->db->affected_rows() != 1) ? false : true;

	}

	public function buang_anggota(){

		$ID_AUTHOR = $this->input->post('ID_AUTHOR');

		$this->db->where('ID_AUTHOR', $ID_AUTHOR);
		$this->db->delete('TB_AUTHOR');
		return ($this->db->affected_rows() != 1) ? false : true;

	}

	public function hapus_karya(){

		$ID_KARYA = $this->input->post('ID_KARYA');

		$this->db->where('ID_KARYA', $ID_KARYA);
		$this->db->delete('TB_KARYA');
		return ($this->db->affected_rows() != 1) ? false : true;

	}

	public function verif_karya(){
		$ID_KARYA = $this->input->post('ID_KARYA');
		$this->db->where('ID_KARYA', $ID_KARYA)->update('TB_KARYA', ['IS_VERIF' => true]);
		return ($this->db->affected_rows() != 1) ? false : true;
	}

	function hapus_karya_pilih() {
		$ID_KARYA = $this->input->post('msg', true);
		foreach ($ID_KARYA as $i => $a) {
			$this->db->where('ID_KARYA', isset($ID_KARYA[$i]) ? $ID_KARYA[$i] : '');
			$this->db->delete('TB_KARYA');
		}
		return ($this->db->affected_rows() != 1) ? false : true;
	}

}
