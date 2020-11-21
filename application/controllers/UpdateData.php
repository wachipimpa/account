<?php

/**
 * Created by PhpStorm.
 * User: aungpoa
 * Date: 21/11/2020 AD
 * Time: 14:23
 */
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
        $department_code = $_POST['department_code'];
        $department_name = $_POST['department_name'];
        $data = array(
            'department_code'=>$department_code,
            'department_name'=>$department_name
        );
        $this->UpdateModel->update_department($data, $edit_department_id);
    }
}