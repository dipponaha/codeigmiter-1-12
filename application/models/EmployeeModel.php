<?php

class EmployeeModel extends CI_Model
{
    public function insertEmployee($data)
    {
        return $this->db->insert('employee', $data);
    }
}
