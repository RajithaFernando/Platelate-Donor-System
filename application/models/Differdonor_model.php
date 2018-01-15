<?php


class differdonor_model extends CI_Model{
    public function selectDiffData()
    {
        $query=$this->db->query("SELECT donor.donorId,donor.donorStatus,donorstatus.donorDefferReason ,donorstatus.donorEligibleDate,donor.donorNIC,donor.donorFname,donor.donorLname FROM donor LEFT JOIN donorstatus ON donorstatus.donorId = donor.donorId WHERE donorStatus = 't_deffer' OR donorStatus= 'p_deffer'  GROUP BY donor.donorId ORDER BY donorstatus.donorStatusId DESC");
        //$query=$this->db->get();
        return $query->result();
    }




}