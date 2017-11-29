<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 11/29/2017
 * Time: 9:59 PM
 */

class Sms extends  CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('Sms_model');
    }


    public function  send_sms(){
        $password_sms = "7742";
        $from = '0718257822';
        $donors = $this->sms_model->get_eligible_donors();
        foreach ($donors as $donor):
            $this->sms_model->send($from,$donor,"this is text massage",$password_sms);
        endforeach;

    }


}