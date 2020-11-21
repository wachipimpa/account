<?php

/**
 * Created by PhpStorm.
 * User: aungpoa
 * Date: 21/11/2020 AD
 * Time: 14:23
 */
class DeleteData extends CI_Controller
{
    function changestatuscompany()
    {
        if ($_POST['edit_comp_status'] == 0) {
            $this->db->where('comp_id', $_POST['edit_comp_id'])->update('company', ['comp_trash' => 1]);
        } else if ($_POST['edit_comp_status'] == 1) {
            $this->db->where('comp_id', $_POST['edit_comp_id'])->update('company', ['comp_trash' => 0]);
        }
    }

    function changedepartment()
    {
        $change_department_id = $_POST['change_department_id'];
        $change_department_status = $_POST['change_department_status'];
        if ($change_department_status == 0) {
            $this->db->where('department_id',$change_department_id)->update('department',['department_trash'=>1]);
        } else {
            $this->db->where('department_id',$change_department_id)->update('department',['department_trash'=>0]);

        }
    }
    function changebook_acc()
    {
        if($_POST['change_bookacc_status'] == 0){
            $this->db->where('bc_id',$_POST['change_bookacc_id'])->update('book_account',['bc_trash'=>1]);
        }else{
            $this->db->where('bc_id',$_POST['change_bookacc_id'])->update('book_account',['bc_trash'=>0]);
        }
    }
    function changebank()
    {
        if($_POST['change_bank_status'] == 0){
            $this->db->where('bank_id',$_POST['change_bank_id'])->update('bank',['bank_trash'=>1]);
        }else{
            $this->db->where('bank_id',$_POST['change_bank_id'])->update('bank',['bank_trash'=>0]);
        }
    }
}