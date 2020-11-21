<?php

class InsertData extends  CI_Controller
{
    function insert_company()
    {
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
        $this->InsertModel->insert_company($data);
    }
    function insert_department()
    {
        $department_code = $_POST['department_code'];
        $department_name = $_POST['department_name'];
        $data = array(
            'department_code'=>$department_code,
            'department_name'=>$department_name,
            'department_trash'=>0,
            'department_createdate'=>date('Y-m-d')
        );
        $this->InsertModel->insert_department($data);
    }
    function insert_book_account()
    {
        $bookac_code = $_POST['bookac_code'];
        $bookac_name = $_POST['bookac_name'];
        $bookac_doc = $_POST['bookac_doc'];
        $data = array(
            'bc_code'=>$bookac_code,
            'bc_name'=>$bookac_name,
            'bc_doc'=>$bookac_doc,
            'bc_createdate'=>date('Y-m-d'),
            'bc_trash'=>0
        );
        $this->InsertModel->insert_book_account($data);
    }
}