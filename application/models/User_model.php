<?php
class User_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

    public function register($enc_password)
    {
        //user data array
        $data = array(
            'employee_firstname' => $this->input->post('employee_firstname'),
            'employee_lastname' => $this->input->post('employee_lastname'),
            'employee_gender' => $this->input->post('employee_gender'),
            'employee_teleNo' => $this->input->post('employee_teleNo'),
            'employee_NIC' => $this->input->post('employee_NIC'),
            'employee_occupation' => $this->input->post('employee_occupation'),
            'employee_email' => $this->input->post('employee_email'),
            'employee_username' => $this->input->post('employee_username'),
            'employee_password' => $enc_password

        );
        //insert data
        return $this->db->insert('employee', $data);
    }

    // Check username exists
    public function check_username_exists($employee_username){
        $query = $this->db->get_where('employee', array('employee_username' => $employee_username));
        if(empty($query->row_array())){
            return true;
        } else {
            return false;
        }
    }
    //check email exist
    public function check_email_exists($employee_email)
    {
        $query = $this->db->get_where('employee',array('employee_email'=>$employee_email));
        if (empty($query->row_array())){
            return true;
        }else{
            return false;
        }
    }
//    login user
    public function login($employee_username,$password){
        //validate
        $this->db->where('employee_username',$employee_username);
        $this->db->where('employee_password',$password);

        $result= $this->db->get('employee');

        if ($result->num_rows()==1){
            return $result->row(0)->employee_id;
            /*return $result->row(6)->employee_occupation;
            return $result->row(1)->employee_name;*/
        }
        else{
            return false;
        }
    }

}