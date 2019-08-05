<?php
class Icons_Model extends CI_Model
{
    public function icons()
    {
        $query = $this->db->get('pageIcon');
        return $query->result();
    }
    public function addData($data)
    {
        $this->db->insert('pageicon', $data);
    }
    public function editData($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('pageicon', $data);
    }
}