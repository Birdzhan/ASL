<?php

class Modemployee extends CI_Model{

    public function getemployee()
    {
        $query = $this->db->get('employee_list');
        return $query->result(); // will return results for all rows
    }
    function getemployeerow($employee_id){
        $this->db->where('employee_id', $employee_id);
        $query=$this->db->get('employee_list');
        return $query->row(); // will return result only for one row
    }
}