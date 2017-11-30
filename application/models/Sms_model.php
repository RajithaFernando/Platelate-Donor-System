<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 9/5/2017
 * Time: 11:20 AM
 */
class Sms_model extends CI_Model{
    public function get_eligible_donors(){
        $now = date('Y-m-d');
        $this->db->where('nextDonationDate <=',$now);
        $query=$this->db->get('donor');
        return $query->result_array();

    }
    public function send($from,$to,$message,$password_sms){
        $text=urlencode($message);
        $baseurl ="http://www.textit.biz/sendmsg";
        $url = "$baseurl/?id=$from&pw=$password_sms&to=$to&text=$text";
        $ret = file($url);
        $res= explode(":",$ret[0]);

        if (trim($res[0])=="OK")
        {
            echo "Message Sent - ID : ".$res[1];
        }
        else
        {
            echo "Sent Failed - Error : ".$res[1];
        }

    }

}
?>