<?php
	class Template_Backend{
		protected $_ci;

		function __construct(){
      $this->_ci = &get_instance();
      $this->_ci->load->database();

		}

		function view($content, $data = NULL){
			$query = $this->_ci->db->query("SELECT SEMESTER as SEM, ID_SEMESTER as ID_SEM FROM TB_SEMESTER WHERE STATUS = 1 LIMIT 0,1");
			if ($query->num_rows() > 0) {
				$SEM 		= $query->row()->SEM;
				$ID_SEM = $query->row()->ID_SEM;
			}else{
				$SEM 		= "Atur STATUS Semester";
				$ID_SEM = null;
			}

			$agenda = $this->_ci->db->query("SELECT * FROM TB_AGENDA WHERE ID_SEMESTER IN (SELECT ID_SEMESTER FROM TB_SEMESTER WHERE STATUS = 1)");
			$karya = $this->_ci->db->query("SELECT * FROM TB_KARYA WHERE ID_SEMESTER IN (SELECT ID_SEMESTER FROM TB_SEMESTER WHERE STATUS = 1)");
			$mode = $this->_ci->db->query("SELECT VALUE FROM TB_PENGATURAN WHERE NAME = 'dev_mode'");
			$data['count_agenda']		= $agenda->num_rows();
			$data['count_karya']		= $karya->num_rows();
			$data['dev_mode']				= $mode->row()->VALUE;
			$data['semester_aktif'] = $SEM;
			$data['ID_SEM'] 				= $ID_SEM;
			$this->_ci->load->view('backend_header',$data);
			$this->_ci->load->view($content, $data);
			$this->_ci->load->view('backend_footer',$data);

		}
	}
