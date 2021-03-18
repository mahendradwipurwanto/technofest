<?php
	class Template_Frontend{
		protected $_ci;

		function __construct(){
      $this->_ci = &get_instance();

		}

		function view($content, $data = NULL){
			$this->_ci->load->view('frontend_header',$data);
			$this->_ci->load->view($content, $data);
			$this->_ci->load->view('frontend_footer',$data);

		}
	}
