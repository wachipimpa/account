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
    function updatebook_account($data, $edit_bookac_id)
    {
        $this->db->where('bc_id',$edit_bookac_id)->update('book_account',$data);
    }
    function update_bank($data, $edit_bank_id)
    {
        $this->db->where('bank_id',$edit_bank_id)->update('bank',$data);
    }
    function update_chartacc($data, $edit_acc_id)
    {
        $this->db->where('acc_id',$edit_acc_id)->update('chart_account',$data);
    }
}