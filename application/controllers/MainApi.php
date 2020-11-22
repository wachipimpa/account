<?php

class MainApi extends  CI_Controller
{
    function get_booking_account()
    {
        echo json_encode($this->db->where('bc_trash', 0)->get('book_account')->result());
    }
    function get_department()
    {
        echo json_encode($this->db->where('department_trash',0)->get('department')->result());
    }
    function get_chartacc()
    {
        echo json_encode($this->db->where('acc_trash',0)->get('chart_account')->result());
    }
}