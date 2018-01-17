
<?php
class Users extends CI_Controller
{
// load current users when page loaded
    public function current_users(){

        //pagination config
        $config['base_url'] = base_url().'users/current_users/';
        $config['total_rows'] = $this->db->count_all('employee');
        $config['per_page'] = 7;
        $config['uri_segment'] = 3;
        $config['attributes'] = array('class' => 'page_link');
        $config['full_tag_open'] = '<ul class="pagination justify-content-end">';
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
        $config['cur_tag_open'] = '<li class="page-item active" style="background-color: #31708f;"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only" style="background-color: #31708f;">(current)</span></a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

//            init pagination
        $this->pagination->initialize($config);
        $data['link'] = $this->pagination->create_links();
        $data['users'] = $this->user_model->get_users($config['per_page'],$page);



        $data['title']= 'Current Users';
        //$data['users']=$this->user_model->get_users($config['per_page'],$offset);

        $this->load->view('template/header');
        $this->load->view('users/current_users',$data);
        $this->load->view('template/footer');


    }
//    load user registration page
    public function register_page(){
        $data['title'] = 'User Registration';
        $this->load->view('template/header');
        $this->load->view('users/register', $data);
        $this->load->view('template/footer');

    }
//        user registration function
    public function register()
    {
        $data['title'] = 'User Registration';
        $this->form_validation->set_rules('employee_firstname', 'Firstname', 'required|alpha');
        $this->form_validation->set_rules('employee_lastname', 'Lastname', 'required|alpha');
        $this->form_validation->set_rules('employee_gender', 'Gender', 'required');
        $this->form_validation->set_rules('employee_teleNo', 'Telephone', 'required|max_length[10]|min_length[10]|numeric');
        $this->form_validation->set_rules('employee_NIC', 'NIC', 'trim|required|is_unique[employee.employee_NIC]|callback_check_nic_validation');
        $this->form_validation->set_rules('employee_occupation', 'Occupation', 'required');
        $this->form_validation->set_rules('employee_email', 'Email', 'required|valid_email|callback_check_email_exists');
        $this->form_validation->set_rules('employee_username', 'Username', 'trim|required|callback_check_username_exists');
        $this->form_validation->set_rules('employee_password','Password','required|callback_valid_password');
        $this->form_validation->set_rules('employee_password2', 'Confirm Password', 'matches[employee_password]');

        if ($this->form_validation->run() === FALSE) {
            echo validation_errors();

        } else {
            //die('Continue');
            //Encrypt password
            $enc_password = md5($this->input->post('employee_password'));
            $result=$this->user_model->register($enc_password);
            if ($result){
                echo "success";
            }
            /*//set message
            $this->session->set_flashdata('user_registered', 'User are now registered and can log in');

            redirect('users/register');*/
        }
    }
    // Check if username exists
    public function check_username_exists($employee_username)
    {
        $this->form_validation->set_message('check_username_exists', 'That username is taken. Please choose a different one');
        if ($this->user_model->check_username_exists($employee_username)) {
            return true;
        } else {
            return false;
        }
    }

    //check if email exists
    public function check_email_exists($employee_email)
    {
        $this->form_validation->set_message('check_email_exists', 'That email  is taken.Please choose a different one');
        if ($this->user_model->check_email_exists($employee_email)) {
            return true;
        } else {
            return false;
        }
    }

    public function check_email_exist02($employee_email){
        $employee_id=$this->session->usersdata('employee_id');
        $this->form_validation->set_message('check_email_exists2', 'That email  is taken.Please choose a different one');
        $empoyee_id2=$this->user_model->check_email_exists2($employee_email);
        if ($employee_id==$empoyee_id2){
            return false;
        }
        else{
            return true;
        }
    }


    //user login

