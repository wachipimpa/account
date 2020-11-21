<?php
class UpdateModel extends CI_Model{
    function update_company($data, $comp_id)
    {
        $this->db->where('comp_id',$comp_id)->update('company',$data);
    }
    function update_department($data, $edit_department_id)
    {
        $this->db->where('department_id',$edit_department_id)->update('department',$data);
    }
}