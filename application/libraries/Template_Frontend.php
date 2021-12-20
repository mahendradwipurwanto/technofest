<?php
class Template_Frontend{
	protected $_ci;

	function __construct(){
		$this->_ci = &get_instance();
		$this->_ci->load->database();

	}

  public function get_judul(){
    $query = $this->_ci->db->query("SELECT VALUE FROM TB_PENGATURAN WHERE NAME = 'judul'");
    if ($query->num_rows() > 0) {
      return $query->row()->VALUE;
    }else {
      return FALSE;
    }
  }

	function get_logo(){
		$query = $this->_ci->db->query("SELECT VALUE FROM TB_PENGATURAN WHERE NAME = 'logo'");
		if ($query->num_rows() > 0) {
			return $query->row()->VALUE;
		}else {
			return FALSE;
		}
	}

	function view($content, $data = NULL){
		$data['logo']						= $this->get_logo();
		$data['judul']				  = $this->get_judul();

		$this->_ci->load->view('frontend_header',$data);
		$this->_ci->load->view($content, $data);
		$this->_ci->load->view('frontend_footer',$data);

	}
}
