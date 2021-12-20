<?php

class Dashboard_model extends CI_Model {

	public function get_semester(){
		$query = $this->db->query("SELECT * FROM TB_SEMESTER LIMIT 5");
		if ($query->num_rows() > 0) {
			return $query->result();
		}else {
			return FALSE;
		}
	}

	public function getDataStatistic($param){
		if($param['period'] == 'daily'){
			$query 		= "%d/%m";
			$queryOrder = "%m/%d";
		}else if($param['period'] == 'weekly'){
			$query 		= "M%w/%M";
			$queryOrder = "%m/%w";
		}else if($param['period'] == 'monthly'){
			$query 		= "%M";
			$queryOrder = "%m";
		}

		$this->db->select('DATE_FORMAT(DATE(LOG_TIME), "'.$query.'") as DATE, COUNT(*) as TOTAL');
		$this->db->group_by('DATE_FORMAT(DATE(LOG_TIME), "'.$query.'")');
		$this->db->order_by('DATE_FORMAT(DATE(LOG_TIME), "'.$queryOrder.'")');

		$res['data'] = $this->db->get(''.$param['table'].'')->result();

		if($res['data'] != null){
			$res['status'] 	= true;
			$res['message'] = "Data berhasil ditemukan";
		}else{
			$res['status'] 	= false;
			$res['message'] = "Data tidak ditemukan";
		}

		return $res;
	}

	public function get_karya(){
		$query = $this->db->query("SELECT * FROM TB_KARYA WHERE ID_SEMESTER IN (SELECT ID_SEMESTER FROM TB_SEMESTER WHERE STATUS = 1)");
		return $query->num_rows();
	}

	public function get_karyaBelumVERIF(){
		$query = $this->db->query("SELECT * FROM TB_KARYA WHERE IS_VERIF = 0 AND ID_SEMESTER IN (SELECT ID_SEMESTER FROM TB_SEMESTER WHERE STATUS = 1)");
		return $query->num_rows();
	}

	public function count_karya_semester(){
		$query = $this->db->query("SELECT * FROM TB_KARYA WHERE ID_SEMESTER IN (SELECT ID_SEMESTER FROM TB_SEMESTER WHERE STATUS = 1)");
		return $query->num_rows();
	}

	public function getTotalData($table){
		$res['data'] = $this->db->count_all($table);
		if($res['data'] != null){
			$res['status'] 	= true;
			$res['message'] = "Data berhasil ditemukan";
		}else{
			$res['status'] 	= false;
			$res['message'] = "Data tidak ditemukan";
		}
		return $res;
	}

	public function getListData(){
		$this->db->select('KODE_USER, NAMA, EMAIL, ASAL_KAMPUS, ROLE');
		$res['data'] = $this->db->get('TB_AUTH')->result();

		if($res['data'] != null){
			$res['status']  = true;
			$res['message'] = 'Data berhasil ditemukan';
		}else{
			$res['status']  = false;
			$res['message'] = 'Data tidak ditemukan';
		}

		return $res;
	}

	public function ubah_datapengguna($KODE_USER){
		$KODE_USER	= $this->input->post('KODE_USER');
		$NAMA 		= $this->input->post('NAMA');
		$EMAIL 		= $this->input->post('EMAIL');
		$ASAL_KAMPUS= $this->input->post('ASAL_KAMPUS');
		$ROLE 		= $this->input->post('ROLE');
		$password 	= $this->input->post('PASSWORD');

		if(empty($password)){
		$data = array('NAMA' => $NAMA, 'EMAIL' => $EMAIL, 'ASAL_KAMPUS' => $ASAL_KAMPUS, 'ROLE' => $ROLE);
		}else{
		$data = array('NAMA' => $NAMA, 'EMAIL' => $EMAIL, 'ASAL_KAMPUS' => $ASAL_KAMPUS, 'ROLE' => $ROLE, 'PASSWORD' => password_hash($password, PASSWORD_DEFAULT));
		}
		$this->db->where('KODE_USER', $KODE_USER);
		$this->db->update('TB_AUTH', $data);
		return ($this->db->affected_rows() != 1) ? false : true;

	}

	public function hapus_datapengguna($KODE_USER){

		$this->db->where('KODE_USER', $KODE_USER);
		$this->db->delete('TB_AUTH');
		return ($this->db->affected_rows() != 1) ? false : true;

	}

	public function get_koordinator(){
		$query = $this->db->query("SELECT * FROM TB_AUTH WHERE ROLE = 2 LIMIT 5");
		if ($query->num_rows() > 0) {
			return $query->result();
		}else {
			return FALSE;
		}
	}

	public function tambah_koordinator(){
		$NAMA 		= $this->input->post('NAMA');
		$EMAIL 		= $this->input->post('EMAIL');
		$password 		= $this->input->post('PASSWORD');

		do {
			$KODE_USER = "USER_".substr(md5(time()), 0, 5);
		} while ($this->cek_kode($KODE_USER) > 0);

		$data = array('KODE_USER' => $KODE_USER, 'ROLE' => 2, 'NAMA' => $NAMA, 'EMAIL' => $EMAIL, 'PASSWORD' => password_hash($password, PASSWORD_DEFAULT));

		$this->db->insert('TB_AUTH', $data);
		return ($this->db->affected_rows() != 1) ? false : true;

	}

	public function ubah_koordinator($KODE_USER){
		$NAMA 		= $this->input->post('NAMA');
		$EMAIL 		= $this->input->post('EMAIL');
		$password 		= $this->input->post('PASSWORD');

		$data = array('NAMA' => $NAMA, 'EMAIL' => $EMAIL, 'PASSWORD' => password_hash($password, PASSWORD_DEFAULT));

		$this->db->where('KODE_USER', $KODE_USER);
		$this->db->update('TB_AUTH', $data);
		return ($this->db->affected_rows() != 1) ? false : true;

	}

	public function hapus_koordinator($KODE_USER){

		$this->db->where('KODE_USER', $KODE_USER);
		$this->db->delete('TB_AUTH');
		return ($this->db->affected_rows() != 1) ? false : true;

	}

	public function cek_kode($kode){
		$query = $this->db->query("SELECT * FROM TB_AUTH WHERE KODE_USER = '$kode'");
		return $query->num_rows();
	}

	public function cek_email($email){
		$query = $this->db->query("SELECT * FROM TB_AUTH WHERE EMAIL = '$email'");

		if ($query->num_rows() > 0) {
			return TRUE;
		}else {
			return FALSE;
		}
	}

}
