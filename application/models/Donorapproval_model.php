<?php
class Donorapproval_model extends CI_Model{
    public function __construct (){
        parent::__construct();
        $this->load->database();

    }
    public function load_donors_registered_for_donation($limit=FALSE,$offset=FALSE){

        if ($limit){
            $this->db->limit($limit,$offset);
        }
        $query=$this->db->get_where('donor',array('donorStatus'=>'current'));
        return $query->result_array();

/*        $query=$this->db->query("SELECT * from donor WHERE donorStatus='current';");

        return $query->result_array();*/


    }
    public function getCountdonors(){
        $status ="current";
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
        $query=$this->db->query("SELECT donorId, donorFname, donorLname, donorNIC, donorGender, donorBloodGroup, donorStatus FROM donor WHERE donorId='$donorid_row'");

        return $query->row_array();

    }


    public function update_donor_status($donorId){
        $now = date('Y-m-d');
        $data1 = array(
            'donorId' =>$this->input->post('donorID',TRUE),
            'donorStatusType' =>$this->input->post('approval',TRUE),
            'donorDefferReason' =>$this->input->post('defer_reason',TRUE),
            'donorEligibleDate' =>$this->input->post('donorEligibleDate',TRUE),
            'entered_date'=>$now,
        );



        $this->db->insert('donorstatus', $data1);

        return $donorId;

    }




}


?>