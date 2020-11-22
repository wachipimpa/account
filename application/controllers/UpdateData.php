<?php


class UpdateData extends CI_Controller
{
    function update_company()
    {
        $comp_id = $_POST['comp_id'];
        $review_picture = $_POST['review_picture'];
        $comp_name = $_POST['comp_name'];
        $comp_user = $_POST['comp_user'];
        $comp_phone = $_POST['comp_phone'];
        $comp_serail = $_POST['comp_serail'];
        $comp_address =  $_POST['comp_address'];
        $comp_tax = $_POST['comp_tax'];
        $comp_decimal = $_POST['comp_decimal'];
        $data = array(
            'comp_name'=>$comp_name,
            'comp_user'=>$comp_user,
            'comp_phone'=>$comp_phone,
            'comp_serial_tax'=>$comp_serail,
            'comp_address'=>$comp_address,
            'comp_tax'=>$comp_tax,
            'comp_decimal'=>$comp_decimal,
            'comp_createdate'=>date('Y-m-d'),
            'comp_trash'=>0,
            'comp_imgpath'=>$review_picture
        );
        $this->UpdateModel->update_company($data, $comp_id);
    }
    function update_department()
    {
        $edit_department_id = $_POST['edit_department_id'];
        $edit_department_code = $_POST['edit_department_code'];
        $edit_department_name = $_POST['edit_department_name'];
        $data = array(
            'department_code'=>$edit_department_code,
            'department_name'=>$edit_department_name
        );
        $this->UpdateModel->update_department($data, $edit_department_id);
    }
    function updatebook_account()
    {
        $edit_bookac_id = $_POST['edit_bookac_id'];
        $edit_bookac_code = $_POST['edit_bookac_code'];
        $edit_bookac_name = $_POST['edit_bookac_name'];
        $edit_bookac_doc = $_POST['edit_bookac_doc'];
        $data = array(
            'bc_code'=>$edit_bookac_code,
            'bc_name'=>$edit_bookac_name,
            'bc_doc'=>$edit_bookac_doc
        );
        $this->UpdateModel->updatebook_account($data, $edit_bookac_id);
    }
    function update_bank()
    {
        $edit_bank_id = $_POST['edit_bank_id'];
        $edit_bank_code = $_POST['edit_bank_code'];
        $edit_bank_name = $_POST['edit_bank_name'];
        $data = array(
            'bank_code'=>$edit_bank_code,
            'bank_name'=>$edit_bank_name
        );
        $this->UpdateModel->update_bank($data, $edit_bank_id);
    }
    function update_chartacc()
    {
        $edit_acc_id = $_POST['edit_acc_id'];
        $edit_acc_code = $_POST['edit_acc_code'];
        $edit_acc_name = $_POST['edit_acc_name'];
        $edit_acc_mode = $_POST['edit_acc_mode'];
        $edit_acc_detail = $_POST['edit_acc_detail'];
        $data = array(
            'acc_code'=>$edit_acc_code,
            'acc_name'=>$edit_acc_name,
            'acc_mode'=>$edit_acc_mode,
            'acc_detail'=>$edit_acc_detail
        );
        $this->UpdateModel->update_chartacc($data, $edit_acc_id);
    }
}