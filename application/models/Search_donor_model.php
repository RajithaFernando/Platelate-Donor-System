<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 1/7/2018
 * Time: 3:06 PM
 */

class Search_donor_model
{
    public function get_donors(){
        $this->load->database();
        $this->db->select('*');
        $this->db->from('donor');
        $query=$this->db->get();
        return $query->result_array();

    }

}