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
    function get_book_account($index, $row)
    {
        $length = $row;
        $start = ($index - 1) * $length;
        $this->db->limit($length, $start);
        return $this->db->get('book_account')->result();
    }
    function get_book_account_count()
    {
        return $this->db->get('book_account')->num_rows();
    }
    function get_bank($index, $row)
    {
        $length = $row;
        $start = ($index - 1) * $length;
        $this->db->limit($length, $start);
        return $this->db->get('bank')->result();
    }
    function get_bank_count()
    {
        return $this->db->get('bank')->num_rows();
    }
    function get_chartofaccount($index, $row)
    {
        $length = $row;
        $start = ($index - 1) * $length;
        $this->db->limit($length, $start);
        $this->db->order_by('acc_code','ASC');
        return $this->db->get('chart_account')->result();
    }
    function get_chartofaccount_count()
    {
        return $this->db->get('chart_account')->num_rows();
    }
}