    public function login()
    {
        $data['title'] = 'Sign In';
        $this->form_validation->set_rules('employee_username', 'Username', 'required');
        $this->form_validation->set_rules('employee_password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            redirect('');
        } else {
            //get username
            $employee_username = $this->input->post('employee_username');
            //get password
            $password = md5($this->input->post('employee_password'));
            //loggin user

            $data = $this->user_model->login($employee_username, $password);

            if ($data !== false) {
                //create the session
                //die('SUCCESS');
                $employee_id=$data['employee_id'];
                $this->user_model->update_lastlogin($employee_id);

                $user_data = array(
                    'employee_id'=>$data['employee_id'],
                    'employee_occupation'=>$data['employee_occupation'],
                    'employee_username'=>$data['employee_username'],
                    'logged_in'=>true
                );

                $this->session->set_userdata($user_data);


                //set message
                $this->session->set_flashdata('user_loggedin', 'You are now logged in');


//*********************direct to dash board
                redirect('users/dashboard');
            } else {
                //set fail message
                $this->session->set_flashdata('login_failed', 'You are logged into fail');

                redirect('');
            }
        }
    }


//    load users dashboard
    public function dashboard(){
        $this->load->view('template/header');
        $this->load->view('template/dashboard');
        $this->load->view('template/footer');
    }

    //log user out
    public function logout(){
        //unset user data
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('employee_id');
        $this->session->unset_userdata('employee_username');

        //set message
        $this->session->set_flashdata('user_loggedout','You are now logged out');
        redirect('');
    }

    //    valid password
    public function valid_password($employee_password)
    {
        $employee_password = trim($employee_password);
        $regex_lowercase = '/[a-z]/';
        $regex_uppercase = '/[A-Z]/';
        $regex_number = '/[0-9]/';
        $regex_special = '/[!@#$%^&*()\-_=+{};:,<.>§~]/';
        if (empty($employee_password))
        {
            $this->form_validation->set_message('valid_password', 'The {field} field is required.');
            return FALSE;
        }
        if (preg_match_all($regex_lowercase, $employee_password) < 1)
        {
            $this->form_validation->set_message('valid_password', 'The {field} field must be at least one lowercase letter.');
            return FALSE;
        }
        if (preg_match_all($regex_uppercase, $employee_password) < 1)
        {
            $this->form_validation->set_message('valid_password', 'The {field} field must be at least one uppercase letter.');
            return FALSE;
        }
        if (preg_match_all($regex_number, $employee_password) < 1)
        {
            $this->form_validation->set_message('valid_password', 'The {field} field must have at least one number.');
            return FALSE;
        }
        if (preg_match_all($regex_special, $employee_password) < 1)
        {
            $this->form_validation->set_message('valid_password', 'The {field} field must have at least one special character.' . ' ' . htmlentities('!@#$%^&*()\-_=+{};:,<.>§~'));
            return FALSE;
        }
        if (strlen($employee_password) < 5)
        {
            $this->form_validation->set_message('valid_password', 'The {field} field must be at least 5 characters in length.');
            return FALSE;
        }
        if (strlen($employee_password) > 32)
        {
            $this->form_validation->set_message('valid_password', 'The {field} field cannot exceed 32 characters in length.');
            return FALSE;
        }
        return TRUE;
    }
//    edit user profile
    public function edit(){
        //check  whether user is login
        if (!$this->session->userdata('logged_in')){
            redirect('');
        }
//        $employee_password = $_SESSION['employee_id'];
        $employee_id =$this->session->userdata('employee_id');
        $data['user']=$this->user_model->get_user($employee_id);
        $result=$this->user_model->get_image($this->session->userdata('employee_id'));
        if($result){
            $data['imagepath'] = $result;
        }
        /*if (empty($data['user'])){
            show_404();
        }
        */$data['title']='Edit Profile';

        $this->load->view('template/header');
        $this->load->view('users/edit_profile',$data);
        $this->load->view('template/footer');


    }
//    current login user update their profile after edit it
    public function update(){
        //check login
        if (!$this->session->userdata('logged_in')){
            redirect('users/login');
        }
        $data['title']='Edit Profile';
        $employee_id=$this->session->userdata('employee_id');
        $this->form_validation->set_rules('employee_firstname', 'Firstname', 'required');
        $this->form_validation->set_rules('employee_lastname', 'Lastname', 'required');
        $this->form_validation->set_rules('employee_teleNo', 'Telephone', 'required|max_length[10]|min_length[10]');
        $this->form_validation->set_rules('employee_email', 'Email', 'required|valid_email');
        if ($this->form_validation->run() === FALSE) {
            echo validation_errors();
        } else {
            $result=$this->user_model->update_user($employee_id);
            if ($result){
                echo "success";
            }
        }
    }
    //update other user profile by admin
    public function update_other(){
        //check login
        if (!$this->session->userdata('logged_in')){
            redirect('users/login');
        }

        $employee_id =$this->input->post('employee2_id');
        $this->user_model->update_user($employee_id);
        //set message
        $this->session->set_flashdata('profile_updated','user profile has been updated');

        redirect('users/current_users');
    }

