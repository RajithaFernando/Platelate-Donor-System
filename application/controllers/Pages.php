<?php
class Pages extends CI_Controller{
    public function view($page ='home'){
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            //load error page
            show_404();
        }
        $data['title']=ucfirst($page);
        $this->load->view('pages/home');
        //        $this->load->view('template/header');
//        $this->load->view('pages/'.$page,$data);
//        $this->load->view('template/footer');
    }
}
?>