<?php
class InsertModel extends CI_Model{
    function insert_company($data)
    {
        $this->db->insert('company',$data);
    }
    function insert_department($data)
    {
        $this->db->insert('department',$data);
    }
    function insert_book_account($data){
        $this->db->insert('book_account',$data);
    }
    function insert_bank($data)
    {
        $this->db->insert('bank',$data);
    }
}