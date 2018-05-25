<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start();

class Super_Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $admin_id = $this->session->userdata('admin_id');
        if ($admin_id == NULL) {
            redirect('admin', 'refresh');
        }
        $this->load->model('super_admin_model', 'sa_model');
    }

    public function index() {

        $data = array();
        $data['admin_main_content'] = $this->load->view('admin/dashbord', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function logout() {
        $this->session->unset_userdata('admin_full_name');
        $this->session->unset_userdata('admin_id');
        $sdata = array();
        $sdata['message'] = 'You are Successfully Logout !!';
        $this->session->set_userdata($sdata);
        redirect('admin');
    }
    
    
    
    public function manage_logo() {
        $data = array();
        $data['all_logos'] = $this->sa_model->select_all_logos();  //not need change when work
        $data['admin_main_content'] = $this->load->view('admin/manage_logo', $data, TRUE);
        $this->load->view('admin/admin_master', $data); //to load login page
    }
    
        //for save font end logo
    public function save_logo() {
        $data = array();
        $data['logo_name'] = $this->input->post('logo_name', TRUE);

        /*
         * ------- Start Image Upload---------
         */
        $config['upload_path'] = 'images/logo_images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '';
        $config['max_width'] = '';
        $config['max_height'] = '';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = '';
        $fdata = array();
        if (!$this->upload->do_upload('logo_image')) {
            $error = $this->upload->display_errors();
            echo $error;
            exit();
        } else {
            $fdata = $this->upload->data();
            $data['logo_image'] = $config['upload_path'] . $fdata['file_name'];
        }

        /*
         * --------End Image Upload---------
         */

        $this->sa_model->save_logo_info_to_logo_table($data);

        $sdata = array();
        $sdata['message'] = 'Save logo Successfully';
        $this->session->set_userdata($sdata);
        redirect('super_admin/manage_logo');  //back to add_news controller
    }
    
    
        //for adding service
    public function add_service() {
        $data = array();
        $data['admin_main_content'] = $this->load->view('admin/add_service_form', '', TRUE);
        $this->load->view('admin/admin_master', $data);
    }
    
        public function save_service() {
        $data = array();
        $data['category_title'] = $this->input->post('category_title', true);
        $data['category_name'] = $this->input->post('category_name', true);
        $data['category_short_description'] = $this->input->post('category_short_description', true);
        $data['category_long_description'] = $this->input->post('category_long_description', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        $data['location'] = $this->input->post('location', true);
        $data['author_name'] = $this->session->userdata('admin_full_name');

        /*
         * ------- Start Image Upload---------
         */
        $config['upload_path'] = 'images/research_images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '';
        $config['max_width'] = '';
        $config['max_height'] = '';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = '';
        $fdata = array();
        if (!$this->upload->do_upload('category_image')) {
            $error = $this->upload->display_errors();
            echo $error;
            exit();
        } else {
            $fdata = $this->upload->data();
            $data['category_image'] = $config['upload_path'] . $fdata['file_name'];
        }

        /*
         * --------End Image Upload---------
         */


        $this->super_admin_model->save_service_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Service Information Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_service');
    }
    
        //For show all services
    public function manage_service() {
        $data = array();
        $data['all_services'] = $this->sa_model->select_all_services();
        $data['admin_main_content'] = $this->load->view('admin/manage_service_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }
    

}
