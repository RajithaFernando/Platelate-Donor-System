<?php
class User_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

    public function register($enc_password)
    {
        //user data array
        $image=base_url("uploads/user.png");
        $data = array(
            'employee_firstname' => $this->input->post('employee_firstname'),
            'employee_lastname' => $this->input->post('employee_lastname'),
            'employee_gender' => $this->input->post('employee_gender'),
            'employee_teleNo' => $this->input->post('employee_teleNo'),
            'employee_NIC' => $this->input->post('employee_NIC'),
            'employee_occupation' => $this->input->post('employee_occupation'),
            'employee_email' => $this->input->post('employee_email'),
            'employee_username' => $this->input->post('employee_username'),
            'employee_password' => $enc_password,
            'Employee_image'=> $image

        );
        //insert data
        return $this->db->insert('employee', $data);
    }
//retrieve user
    public function get_users($limit=FALSE,$offset=FALSE){
        //$this->db->oder_by('employee_id','DESC');
        if ($limit){
            $this->db->limit($limit,$offset);
        }
        $query=$this->db->get_where('employee',array('employeeIs_allowed'=>0));
        return $query->result_array();

    }
//    getting block users count
    public function getCountblockUser(){
        $this->db->select("COUNT(*)as num_row");
        $this->db->from('employee');
        $this->db->where('employeeIs_allowed',1);
        $this->db->order_by('employee_id');
        $query=$this->db->get();
        $result = $query->result();
        return $result[0]->num_row;
    }
    public function get_user($employee_id){
        $query=$this->db->get_where('employee',array('employee_id'=>$employee_id));
        return $query->row_array();

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

    public function check_email_exists2($employee_email){
        $query = $this->db->get_where('employee', array('employee_email' => $employee_email));
        if(empty($query->row_array())){
            return true;
        } else {
            return $query->row(0)->employee_id;
        }
    }


//    login user
    public function login($employee_username,$password){
        //validate
        $this->db->where('employee_username',$employee_username);
        $this->db->where('employee_password',$password);

        $result= $this->db->get('employee');

        if ($result->num_rows()==1){

//            return $result->row(0)->employee_id;
            return $result->row_array();

        }
        else{
            return false;
        }
    }
    //update last login time.
    public function update_lastlogin($employee_id){
        $data=array(
            'lemployeelast_login'=> now()
        );
        $this->db->where('employee_id',$employee_id);
        $query= $this->db->update('employee',$data);
        return $query;

    }
    //update profile
    public function update_user($employee_id){
        $data = array(
            'employee_firstname' => $this->input->post('employee_firstname'),
            'employee_lastname' => $this->input->post('employee_lastname'),
            'employee_teleNo' => $this->input->post('employee_teleNo'),
            'employee_NIC' => $this->input->post('employee_NIC'),
            'employee_occupation' => $this->input->post('employee_occupation'),
            'employee_email' => $this->input->post('employee_email'),
        );
        $this->db->where('employee_id',$employee_id);
        return $this->db->update('employee',$data);
    }
//    block unauthorized users
    public function block_user($employee_id){
        $data = array(
          'employeeIs_allowed'=>1
        );
        $this->db->where('employee_id',$employee_id);
        return $this->db->update('employee',$data);
    }
//    check blocked users
    public function check_block_users($limit=FALSE,$offset=FALSE){
        if ($limit){
            $this->db->limit($limit,$offset);
        }
        $query=$this->db->get_where('employee',array('employeeIs_allowed'=>1));
        return $query->result_array();

    }


//    unblock users
    public function unblock_user($employee_id){
        /*$data = array(
            'employeeIs_allowed'=>0
        );
        $this->db->where('employee_id',$employee_id);
        $query=$this->db->update('employee',$data);
        */
        $query=$this->db->query("UPDATE employee SET employeeIs_allowed=0 WHERE employee_id='$employee_id';");
        return $query;
    }


    /*public function change_password($user_id,$new_password){
        $query=$this->db->query("UPDATE employee SET employee_password='$new_password' WHERE employee_id='$user_id';");
        return $query;
    }*/
//upload image
    public function upload_image($path,$id){
        $img=$path['image'] ;
        $sql = "UPDATE employee SET Employee_image='$img'  WHERE employee_id='$id'";
        $this->db->query($sql); // store image path in db
        //echo "gfhg";


    }

    public function get_image($id){
        $sql="SELECT Employee_image FROM employee WHERE employee_id='$id'";
        $result=$this->db->query($sql);
        //var_dump($result);
        if($result->num_rows()==1){
            return $result->result_array();
            //echo "hello";
        }
        else{
            return false;
            //echo "hello1111";
        }
    }
}