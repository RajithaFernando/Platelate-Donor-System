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
        $image=base_url("uploads/user.png");
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
            'donorStatus'=>'current',
            'donorResponsetime'=>$response,
            'donorImage'=> $image,
            'number_of_donation'=>0



        );

        return $this->db->insert('donor',$data);
    }
    public function insertTel(){

        $data = array(
            'mobileTeleNo'=>$this->input->post('donorMobNo',TRUE),
            'landTeleNo'=>$this->input->post('donorLandNo',TRUE),
            'donorid'=>$this->input->post('donorid',TRUE),
        );
        return $this->db->insert('telephoneno',$data);
    }

    //view donors


//retrive donors accroding to blood group
    public function get_donors($bloodGroup){
//        get current date to compare 14 days
            $now = date('Y-m-d');
            $approve='approve';
            $this->db->order_by('donor.donorResponsetime','DESC');
            $this->db->order_by('donor.donorDistance','ASC');
            $this->db->join('telephoneno','telephoneno.donorId=donor.donorId','left');
            //$this->db->join('donorstatus','donorstatus.donorId=donor.donorId','left');
//            *****donor should check in donor or ststus table
            $this->db->where('donorStatus',$approve);
            $this->db->where('nextDonationDate <=',$now);
            $this->db->where('donorBloodGroup',$bloodGroup);
            $query=$this->db->get('donor');
            return $query->result_array();
            //echo $this->db->affected_rows('donor');


    }

//retrieve donors by nic
    public  function get_donor($search){
        $this->db->select('*');
        $this->db->from('donor');
        $this->db->like('donorNIC',$search);
        $query = $this->db->get();
        return $query->result();
    }
//add poin to donor according to their response type

    public function  add_points($donorId){
        $responsetype=$this->input->post('donorResponse');
        /*$this->db->select('donorResponsetime');
        $previousvalue =$this->db->get_where('donor',array('donorId'=>$donorId));*/

        if ($responsetype=="responsed"){
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
        elseif($responsetype=="not_responsed"){
            $query=$this->db->query("UPDATE donor SET donorResponsetime = (donorResponsetime-2) WHERE donorId='$donorId';");
            return $query;

        }
        else{
            return false;
        }

    }




    //    get donor result by donor id
    public function get_donor_by_donor_id($donorId){
        $query=$this->db->get_where('donor',array('donorId'=>$donorId));
        return $query->row_array();

    }

    //      retrive donors accroding to blood group
    public function new_select($bloodGroup){
//        get current date to compare 14 days
        $now = date('Y-m-d');
        $approve='approve';
        $this->db->order_by('donor.number_of_donation','DESC');
        $this->db->order_by('donor.donorResponsetime','DESC');
        $this->db->order_by('donor.donorYeildlyCount','DESC');
        $this->db->order_by('donor.donorDistance','ASC');
        $this->db->join('telephoneno','telephoneno.donorId=donor.donorId','left');
        //$this->db->join('donorstatus','donorstatus.donorId=donor.donorId','left');
//            *****donor should check in donor or ststus table
        $this->db->where('donorStatus',$approve);
        $this->db->where('nextDonationDate <=',$now);
        $this->db->where('donorBloodGroup',$bloodGroup);
        $query=$this->db->get('donor');
        $result= $query->result();
        return $result;

        //echo $this->db->affected_rows('donor');
    }

//    donor profile
    public function donor_profile($donor){
        $this->load->database();
        $this->db->select('*');
        $this->db->from('donor','donation');
        //$this->db->join('donation','donation.donorId=donor.donorId');
        $this->db->where(array('donorId' => $donor ));
        $query=$this->db->get();
        //$query=$this->db->query("select * from donor,donation where donor.donorId=$donor AND donor.$donor=donation.donorId;");

        return $query->result_array();
    }

//    load donor profile
    public function load_donor_profile(){
        $this->db->select('*');
        $this->db->from('donor');
        $query = $this->db->get();
        return ($query->result_array());

    }
    //    load approve donor profile
    public function load_donor_profile_approve(){
        $this->db->select('*');
        $this->db->from('donor');
        $this->db->where(array('donorStatus' => "approve" ));
        $query = $this->db->get();
        return ($query->result_array());

    }
//    load current donor profile
    public function load_donor_profile_current(){
        $this->db->select('*');
        $this->db->from('donor');
        $this->db->where(array('donorStatus' => "current" ));
        $query = $this->db->get();
        return ($query->result_array());

    }
//    load pdeffer donor profile
    public function load_donor_profile_pdeffer(){
        $this->db->select('*');
        $this->db->from('donor');
        $this->db->where(array('donorStatus' => "p_deffer" ));
        $query = $this->db->get();
        return ($query->result_array());

    }
//    load tdeffer donor profile
    public function load_donor_profile_tdeffer(){
        $this->db->select('*');
        $this->db->from('donor');
        $this->db->where(array('donorStatus' => "t_deffer" ));
        $query = $this->db->get();
        return ($query->result_array());

    }

//    donor update
    public function donor_update($donor){


        $data = array(
            'donorFname' => $this->input->post('donorFname'),
            'donorMname' => $this->input->post('donorMname'),
            'donorLname' => $this->input->post('donorLname'),
            'donorNIC' => $this->input->post('donorNIC'),
            'donorGender' => $this->input->post('donorGender'),
            'donorAddress' => $this->input->post('donorAddress'),
            'donorDistance' => $this->input->post('donorDistance'),
            'donorEmail' => $this->input->post('donorEmail'),
            'donorDOB' => $this->input->post('donorDOB'),
            'donorBloodGroup' => $this->input->post('donorBloodGroup'),
            'donorAvailable' => $this->input->post('donorAvailable'),
            'donorHeight' => $this->input->post('donorHeight'),


        );
        //var_dump($data);
        $this->db->where('donorId',$donor);
        return $this->db->update('donor',$data);

    }
    //donor profile duplicate1
    public function donor_profile1($donor){
        $this->load->database();
        $this->db->select('*');
        $this->db->from('donor');
        $this->db->where('donorId',$donor);
        $query=$this->db->get();
        return $query->result_array();
    }



//    **************
    //upload image
    public function upload_image($path,$id){
        $img=$path['image'] ;
        $sql = "UPDATE donor SET donorImage='$img'  WHERE donorId='$id'";
        $this->db->query($sql); // store image path in db
        //echo "gfhg";


    }

    public function get_image($id){
        $sql="SELECT donorImage FROM donor WHERE donorId='$id'";
        $result=$this->db->query($sql);
        //var_dump($result);
        if($result->num_rows()==1){
            return $result->result_array();
            //echo "hello";
        }
        else{
            return false;
            //echo "hello1111";
        }
    }
    //load donation details
    public function donation_history($donor){
        $this->load->database();
        $this->db->select('*');
        $this->db->order_by('donationDate','DESC');
        $this->db->where('donorId',$donor);
        $query=$this->db->get('donation');
        return $query->result_array();
    }
    public function get_donor_profile($para){

        $this->db->select('*');
        $this->db->where('donorId',$para);
        $result=$this->db->get('donor');
        return $result->row_array();
    }

    public function change_status($donor_id,$status){
        $now = date('Y-m-d');

        $data = array(
            'donorId'=>$donor_id,
            'donorStatusType'=>$status,
            'entered_date'=>$now
        );
        $this->db->insert('donorstatus', $data);

        return $donor_id;


    }

}