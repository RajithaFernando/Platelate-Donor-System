<?php
class Donation_model extends CI_Model
{

    public function __construct()
    {
        // parent::__construct();
        $this->load->database();
    }

    public function donation_view()
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
            'donorHeight' => $this->input->post('donorHeight'),
            'donorWeight' => $this->input->post('donorWeight'),
            'machineNo' => $this->input->post('machineNo'),
            'donationPCV' => $this->input->post('donationPCV')
        );
        return $this->db->insert('donation', $data);
    }
}
?>
