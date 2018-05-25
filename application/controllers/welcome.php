<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('welcome_model', 'wa_model');
    }

    public function index() {
        $data = array();
        $data['published_service_one'] = $this->wa_model->select_published_service_one();
        $data['published_logo'] = $this->wa_model->select_published_logo_one();

        $data['maincontent'] = $this->load->view('home_page_content', $data, TRUE);
        $data['title'] = "Home";
        $data['slider'] = "1";
        $this->load->view('master', $data);
    }

    public function contact() {
        $data = array();
        $data['maincontent'] = $this->load->view('contact_page', $data, TRUE);
        $data['title'] = "Contact";
        $data['slider'] = "0";
        $data['published_logo'] = $this->wa_model->select_published_logo_one();
        $this->load->view('master', $data);
    }

    public function service_page($category_id) {
        $data = array();
        $data['service_info'] = $this->wa_model->service_info_by_id($category_id); // for showing news details when clicked to Read more button
        $data['maincontent'] = $this->load->view('service_page', $data, TRUE);
        $data['slider'] = '0';
        $data['title'] = 'Service';
        $data['published_logo'] = $this->wa_model->select_published_logo_one();
        $this->load->view('master', $data);
    }

    public function training() {
        $data = array();
        $data['title'] = "Training";
        $data['slider'] = "0";
        $data['published_service_one'] = $this->wa_model->select_published_service_one();
        $data['published_logo'] = $this->wa_model->select_published_logo_one();
        $data['maincontent'] = $this->load->view('training_page', $data, TRUE);
        $this->load->view('master', $data);
    }
  
    /*
    public function editing() {
        $data = array();
        $data['title'] = "Editing";
        $data['slider'] = "0";
        $data['published_service_one'] = $this->wa_model->select_published_service_one();
        $data['published_logo'] = $this->wa_model->select_published_logo_one();
        $data['maincontent'] = $this->load->view('editing_page', $data, TRUE);
        $this->load->view('master', $data);
    }

    public function research() {
        $data = array();
        $data['title'] = "Research";
        $data['slider'] = "0";
        $data['published_service_one'] = $this->wa_model->select_published_service_one();
        $data['published_logo'] = $this->wa_model->select_published_logo_one();
        $data['maincontent'] = $this->load->view('research_page', $data, TRUE);
        $this->load->view('master', $data);
    }
    public function article_editing() {
        $data = array();
        $data['title'] = "Article";
        $data['slider'] = "0";
        $data['published_service_one'] = $this->wa_model->select_published_service_one();
        $data['published_logo'] = $this->wa_model->select_published_logo_one();
        $data['maincontent'] = $this->load->view('article_editing_page', $data, TRUE);
        $this->load->view('master', $data);
    }  
    */

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */