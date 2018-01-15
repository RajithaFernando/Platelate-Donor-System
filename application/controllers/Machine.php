<?php
// if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Machine extends CI_Controller
{



    public function load(){

        $this->load->view('template/header');
        $this->load->view('machine/machine');
        $this->load->view('template/footer');
    }

    public function add_machine()
    {

        $machine = $_POST["machine"];
        $data['title'] = 'Add Machine';
        $this->form_validation->set_rules('machineName', 'Machine Name');


        if ($this->form_validation->run() === FALSE) {
            $this->load->view('template/header');
            $this->load->view('machine/machine', $data);
            $this->load->view('template/footer');
        } else {


            $this->machine_model->add_machine($machine);



            redirect('machine/add_machine');
        }
    }
}