<?php
Class Donor_waitinglist extends CI_Controller{

    function __construct() {
        parent::__construct();  

        $this->load->model('Donor_waitinglist_model');

    }


    public function load_donors(){
        //check  whether user is login
        if (!$this->session->userdata('logged_in')){
            redirect('');
        }
        $data['title']= 'Donors waiting to Donate';

        //pagination config
        $config['base_url'] = base_url().'donor_waitinglist/load_donors/';
        $config['total_rows'] = $this->Donor_waitinglist_model->getCountdonors();
        $config['per_page'] = 6;
        $config['uri_segment'] = 3;
        $config['attributes'] = array('class' => 'page_link');
        $config['full_tag_open'] = '<ul class="pagination justify-content-lg-end">';
        $config['full_tag_close'] = '</ul>';
        $config['attributes'] = array('class' => 'page_link');
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active" style="background-color: #4CAF50; color: white; border: 1px solid #4CAF50;"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

//            init pagination
        $this->pagination->initialize($config);
        $data['link'] = $this->pagination->create_links();
//        $data['users'] = $this->user_model->check_block_users($config['per_page'],$page);


        $data['sent_to_donate_donors'] = $this->Donor_waitinglist_model->load_donors_sent_to_donation($config['per_page'],$page);
        $this->load->helper('html');
        $this->load->view('template/header');
        $this->load->view('donor/donor_waiting_list_to_donate_list',$data);
        $this->load->view('template/footer');

    }


    //function for right panel buttons
    public function load_selected_donor_details($donorid_row=NULL){
        //check  whether user is login
        if (!$this->session->userdata('logged_in')){
            redirect('');
        }
        //$data1['title']= 'Donor Approval';
        // $this->load->model('Donorapproval_model');
        $data1['donor']=$this->Donor_waitinglist_model->load_donor_details($donorid_row);
        $data1['sent_to_donate_donors'] = $this->Donor_waitinglist_model->load_donors_sent_to_donation();

        /*if (empty($data1['donor'])){
            show_404();
        }*/

        $data1['title']='Donor Approval';

        $this->load->view('template/header');
        $this->load->view('donor/donor_waiting_list_to_donate_list',$data1);
        $this->load->view('template/footer');


    }

    public function update_new_donor_status_details(){
        //check  whether user is login
        if (!$this->session->userdata('logged_in')){
            redirect('');
        }
        $donorid =$this->input->post('donorID');

        $donorIdnew = $this->Donor_waitinglist_model->update_donor_status($donorid);
        //$this->Donorapproval_model->delete_updated_donor('donorstatus',$donorIdnew);
        // $this->session->set_flashdata('msg','decided successfully');
        redirect('Donor_waitinglist/load_donors');
    }
    //get notification in donors in waiting que
    public function update_notification(){
        //check  whether user is login
        if (!$this->session->userdata('logged_in')){
            redirect('');
        }
        echo  $this->Donor_waitinglist_model->getCountdonors();
    }
    public function sent_to_donation($donor_id=NULL){
        //check  whether user is login
        if (!$this->session->userdata('logged_in')){
            redirect('');
        }
        $this->load->model('Donor_model');
        $this->load->model('Donor_waitinglist_model');
        $this->load->model('Donation_model');

        $data['donor']=$this->donor_model->get_donor_by_donor_id($donor_id);
        $data['sent_to_donate_donors'] = $this->Donor_waitinglist_model->load_donors_sent_to_donation();
        $data['machines']=$this->donation_model->get_machine();

        $this->load->view('template/header');
        $this->load->view('donation/donation2',$data);
        $this->load->view('template/footer');


    }

}
?> 