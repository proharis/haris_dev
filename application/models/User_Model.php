<?php
class User_Model extends CI_Model
{
    public function SignUp($data)
    {
        $this->db->insert('user', $data);
    }
    public function Users()
    {
        $query = $this->db->get('user');
        return $query->result();
    }
    public function updateUser($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }
}