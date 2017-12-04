<?php
class Donors extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('Donor_model');
    }

    public function registerDonor(){
        $data['title']= 'Donors Registration';
        $this->form_validation->set_rules('donorid', 'Donor Id', 'required');
        $this->form_validation->set_rules('donorFname', 'First Name', 'required');
        $this->form_validation->set_rules('donorMname', 'Middle Name', 'required');
        $this->form_validation->set_rules('donorLname', 'Last Name', 'required');
        $this->form_validation->set_rules('donorNIC', 'NIC', 'required|max_length[10]');
        $this->form_validation->set_rules('donorGender', 'Gender', 'required');
        $this->form_validation->set_rules('donorAddress', 'Address', 'required');
        $this->form_validation->set_rules('donorDistance', 'Distance', 'required');
        $this->form_validation->set_rules('donorEmail', 'Email Address', 'trim|required|valid_email');
        $this->form_validation->set_rules('donorDOB', 'DateOfBirth', 'required');
        $this->form_validation->set_rules('donorBloodGroup', 'Blood Group', 'required');
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
            $this->load->model('Donor_model');
            $this->donor_model->insertDonordata();
//            if($response){
            $this->session->set_flashdata('msg','Registered successfully');
            redirect('Donors/registerDonor');
        }

    }
//    view donors incomplete (sumudu :::)
    public function view_donor(){
        $data['title']= 'Current Donors';
        //$data['donors']=$this->donor_model->get_donors();

        $this->load->view('template/header');
        $this->load->view('donor/selecte_donors',$data);
        $this->load->view('template/footer');

    }
    public function select(){
        $data['title']='Donors';
        $this->form_validation->set_rules('bloodGroup','Blood Group','required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header');
            $this->load->view('donor/selecte_donors');
            $this->load->view('template/footer');

        }

        $bloodGroup= $this->input->post('bloodGroup');

        $data['donors']=$this->donor_model->get_donors($bloodGroup);
        $this->load->view('template/header');
        $this->load->view('donor/selecte_donors');
        $this->load->view('donor/select_donors_part2',$data);
        $this->load->view('template/footer');

    }


//    load search donor page
    public function search_donor(){
        $data['title']="Search Donor";
        $this->load->view('template/header');
        $this->load->view('donor/search_donor',$data);
        $this->load->view('template/footer');
    }

//Suggetions donors
    public function suggest_donors(){
        $search = $this->input->post('search');
        $query = $this->donor_model->get_donor($search);
        echo json_encode($query);
    }


//    given point to donor according to their response way in ajax
    public  function  add_points()
    {
        $this->load->model('donor_model');
        $donorId=$this->input->post('donorId');
        if ($this->donor_model->add_points($donorId)) {
            echo "success";
        }

    }
    // load donor profile
     public function donor_profile_list(){
        $data['title']="Search Donor";
        $this->load->view('template/header');
        $this->load->view('donor/donor-profile-list',$data);
        $this->load->view('template/footer');
    }

}