<?php
class SummaryPdf_Model extends CI_Model{
	public function select_donor(){
		return $this->db->get('donation')->result();
	}
}
?>