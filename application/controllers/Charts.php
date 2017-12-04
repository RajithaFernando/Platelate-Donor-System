<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 12/1/2017
 * Time: 6:46 PM
 */
header('Content-Type:application/json');
class Charts extends  CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('chart_model');
        $this->load->library('form_validation');
    }

    public function get_linegraph(){
        $this->load->model('chart_model');
        $results = $this->chart_model->get_linegraph();
        if ($results === NULL) {
            echo json_encode('No record found');
        } else {
            echo json_encode($results);
        }
    }

}