<?php
class UploadImage extends CI_Controller{
    function uploadcomp()
    {
        $date = str_replace( ':', '', date('Y-m-d'));
        if (!is_dir('images/comp/'.$date)) {
            mkdir('./images/comp/'. $date, 0777, TRUE);
        }
        $config['upload_path']   = './images/comp/'.$date;
        $config['allowed_types'] = 'gif|jpg|png|jpeg|';
        $config['max_size']      = 0;
        $config['max_width']     = 5000;
        $config['max_height']    = 5000;
        $config['overwrite'] = FALSE;
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('file')) {
            $error = array('error' => $this->upload->display_errors());
            //เรียกใช้งาน view และ ส่งค่า $error ให้แสดงผลกรณีมี Error
            echo json_encode($error);
        }else {
            //ตัวแปร $data เก็บข้อมูล ของไฟล์ที่ Upload
            $data = array('success' => $this->upload->data());
            //เรียกใช้งาน view และ ส่งค่า $data ไปแสดงผลด้วย
            echo json_encode($data);
        }
    }
}