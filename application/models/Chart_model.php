<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 12/1/2017
 * Time: 6:44 PM
 */

class Chart_model extends  CI_Model
{
 public function __construct()
 {
     $this->load->database();
 }
 public function get_linegraph(){
     $query=$this->db->query('SELECT COUNT(donationDate) AS count_date , donationDate FROM donation GROUP BY(donationDate);');
    if ($query->num_rows()>0) {
        $data = array();
        foreach ($query->result_array() as $key => $value) {
            $data[$key]['label'] = $value['donationDate'];
            $data[$key]['value'] = $value['count_date'];
        }
        return $data;
    }
    return NULL;
     //return $query->result_array();
 }
}