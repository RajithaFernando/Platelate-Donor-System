<?php
class Donation_model extends CI_Model
{

    public function __construct()
    {
        // parent::__construct();
        $this->load->database();
    }
//add donation
    public function add_donation()
    {
        $data = array(
            'donationId' => $this->input->post('donationId'),
            'donationDate' => $this->input->post('donationDate'),
            'donationStartTime' => $this->input->post('donationStartTime'),
            'donationEndTime' => $this->input->post('donationEndTime'),
            'donationWBCCount' => $this->input->post('donationWBCCount'),
            'donationHemoCount' => $this->input->post('donationHemoCount'),
            'donationPlatelateCount' => $this->input->post('donationPlatelateCount'),
            'DonationNoOfUnitCollected' => $this->input->post('DonationNoOfUnitCollected'),
            'donorId' => $this->input->post('donorId'),
            'MachineKitSerialNo' => $this->input->post('MachineKitSerialNo'),
            'MachineKitDOE' => $this->input->post('MachineKitDOE'),
            'donorWeight' => $this->input->post('donorWeight'),
            'machineName' => $this->input->post('machineName'),
            'donorHeight' => $this->input->post('donorHeight')

        );
        return $this->db->insert('donation', $data);
    }

//    get last donation details
    public function get_last_donation($donation_id){

        $this->db->select('*');
        $this->db->where('donationId',$donation_id);
        $result=$this->db->get('donation');
        return $result->result_array();

    }
//    get last donation id according to some donors
    public function get_donation_id($donor_id){

        $query=$this->db->query("SELECT MAX(donationId) FROM donation WHERE donorId = '$donor_id';");
        return $query;

    }
}
?>
