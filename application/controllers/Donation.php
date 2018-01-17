<?php
// if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Donation extends CI_Controller
{

    public function add_donation()
    {
        //check  whether user is login
        if (!$this->session->userdata('logged_in')){
            redirect('');
        }
        $data['title'] = 'Donation Details';
        //$this->form_validation->set_rules('donationId', 'Donation ID', 'required');
        $this->form_validation->set_rules('donorId', 'Donors ID', 'required');
        $this->form_validation->set_rules('donationDate', 'Donation Date', 'required');
        $this->form_validation->set_rules('donationStartTime', 'Donation Start Time', '|callback_compareTime');
        $this->form_validation->set_rules('donationEndTime', 'Donation End Time', '|callback_compareTime');
        $this->form_validation->set_rules('donationWBCCount', 'Donation WBC count', 'required|numeric');
        $this->form_validation->set_rules('donationHemoCount', 'Donation Hemoglobin count', 'required|numeric');
        $this->form_validation->set_rules('donationPlatelateCount', 'Donation Platelet count', 'required|numeric');
        $this->form_validation->set_rules('DonationNoOfUnitCollected', 'No of unit collected', 'required|numeric');

        $this->form_validation->set_rules('MachineKitSerialNo', 'Machine Kit Serial No:', 'required|numeric');
        $this->form_validation->set_rules('MachineKitDOE', 'Machine Kit DOE:', 'required');
        $this->form_validation->set_rules('donorWeight', 'Weight of donor', 'required|numeric|greater_than_equal_to[50]');
        $this->form_validation->set_rules('machineName', 'Machine Name:', 'required');
        $this->form_validation->set_rules('donorHeight', 'Height of donor', 'required|numeric');
        $data['machines']=$this->donation_model->get_machine();

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('template/header');
            $this->load->view('donation/donation', $data);
            $this->load->view('template/footer');
        } else {
            $this->donation_model->add_donation();

            //set message
            $this->session->set_flashdata('donation_successfull', 'Donation details successfully added.');

            redirect('donation/add_donation');
        }
    }

//compair start time and end time

    public function compareTime()
    {
        $start = strtotime($this->input->post('donationStartTime'));
        $end = strtotime($this->input->post('donationEndTime'));
        if($start > $end)
        {
            $this->form_validation->set_message('compareDates','Your start date must be earlier than your end date' );
            return false;
        }

    }
    public function get_donation_byid(){
        //check  whether user is login
        if (!$this->session->userdata('logged_in')){
            redirect('');
        }
        $donationId = $this->input->post('donationId');
        $result = $this->donation_model->get_donationby_id($donationId);
        if ($result){
            echo json_encode($result);
        }
    }

}
?>
