<?php

/**
 * Created by PhpStorm.
 * User: aungpoa
 * Date: 21/11/2020 AD
 * Time: 15:09
 */
class QueryView extends  CI_Model
{
    function get_companyedit($com_id)
    {
        return $this->db->where('comp_id',$com_id)->get('company')->result();
    }
}