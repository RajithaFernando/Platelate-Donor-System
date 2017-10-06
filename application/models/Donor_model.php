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

        return $this->db->insert('Donors',$data);
    }
    public function get_donors($bloodGroup){
        $this->db->order_by('donor.donorResponsetime','DESC');
        $this->db->join('telephoneno','telephoneno.donorId=donor.donorId');
        $this->db->where('donorBloodGroup',$bloodGroup);
        $query=$this->db->get('Donors');
        return $query->result_array();


    }

}