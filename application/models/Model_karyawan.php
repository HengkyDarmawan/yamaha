<?php

class Model_karyawan extends CI_Model {
    public function getAllKaryawan(){
        $this->db->select('*');
        $this->db->from('karyawan');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function addkaryawan()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "email" => $this->input->post('email', true),
            "phone" => $this->input->post('phone', true),
            "tmpt_tinggal" => $this->input->post('tmpt_tinggal', true),
        ];
        $this->db->insert('karyawan', $data);
    }

    public function hapuskaryawan($id)
    {
        $this->db->delete('karyawan', ['id_karyawan' => $id]);
    }
    public function getkaryawanId($id)
    {
        return $this->db->get_where('karyawan', ['id_karyawan' => $id])->row_array();
    }

    public function editkaryawan()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "email" => $this->input->post('email', true),
            "phone" => $this->input->post('phone', true),
            "tmpt_tinggal" => $this->input->post('tmpt_tinggal', true),
        ];
        $this->db->where('id_karyawan', $this->input->post('id_karyawan'));
        $this->db->update('karyawan', $data);
    }
}