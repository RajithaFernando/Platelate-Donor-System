<?php
	Class Donorapprovals extends CI_Controller{

		function __construct() {
			parent::__construct();
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->model('donorapproval_model');

		}

		public function index(){
			$data['registered_donors'] = $this->donationapproval_model->load_donors_registered_for_donation();
			$this->load->helper('html');
			$this->load->view('status',$data);	
		}

		//public function ()){}

		public function update_new_donor_status(){
			$data1['donor_info']='form_data';
			$this->form_validation->set_rules('ifdeffer1','','required');
			$this->form_validation->set_rules('ifdeffer2','','required');
			$this->form_validation->set_rules('donorEligibleDate','');
		}
		
	}
?> 