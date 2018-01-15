<?php
class SummaryPdf_Controller extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('Pdf_Library');
		$this->load->model('SummaryPdf_Model');
	}
	public function generate_summarypdf_report(){
		$data['donation'] = $this->SummaryPdf_Model->select_donor();
		 $this->load->view('reports/summary_report',$data);
	}
}
?>