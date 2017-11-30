<?php
class Donor_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function insertDonordata(){
        //data insert
        $data = array(
            'donorid' => $this->input->post('donorid',TRUE),
            'donorFname' => $this->input->post('donorFname',TRUE),
            'donorMname' => $this->input->post('donorMname',TRUE),
            'donorLname' => $this->input->post('donorLname',TRUE),
            'donorNIC' => $this->input->post('donorNIC',TRUE),
            'donorGender' => $this->input->post('donorGender',TRUE),
            'donorAddress' => $this->input->post('donorAddress',TRUE),
            'donorOccupation' => $this->input->post('donorOccupation',TRUE),
            'donorEmail' => $this->input->post('donorEmail',TRUE),
            'donorDOB' => $this->input->post('donorDOB',TRUE),
            'donorHeight' => $this->input->post('donorHeight',TRUE),
            'donorAvailable' => $this->input->post('donorAvailable',TRUE),
            'donorBloodGroup' => $this->input->post('donorBloodGroup',TRUE)



        );

        return $this->db->insert('donor',$data);
    }
    //view donors


//retrive donors accroding to blood group
    public function get_donors($bloodGroup){
//        get current date to compare 14 days
            $now = date('Y-m-d');
            $approve='approve';
            $this->db->order_by('donor.donorResponsetime','ASC');
            $this->db->order_by('donor.donorDistance','DESC');
            $this->db->join('telephoneno','telephoneno.donorId=donor.donorId','left');
            $this->db->join('donorstatus','donorstatus.donorId=donor.donorId','left');
//            *****donor should check in donor or ststus table
            $this->db->where('donorstatus.donorStatusType',$approve);
            $this->db->where('nextDonationDate <=',$now);
            $this->db->where('donorBloodGroup',$bloodGroup);
            $query=$this->db->get('donor');
            return $query->result_array();
            //echo $this->db->affected_rows('donor');


    }

//retrive donors by nic
    public  function get_donor($search){
        /*$query=$this->db->get_where('donor',array('donorNIC'=>$search));
        return $query->result_array();*/
        $this->db->select("donorId,donorFname,donorLname,donorNIC");
        $whereCondition = array('donorNIC'=>$search);
        $this->db->where($whereCondition);
        $this->db->from('donor');
        $query = $this->db->get();
        return $query->result();
    }


}