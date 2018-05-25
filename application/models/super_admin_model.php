<?php

class Super_Admin_Model extends CI_Model {

    //save logo to logo table
    public function save_logo_info_to_logo_table($data) {
        $this->db->insert('logo', $data);
    }

    //for show all logos in admin panel
    public function select_all_logos() {
        $this->db->select('*');
        $this->db->from('logo');
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

    public function save_service_info($data) {
        $this->db->insert('tbl_service', $data);
    }

    public function select_all_services() {
        $this->db->select('*');
        $this->db->from('tbl_service');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

}