    // admin can view current_users profile
    public function view($employee_id = NULL){
        $data['user']=$this->user_model->get_user($employee_id);
        if (empty($data['user'])){
            show_404();
        }
        $data['title']='Edit user';
        $this->load->view('template/header');
        $this->load->view('users/edit_othersprofile',$data);
        $this->load->view('template/footer');
    }
//  admin can block users
    public function block(){
        //check  whether user is login
        if (!$this->session->userdata('logged_in')){
            redirect('');
        }
        $employee_id=$this->input->post('employee_id');
        $data['user']=$this->user_model->get_user($employee_id);

        $this->user_model->block_user($employee_id);
        redirect('users/current_users');

    }

//retrieve block users
    public function check_block_users(){
        //check  whether user is login
        if (!$this->session->userdata('logged_in')){
            redirect('');
        }
        $data['title']= 'Unautharized Users';

        //pagination config
        $config['base_url'] = base_url().'users/check_block_users/';
        $config['total_rows'] = $this->user_model->getCountblockUser();
        $config['per_page'] = 7;
        $config['uri_segment'] = 3;
        $config['attributes'] = array('class' => 'page_link');
        $config['full_tag_open'] = '<ul class="pagination justify-content-end">';
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
        $config['cur_tag_open'] = '<li class="page-item active" style="background-color: #31708f;"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

//            init pagination
        $this->pagination->initialize($config);
        $data['link'] = $this->pagination->create_links();
        $data['users'] = $this->user_model->check_block_users($config['per_page'],$page);
//        $data['users']=$this->user_model->check_block_users();
        if (empty($data['users'])){
            redirect('users/current_users');
        }
        $this->load->view('template/header');
        $this->load->view('users/check_block_users',$data);
        $this->load->view('template/footer');

    }
//    unblock users by admin
    public function unblock_user(){
        //check  whether user is login
        if (!$this->session->userdata('logged_in')){
            redirect('');
        }
        $employee_id = $this->input->post('employee_id');
        $result=$this->user_model->unblock_user($employee_id);
        if($result){
            echo "success";
        }
        else{
            echo $result;
        }
//        redirect('users/current_users');

    }

//    validate nic for new and old
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
    //    getting user by id
    public function get_user(){
        $employee_id=$this->input->post('employee_id');
        $user=$this->user_model->get_user($employee_id);
        if($user){
//            ********
            echo json_encode($user);
        }
    }

//    change password by user
    public function change_password($employee_id=NULL){
        //check  whether user is login
        if (!$this->session->userdata('logged_in')){
            redirect('');
        }
        $data['user']=$this->user_model->get_user($employee_id);
        $this->load->view('template/header');
        $this->load->view('users/reset_password',$data);
        $this->load->view('template/footer');

    }

    /*public function change_passwordbyuser(){
        $user_id=$this->input->post('employee_id');
        $password=$this->input->post('password');
        $new_password=md5($password);
        $result = $this->user_model->change_password($user_id,$new_password);
        //redirect('users/dashboard');
        if ($result == true){
            echo "success";
        }
    }*/
    //image upload
    public function do_upload()
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
            $this->load->model('user_model');
            // $this->user_model->getid( $this->session->userdata('user_name'));
            $this->user_model->upload_image($arr, $this->session->userdata('employee_id'));
        }
        //$this->load->view('user_profile');
        $this->edit();
    }

}
?>
