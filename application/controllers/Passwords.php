<?php

class Passwords extends CI_Controller{
    public  function recover_password(){
        //$user_data=user_data(user_id_from_email($email),'employee_id','employee_firstname','employee_lastname');

//        $email= $this->input->post('recover_email');
        $email="sumudunissanka@gmail.com";
        $this->load->model('Password_model');
        $user_data=$this->password_model->get_user_by_email();

//        if ($mode=='username') {
//            email($email, 'Your username', "Hello" . $user_data['employee_firstname'] . "\n\nYour username is:" . $user_data['username']."\n\n maharagama cancer hospital blood bank.");
//        }
//        else if($mode=='password'){
            $generate_password = substr(md5(rand(999,999999)),0,8);
            $this->change_password($user_data['employee_id'],$generate_password);
            $this->sendemail("sumudunissanka@gmail.com",  "Hello" . $user_data['employee_firstname'] . "\n\nYour new password is:" . $generate_password."\n\n Please login to change it.\nMaharagama cancer hospital blood bank.");

        //}
        redirect('');

    }
    public function change_password_for_mail($user_id,$password){
        $new_password = md5($password);
        $this->load->password_model->change_password($user_id,$new_password);

    }
//    reset password
    public function reset_password(){
        if (!$this->session->userdata('logged_in')){
            redirect('');
        }
        $this->load->model('password_model');
        $password = $this->input->post('password');

        //$new_password=md5($password);
        $user_id=$this->input->post('employee_id');
        //echo $user_id;
        $result = $this->password_model->change_password($user_id,$password);
        if ($result == true){
            echo "success";
        }

    }
    public function sendemail($email,$message){
                $config = Array(
                    'protocol' => 'smtp',
                    'smtp_host' => 'ssl://smtp.googlemail.com',
                    'smtp_port' => 465,
                    'smtp_user' => 'pdmsmaharagama@gmail.com',
                    'smtp_pass' => 'pdms@123',
                );
              $this->load->library('email', $config);
              $this->email->set_newline(“\r\n”);
              $this->email->from('pdmsmaharagama@gmail.com', 'pdms');
              $this->email->to($email);
              $this->email->subject('Yor new password');
              $this->email->message($message);
              if (!$this->email->send()) {
                  show_error($this->email->print_debugger()); }
              else {
                  echo "Your e-mail has been sent!";
              }
        }
}