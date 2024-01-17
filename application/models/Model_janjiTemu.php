<?php

class Model_janjiTemu extends CI_Model {
    public function getAll(){
        $this->db->select('*');
        $this->db->from('janji_temu');
        $this->db->where_in('status', ['review', 'rejected']);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getAllAcc(){
        $this->db->select('*');
        $this->db->from('janji_temu');
        $this->db->where('status', 'accepted');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getAllUserReview()
    {
        $this->db->select('*');
        $this->db->from('janji_temu');
        // $this->db->where_in('status', ['review', 'rejected']);
        $query = $this->db->get();
        return $query->result_array();
    }
}