<?php
class Donor_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function insertDonordata(){

        $take = $this->input->post('donorAvailable');
        $response = 0;
        if(take =='anyday'){
            $response = 15;
        }
        else if(take=='weekday'){
            $response = 10;
        }
        else{
            $response = 5;
        }





        //data insert in to the database
        

        //data insert

        $data = array(
            'donorid' => $this->input->post('donorid',TRUE),
            'donorFname' => $this->input->post('donorFname',TRUE),
            'donorMname' => $this->input->post('donorMname',TRUE),
            'donorLname' => $this->input->post('donorLname',TRUE),
            'donorNIC' => $this->input->post('donorNIC',TRUE),
            'donorGender' => $this->input->post('donorGender',TRUE),
            'donorAddress' => $this->input->post('donorAddress',TRUE),
            'donorDistance' => $this->input->post('donorDistance',TRUE),
            'donorEmail' => $this->input->post('donorEmail',TRUE),
            'donorDOB' => $this->input->post('donorDOB',TRUE),
            'donorHeight' => $this->input->post('donorHeight',TRUE),
            'donorAvailable' => $this->input->post('donorAvailable',TRUE),
            'donorBloodGroup' => $this->input->post('donorBloodGroup',TRUE),
            'donorResponsetime'=>$response



        );

        return $this->db->insert('donor',$data);
    }
    //view donors


//retrive donors accroding to blood group
    public function get_donors($bloodGroup){
//        get current date to compare 14 days
            $now = date('Y-m-d');
            $approve='approve';
            $this->db->order_by('donor.donorResponsetime','ASC');
            $this->db->order_by('donor.donorDistance','DESC');
            $this->db->join('telephoneno','telephoneno.donorId=donor.donorId','left');
            $this->db->join('donorstatus','donorstatus.donorId=donor.donorId','left');
//            *****donor should check in donor or ststus table
            $this->db->where('donorstatus.donorStatusType',$approve);
            $this->db->where('nextDonationDate <=',$now);
            $this->db->where('donorBloodGroup',$bloodGroup);
            $query=$this->db->get('donor');
            return $query->result_array();
            //echo $this->db->affected_rows('donor');


    }

//retrive donors by nic
    public  function get_donor($search){
        /*$query=$this->db->get_where('donor',array('donorNIC'=>$search));
        return $query->result_array();*/
        $this->db->select("donorId,donorFname,donorLname,donorNIC");
        $whereCondition = array('donorNIC'=>$search);
        $this->db->where($whereCondition);
        $this->db->from('donor');
        $query = $this->db->get();
        return $query->result();
    }
//add poin to donor according to their response type

    public function  add_points($donorId){
        $responsetype=$this->input->post('donorResponse');
        /*$this->db->select('donorResponsetime');
        $previousvalue =$this->db->get_where('donor',array('donorId'=>$donorId));*/

        if ($responsetype=="response"){
            $query=$this->db->query("UPDATE donor SET donorResponsetime = (donorResponsetime+2) WHERE donorId='$donorId';");
            return $query;
            /*            $data = array(
                'donorResponsetime'=>$previousvalue+2
            );
            $this->db->where('donorId',$donorId);
            return $this->db->update('donor',$data);*/

        }
        elseif ($responsetype=="accepted"){
            $query=$this->db->query("UPDATE donor SET donorResponsetime = (donorResponsetime+5) WHERE donorId='$donorId';");
            return $query;

        }
        elseif($responsetype=="not_response"){
            $query=$this->db->query("UPDATE donor SET donorResponsetime = (donorResponsetime-2) WHERE donorId='$donorId';");
            return $query;

        }
        else{
            return false;
        }

    }
}