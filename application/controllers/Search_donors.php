<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 1/7/2018
 * Time: 3:05 PM
 */

class Search_donors
{
    public function __construct() {
        parent::__construct();
        $this->load->model('Search_donor_model');
    }

    public function index(){
        $data['donors']=$this->serach_donor_model->get_donors();
    }


}