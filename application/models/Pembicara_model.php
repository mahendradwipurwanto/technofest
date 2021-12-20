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

	public function tambah($FOTO){
		$NAMA	          = $this->input->post('NAMA');
		$MAJOR	        = $this->input->post('MAJOR');
		$KETERANGAN			= $this->input->post('KETERANGAN');

		$data = array(
			'FOTO' 		    => $FOTO,
			'NAMA'        => $NAMA,
			'MAJOR'       => $MAJOR,
			'KETERANGAN' 	=> $KETERANGAN,
		);
		$this->db->insert('TB_PEMBICARA', $data);
		return  ($this->db->affected_rows() != 1) ? false : true;

  }

	public function edit($FOTO){
		$ID_PEMBICARA	  = $this->input->post('ID_PEMBICARA');
		$NAMA	          = $this->input->post('NAMA');
		$MAJOR	        = $this->input->post('MAJOR');
		$KETERANGAN			= $this->input->post('KETERANGAN');

		$data = array(
			'FOTO' 		    => $FOTO,
			'NAMA'        => $NAMA,
			'MAJOR'       => $MAJOR,
			'KETERANGAN' 	=> $KETERANGAN,
		);
		$this->db->where('ID_PEMBICARA', $ID_PEMBICARA);
		$this->db->update('TB_PEMBICARA', $data);
		return ($this->db->affected_rows() != 1) ? false : true;

  }

	public function hapus(){
		$ID_PEMBICARA	  = $this->input->post('ID_PEMBICARA');

		$this->db->where('ID_PEMBICARA', $ID_PEMBICARA);
		$this->db->delete('TB_PEMBICARA');
		return ($this->db->affected_rows() != 1) ? false : true;

  }


}
