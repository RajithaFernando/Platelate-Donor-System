<?php
class Donors extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('Donor_model');
    }

    public function registerDonor()
    {
        //check  whether user is login
        if (!$this->session->userdata('logged_in')){
            redirect('');
        }
        $data['title'] = 'Donor Registration';
        $this->form_validation->set_rules('donorid', 'Donor Id', 'required|is_unique[donor.donorId]');
        $this->form_validation->set_rules('donorFname', 'First Name', 'required|alpha');
        $this->form_validation->set_rules('donorMname', 'Middle Name', 'alpha');
        $this->form_validation->set_rules('donorLname', 'Last Name', 'required|alpha');
        $this->form_validation->set_rules('donorNIC', 'NIC', 'required|is_unique[donor.donorNIC]|callback_check_nic_validation');
        $this->form_validation->set_rules('donorGender', 'Gender', 'required');
        $this->form_validation->set_rules('donorAddress', 'Address', 'required');
        $this->form_validation->set_rules('donorDistance', 'Distance', 'required|numeric');
        $this->form_validation->set_rules('donorEmail', 'Email Address', 'trim|required|valid_email');
        $this->form_validation->set_rules('donorDOB', 'DateOfBirth', 'required|callback_validateAge');
        $this->form_validation->set_rules('donorBloodGroup', 'Blood Group', 'required');
        $this->form_validation->set_rules('donorHeight', 'Height', 'required|numeric');
        $this->form_validation->set_rules('donorAvailable', 'donoravailable', 'required');
        $this->form_validation->set_rules('donorMobNo', 'donor Mobile No', 'required|numeric');
        $this->form_validation->set_rules('donorLandNo', 'donor Land No', 'required|numeric');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header');
            $this->load->view('donor/donor_registration', $data);
            $this->load->view('template/footer');
        } else {
            $this->load->model('Donor_model');
            $this->donor_model->insertDonordata();
            $this->donor_model->insertTel();
//            if($response){
            $this->session->set_flashdata('msg', 'Registered successfully');
            redirect('Donors/registerDonor');
        }
    }

//  loading search donor page for blood group(sumudu :::)
    public function view_donor(){
        //check  whether user is login
        if (!$this->session->userdata('logged_in')){
            redirect('');
        }
        $data['title']= 'Current Donors';
        //$data['donors']=$this->donor_model->get_donors();

        $this->load->view('template/header');
        $this->load->view('donor/select_final',$data);
        $this->load->view('template/footer');

    }
//    loading donors search by blood group
    public function select(){
        //check  whether user is login
        if (!$this->session->userdata('logged_in')){
            redirect('');
        }
        $data['title']='Donors';
        $this->load->view('template/header');
        $this->load->view('donor/select_final');
        $this->load->view('template/footer');

    }

//    load search donor page to find donors using NIC.
    public function search_donor(){
        //check  whether user is login
        if (!$this->session->userdata('logged_in')){
            redirect('');
        }
        $data['title']="Search Donor";
        $data['maindonors']=$this->donor_model->load_donor_profile();
        $this->load->view('template/header');
        $this->load->view('donor/search_donor',$data);
        $this->load->view('template/footer');
    }

