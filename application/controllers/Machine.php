<?php
// if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Machine extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('Machine_model');
    }


    public function load(){

        $this->load->model('Machine_model');
        $data['machines']=$this->Machine_model->load_machines();

        $this->load->view('template/header');
        $this->load->view('machine/machine',$data);
        $this->load->view('template/footer');
    }

    public function add_machine(){
        $number = count($_POST["name"]);
        echo $number;
        if ($number>1){
            $this->load->model('Machine_model');
            $result=$this->Machine_model->add_machine($number);
            if ($result){
                echo "Successfully added";
            }
        }
        else{
            echo "Enter machine name";
        }
    }
    public function remove_machine($machine_id=NULL){
        $this->load->model('Machine_model');
        $result=$this->Machine_model->remove_machine($machine_id);
        if ($result){
            $this->session->set_flashdata('massg', 'Machine Removed successfully');
            redirect('Machine/load');
        }

    }
}
