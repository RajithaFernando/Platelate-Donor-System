<?php

class Passwords extends CI_Controller{
    public  function recover_password(){
        //$user_data=user_data(user_id_from_email($email),'employee_id','employee_firstname','employee_lastname');

        $email= $this->input->post('recover_email');

        $user_data=$this->password_model->get_user_by_email($email);

//        if ($mode=='username') {
//            email($email, 'Your username', "Hello" . $user_data['employee_firstname'] . "\n\nYour username is:" . $user_data['username']."\n\n maharagama cancer hospital blood bank.");
//        }
//        else if($mode=='password'){
            $generate_password = substr(md5(rand(999,999999)),0,8);
            $this->change_password($user_data['employee_id'],$generate_password);
            email($email, 'Your password recovery', "Hello" . $user_data['employee_firstname'] . "\n\nYour new password is:" . $generate_password."\n\n Please login to change it.\nMaharagama cancer hospital blood bank.");

        //}
        redirect('pages');

    }
    public function change_password($user_id,$password){
        $new_password = md5($password);
        $this->load->password_model->change_password($user_id,$new_password);

    }
    public function change_passwordbyuser(){
        $new_password = md5($this->input->post('password'));
        $user_id=$this->input->post('employee_id');
        $this->load->password_model->change_password($user_id,$new_password);

    }
    /*public function  sendEmail($naar=0,$onderwerp=0,$msg=0)
        {
            $CI =& get_instance();

                $CI->load->library('email');
                //or autoload it from /application/config/autoload.php
            $to=;

                $CI->email->from('pdmas@maharagama.com', 'test');
                $CI->email->to($to);
                $CI->email->subject($onderwerp);
                $CI->email->message("Test bericht ".$msg);

                $CI->email->send();

    }*/

}