//  Suggestions donors by NIC
    public function suggest_donors(){
        //check  whether user is login
        if (!$this->session->userdata('logged_in')){
            redirect('');
        }
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
    // load donor profile list
    public function donor_profile_list(){
        //check  whether user is login
        if (!$this->session->userdata('logged_in')){
            redirect('');
        }
        $query = $this->donor_model->load_donor_profile();
        $data['donors_profile'] = null;
        if($query){
            $data['donors_profile'] = $query;
        }
        // $donorid=$this->input->post('donorId');
        // $total=count($query);
        // $donorFname = $this->input->post('donorFname');
        // $user_data = array(
        //     'donorFname'=>$donorFname,
        //     'donorId'=>$donorId

        // );
        $this->load->helper('html');
        $this->load->view('template/header');
        $this->load->view('donor/donor_profile_list',$data);
        $this->load->view('template/footer');
    }
    // load donor profile
    public function donor_profile($para=NULL){

        //check  whether user is login
        if (!$this->session->userdata('logged_in')){
            redirect('');
        }
        $donor=$para;
        $this->load->model('Donor_model');
        $query=$this->Donor_model->donor_profile($donor);
        $data['donor']=null;
        if($query){
            $data['donor']=$query;

        }
        $this->load->view('template/header');
        $this->load->view('donor/donor_profile',$data);
        $this->load->view('template/footer');

    }

    //update donor when click the button
    public function update_donor(){
//check  whether user is login
        if (!$this->session->userdata('logged_in')){
            redirect('');
        }
        $donor=$this->input->post('donorId');
        $this->load->model('Donor_model');
        $this->Donor_model->donor_update($donor);
        $this->view_update_donor($donor);
    }

    //view update form when click change profile
    public function view_update_donor($para){
        //check  whether user is login
        if (!$this->session->userdata('logged_in')){
            redirect('');
        }
        $donor=$para;
        $this->load->model('Donor_model');
        $query=$this->Donor_model->donor_profile1($donor);
        $data['donor2']=null;
        if($query){
            $data['donor2']=$query;
        }
        $result=$this->Donor_model->get_image($donor);
        if($result){
            $data['imagepath'] = $result;
        }
        $this->load->view('template/header');
        $this->load->view('donor/update_donor',$data);
        $this->load->view('template/footer');

    }
    //image upload
    public function do_upload($donor)
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 10000;
        $config['max_width']            = 20240;
        $config['max_height']           = 76800;

        $this->load->library('upload', $config);
        //var_dump($config);


        if ( ! $this->upload->do_upload('userfile'))
        {
            echo "error";
            // $error = array('error' => $this->upload->display_errors());
            // $this->load->view('cimage', $error);

        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            // $this->load->view('upload_success', $data);
            // get the parth of the image detail are return as array of array
            $image_path=base_url("uploads/".$data['upload_data']['raw_name'].$data['upload_data']['file_ext']);

            $arr['image']= $image_path;
            //var_dump($arr);
            unset($data['submit']);
            $this->load->model('Donor_model');
            // $this->user_model->getid( $this->session->userdata('user_name'));
            $this->Donor_model->upload_image($arr, $donor);
        }
        //$this->load->view('user_profile');
        $this->view_update_donor($donor);
    }


//***********************************************////
    //get donor details by id
    public function get_donor_by_donor_id(){
        //check  whether user is login
        if (!$this->session->userdata('logged_in')){
            redirect('');
        }
        $donorId = $this->input->post('donorId');
        $result = $this->donor_model->get_donor_by_donor_id($donorId);
        if ($result){
            echo json_encode($result);
        }
    }
    //donor select by blood group.
    public function new_select(){
        //check  whether user is login
        if (!$this->session->userdata('logged_in')){
            redirect('');
        }
        $bloodgroup=$this->input->post('bloodgroup');
        $fetch_data=$this->donor_model->new_select($bloodgroup);
        echo  json_encode($fetch_data);

    }
//    donor nic validation
    public function check_nic_validation($nic){
        $this->form_validation->set_message('check_nic_validation', 'NIC length should be 10 or 12.Please recheck your NIC ');
        $len=strlen($nic);
        $new=substr($nic, 0, -1);
        if (($len==10)&&(is_numeric($new))){
            if(($nic[9]=="v")||($nic[9]=="V")) {
                return true;
            }
            else{
                return false;
            }
        }
        elseif(($len==12)&&(is_numeric($nic))){
            return true;
        }
        else{
            return false;
        }

    }


    // validate birthday
    public function validateAge($birthday, $age = 18){
        $this->form_validation->set_message('validateAge', 'The person must be over 18 years old please check DOB ');
        // $birthday can be UNIX_TIMESTAMP or just a string-date.
        if(is_string($birthday)) {
            $birthday = strtotime($birthday);
        }

        // check
        // 31536000 is the number of seconds in a 365 days year.
        if(time() - $birthday < $age * 31536000)  {
            return false;
        }

        return true;
    }
//view donation history
    public function view_donation_history($para){
        //check  whether user is login
        if (!$this->session->userdata('logged_in')){
            redirect('');
        }
        $donor=$para;
        $this->load->model('Donor_model');
        $query=$this->Donor_model->donation_history($donor);
        $data1['donation']=null;
        if($query){
            $data1['donation']=$query;

        }
        $this->load->view('template/header');
        $this->load->view('donation/donor_last_donation_view',$data1);
        $this->load->view('template/footer');

    }



}