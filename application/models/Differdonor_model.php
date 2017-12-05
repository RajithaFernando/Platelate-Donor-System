<?php 


class differdonor_model extends CI_Model{
		 public function selectDiffData()
		 {

		 	$this->db->where('donorStatus', 'p_differ');
		 	$this->db->or_where('donorStatus', 't_differ');

$query=$this->db->get('donor');

// print_r($query->result());
return $query->result();
}




}









 ?>