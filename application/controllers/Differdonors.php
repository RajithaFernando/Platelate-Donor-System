<?php
class Differdonors extends CI_Controller {
    public function index()
    {
        //check  whether user is login
        if (!$this->session->userdata('logged_in')){
            redirect('');
        }
        $this->load->model('differdonor_model');
        $data['differ_donors'] = $this->differdonor_model->selectDiffData();

        $this->load->view('template/header');

        $this->load->view('donor/differdonor_view',$data);
        $this->load->view('template/footer');

    }
}
















?>