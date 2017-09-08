<?php
// if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Donation extends CI_Controller
{

    public function add_donation()
    {
        $data['title'] = 'Donation Details';
//        $this->form_validation->set_rules('donationId', 'Donation ID', 'required');
        $this->form_validation->set_rules('donationDate', 'Donation Date', 'required');
        $this->form_validation->set_rules('donationStartTime', 'Donation Start Time', 'required');
        $this->form_validation->set_rules('donationEndTime', 'Donation End Time', 'required');
        $this->form_validation->set_rules('donationWBCCount', 'Donation WBC count:', 'required');
        $this->form_validation->set_rules('donationHemoCount', 'Donation Hemoglobin count:', 'required');
        $this->form_validation->set_rules('donationPlatelateCount', 'Donation Platelet count:', 'required');
        $this->form_validation->set_rules('donationNoOfUnitCollected', 'No of unit collected:', 'required');
        $this->form_validation->set_rules('donorId', 'Donor ID:', 'required');
        $this->form_validation->set_rules('MachineKitSerialNo', 'Machine Kit Serial No:', 'required');
        $this->form_validation->set_rules('MachineKitDOE', 'Machine Kit DOE:', 'required');
        $this->form_validation->set_rules('donorHeight', 'Height of donor:', 'required');
        $this->form_validation->set_rules('donorWeight', 'Weight of donor:', 'required');
        $this->form_validation->set_rules('machineNo', 'Machine No:', 'required');
        $this->form_validation->set_rules('donationPCV', 'Donation PCV:', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('template/header');
            $this->load->view('donation/donation', $data);
            $this->load->view('template/footer');
        } else {
            $this->donation_model->add_donation();

            //set message
            $this->session->set_flashdata('donation_successfull', 'donation successfully added.');

            redirect('users/register');
        }
    }

}
?>