<?php

class Dashboard_model extends CI_Model {

	public function get_title(){
		$query = $this->db->query("SELECT TITLE FROM TB_DASHBOARD");
		return $query->num_rows();
	}

}

?>