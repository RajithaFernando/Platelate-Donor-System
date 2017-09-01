<?php
class Users extends CI_Controller
{
    public function register()
    {
        $data['title'] = 'Registration';
        $this->form_validation->set_rules('employee_firstname', 'Firstname', 'required');
        $this->form_validation->set_rules('employee_lastname', 'Lastname', 'required');
        $this->form_validation->set_rules('employee_gender', 'Gender', 'required');
        $this->form_validation->set_rules('employee_teleNo', 'Telephone', 'required|max_length[10]|min_length[10]');
        $this->form_validation->set_rules('employee_NIC', 'NIC', 'trim|required|min_length[10]|max_length[20]');
        $this->form_validation->set_rules('employee_occupation', 'Occupation', 'required');
        $this->form_validation->set_rules('employee_email', 'Email', 'required|valid_email|callback_check_email_exists');
        $this->form_validation->set_rules('employee_username', 'Username', 'trim|required|callback_check_username_exists');
        $this->form_validation->set_rules('employee_password','Password','required');
        $this->form_validation->set_rules('employee_password2', 'Confirm Password', 'matches[employee_password]');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('template/header');
            $this->load->view('users/register', $data);
            $this->load->view('template/footer');
        } else {
            //die('Continue');
            //Encrypte password
            $enc_password = md5($this->input->post('employee_password'));
            $this->user_model->register($enc_password);

            //set message
            $this->session->set_flashdata('user_registered', 'User are now registered and can log in');

            redirect('users/register');
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

    //login
    public function login()
    {
        $data['title'] = 'Sign In';
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('template/header');
            $this->load->view('users/login', $data);
            $this->load->view('template/footer');
        } else {
            //get username
            $username = $this->input->post('username');
            //get password
            $password = md5($this->input->post('password'));
            //loggin user
            $user_id = $this->user_model->login($username, $password);
            if ($user_id) {
                //create the session
                //die('SUCCESS');
                $user_data = array(
                    'user_id'=>$user_id,
                    'username'=>$username,
                    'logged_in'=>true
                );

                $this->session->set_userdata($user_data);


                //set message
                $this->session->set_flashdata('user_loggedin', 'You are now logged in');

                redirect('posts');
            } else {
                //set message
                $this->session->set_flashdata('login_failed', 'You are logged into fail');

                redirect('users/login');
            }
        }
    }
    //log user out

    public function logout(){
        //unset user data
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('employee_id');
        $this->session->unset_userdata('employee_username');

        //set message
        $this->session->set_flashdata('user_loggedout','You are now logged out');
        redirect('users/login');
    }


}
?>
