<?php
class Donors extends CI_Controller{

    public function registerDonor(){
        $data['title']= 'Donors Registration';
        $this->form_validation->set_rules('donorid', 'Donors Id', 'required');
        $this->form_validation->set_rules('donorFname', 'First Name', 'required');
        $this->form_validation->set_rules('donorMname', 'Middle Name', 'required');
        $this->form_validation->set_rules('donorLname', 'Last Name', 'required');
        $this->form_validation->set_rules('donorNIC', 'NIC Number', 'required');
        $this->form_validation->set_rules('donorGender', 'Gender', 'required');
        $this->form_validation->set_rules('donorAddress', 'Address', 'required');
        $this->form_validation->set_rules('donorOccupation', 'Occupation', 'required');
        $this->form_validation->set_rules('donorEmail', 'Email Address', 'required');
        $this->form_validation->set_rules('donorDOB', 'DateOfBirth', 'required');
        $this->form_validation->set_rules('donorHeight', 'Height', 'required');
        $this->form_validation->set_rules('donorAvailable', 'donoravailable', 'required');






        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('template/header');
            $this->load->view('donor/donor_registration',$data);
            $this->load->view('template/footer');
        }
        else
        {
            $this->load->model('donor_model');
            $this->donor_model->insertDonordata();
//            if($response){
            $this->session->set_flashdata('msg','Registered successfully');
            redirect('donor/registerDonor');
        }

    }
    public function view_donor(){
        $data['title']= 'Current Donors';
        //$data['donors']=$this->donor_model->get_donors();

        $this->load->view('template/header');
        $this->load->view('donor/selecte_donors',$data);
        $this->load->view('template/footer');

    }
    public function select($bloodGroup){
        $data['title']='Donors';
        $this->form_validation->set_rules('donorBloodGroup','Blood Group','required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header');
            $this->load->view('donor/selecte_donors',$data);
            $this->load->view('template/footer');

        }

        $data['donors']=$this->donor_model->get_donors($bloodGroup);

        $this->load->view('template/header');
        $this->load->view('donor/view_donors',$data);
        $this->load->view('template/footer');

    }
}