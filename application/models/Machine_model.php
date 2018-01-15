
<?php
class Machine_model extends CI_Model
{

    public function __construct()
    {
        // parent::__construct();
        $this->load->database();
    }

    public function add_machine($machineName)
    {
        $data = array(
            'machine_name' => $machineName
        );

        return $this->db->insert('machine_details', $data);
    }
}
?>
