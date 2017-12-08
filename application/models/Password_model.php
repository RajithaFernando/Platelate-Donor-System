<?php

class Password_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

    public function change_password($user_id,$password){
        $query=$this->db->query("UPDATE employee SET employee_password='.$password.' WHERE employee_id='.$user_id.';");
        return $query;

    }
    public function get_user_by_email($email){
        $this->db->select('*');
        $this->db->where('employee_email',$email);
        $result = $this->db->get('employee');
        return $result->row_array();
    }
}