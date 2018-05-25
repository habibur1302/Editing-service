<?php

class Welcome_Model extends CI_Model {

    //select only one logo for show font end logo
    public function select_published_logo_one() {
        $this->db->select('*');
        $this->db->from('logo');
        $this->db->where('publication', 1);
        $this->db->order_by('logo_id', 'desc');
        $this->db->limit(1);
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;
    }

    //for geting services
    public function select_published_service_one() {
        $this->db->select('*');
        $this->db->from('tbl_service');
        $this->db->where('publication_status', 1);
        $this->db->order_by('category_id', 'desc');
        $this->db->limit(1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function service_info_by_id($category_id) {
        $this->db->select('*');
        $this->db->from('tbl_service');
        $this->db->where('category_id', $category_id);
        $query_result = $this->db->get();
        $result = $query_result->row(); // for showing one specific news details
        return $result;
    }

}
