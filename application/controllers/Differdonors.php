<?php 
class Differdonors extends CI_Controller { 
	 public function index()
	{
		$this->load->model('differdonor_model');
		$data['differ_donors'] = $this->differdonor_model->selectDiffData();
		
		$this->load->view('template/header');
        
        $this->load->view('donor/differdonor_view',$data);
        $this->load->view('template/footer');

	}
}
















 ?>