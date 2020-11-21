<?php
class QueryModel extends CI_Model
{
    function get_company($index, $row)
    {
        $length = $row;
        $start = ($index - 1) * $length;
        $this->db->limit($length, $start);
        return $this->db->get('company')->result();
    }
    function get_company_count()
    {
        return $this->db->get('company')->num_rows();
    }
    function get_department($index, $row)
    {
        $length = $row;
        $start = ($index - 1) * $length;
        $this->db->limit($length, $start);
        return $this->db->get('department')->result();
    }
    function get_department_count()
    {
        return $this->db->get('department')->num_rows();
    }
}