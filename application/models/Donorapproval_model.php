<?php  
	class Donorapproval_model extends CI_Model{
		 public function __construct (){
		 	//parent::__construct();
		 	$this->load->database();
		 	
		 } 
		public function load_donors_registered_for_donation(){

			$query=$this->db->query("SELECT donor.donorId, donor.donorFname, donor.donorLname, donor.donorNIC, donor.donorGender, donor.donorBloodGroup, donorstatus.donorStatusType, donorstatus.donorStatusId FROM donor INNER JOIN donorstatus ON donor.donorId = donorstatus.donorId AND donorstatus.donorStatusType='current';");
			return $query->result_array();

			//$this->db->select('donorId');

			/*$query=$this->db->get_where('donorstatus',array('donorStatusType'=>'current'));
			return $query->result();
			$q1=$this->db->select('donorFname','donorLname','donorNIC','donorGender','donorBloodGroup')
					->where_in('donor', $data['registered_donors_id'])
					->get();*/

			/*$query=$this->db->select('donor.donorFname','donor.donorLname','donorstatus.donorStatusType','donorstatus.donorId')
						->from('donor')
						->join('donorstatus','donor.donorId = donorstatus.donorId')
						->where('donorstatus.donorStatusType','current')
						->get();*/

			//$this->db->where('donorStatusType','current');
			//$query = $this->db->get('donorstatus');
			//return $query->result();
			//return $q->result();

 		}

 		public function update_donor_status(){
 			$data1 = array(
 				'donorStatusType' =>$this->input->post('status'),
 				'donorDefferReason' =>$this->input->post('defer_reason'),
 				'donorEligibleDate' =>$this->input->post('donorEligibleDate'),
 				);
 		}
	}

?>