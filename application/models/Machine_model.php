
<?php
class Machine_model extends CI_Model
{

    public function __construct()
    {
        // parent::__construct();
        $this->load->database();
    }
    public function load_machines(){
        $this->db->select('*');
        $query=$this->db->get('machine_details');
        return $query->result_array();
    }
    public function add_machine($number){
//        $number = count($_POST["name"]);
        for ($i=0; $i<$number;$i++){
            if (trim($_POST["name"][$i]!='' )){
                $query=$this->db->query("INSERT INTO machine_details(machine_name) VALUES ('".strtoupper($_POST["name"][$i])."')");

            }
        }
        return $query;
    }
    public function remove_machine($machine_id){
        $this->db->where('machine_id',$machine_id);
        $result=$this->db->delete('machine_details');
        return $result;

    }
}
?>
