<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index()
	{
	    $this->load->view('template/header');
	    $this->load->view('template/sidebar');
		$this->load->view('index');
		$this->load->view('template/footer');
	}
	function company($index = 1)
    {

        $row = 25;
        $result['company'] = $this->QueryModel->get_company($index, $row);
        $result['links'] = $this->getpagination('welcome/company', $this->QueryModel->get_company_count(), 3, $row);

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('company/listcompany', $result);
        $this->load->view('template/footer');
    }
    function create_compay()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('company/createcompany');
        $this->load->view('template/footer');
    }
    function edit_company()
    {
        $result['comp_id'] = $_GET['comp_id'];
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('company/editcompany',$result);
        $this->load->view('template/footer');
    }
    function listdepartment($index = 1)
    {
        $row = 25;
        $result['department'] = $this->QueryModel->get_department($index, $row);
        $result['links'] = $this->getpagination('welcome/listdepartment', $this->QueryModel->get_department_count(), 3, $row);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('department/listdepartment',$result);
        $this->load->view('template/footer');
    }
    function listbookac($index = 1)
    {
        $row = 25;
        $result['book_account'] = $this->QueryModel->get_book_account($index, $row);
        $result['links'] = $this->getpagination('welcome/listbookac', $this->QueryModel->get_book_account_count(), 3, $row);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('bookac/listbookac',$result);
        $this->load->view('template/footer');
    }
    function listbank($index = 1)
    {
        $row = 25;
        $result['bank'] = $this->QueryModel->get_bank($index, $row);
        $result['links'] = $this->getpagination('welcome/listbank', $this->QueryModel->get_bank_count(), 3, $row);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('bank/listbank',$result);
        $this->load->view('template/footer');
    }
    function getpagination($url, $all_row, $uri_segment, $rows)
    {
        $config['base_url'] = base_url() . $url;
        $config['total_rows'] = $all_row;
        $config['per_page'] = $rows;
        $config["uri_segment"] = $uri_segment;
        $config['num_links'] = 2;
        $config['use_page_numbers'] = TRUE;
        $config['reuse_query_string'] = TRUE;
        $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-center pagination-lg">';
        $config['full_tag_close'] = '</ul></nav>';
        $config['first_link'] = '<<';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = '>>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = '>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '<';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        return $this->pagination->create_links();
    }

}
