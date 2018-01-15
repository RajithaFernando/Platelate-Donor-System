<?php
class Donor_waitinglist_model extends CI_Model{
    public function __construct (){
        parent::__construct();
        $this->load->database();

    }
    public function load_donors_sent_to_donation($limit=FALSE,$offset=FALSE){

        if ($limit){
            $this->db->limit($limit,$offset);
        }
        $status = "sent_to_donation";
        $query=$this->db->get_where('donor',array('donorStatus'=>$status));
        return $query->result_array();

    }
    public function getCountdonors(){
        $status ="sent_to_donation";
        $this->db->select("COUNT(*)as num_row");
//        $this->db->from('donor');
        //$this->db->where('donorStatus','current');
        $this->db->order_by('donorId');
        $query=$this->db->get_where('donor',array('donorStatus'=>$status));
        $result = $query->result();
        return $result[0]->num_row;
    }

    public function load_donor_details($donorid_row){
        //$this->db->where('donorId',$donorid_row);
        // $query=$this->db->get_where('donor',array('donorId'=>$donorid_row));
        // return $query->row_array();
        $query=$this->db->query("SELECT donorId, donorFname, donorLname, donorNIC, donorBloodGroup, donorStatus FROM donor WHERE donorId='$donorid_row'");

        return $query->row_array();

    }


}


?>