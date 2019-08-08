<?php
class Api_Model extends CI_Model
{
    // public function InserPost($users, $address, $company)
    // {
    //     // $query = $this->db->get_where('posts', array( //making selection
    //     //     'id' => $id
    //     // ));
    //     // $count = $query->num_rows();
    //     // if ($count === 0) {

    //     // $this->db->insert('company', $company);
    //     // $this->db->insert('address', $address);
    //     // $this->db->insert('users', $users);
    //     // // }
    // }
    public function show_user()
    {
        $query = $this->db->get('users');
        return $query->result();
    }
    public function show_todos()
    {
        $query = $this->db->get('todos');
        return $query->result();
    }
    public function show_photos()
    {
        $query = $this->db->get('photos');
        return $query->result();
    }
    public function show_albums()
    {
        $query = $this->db->get('albums');
        return $query->result();
    }
    public function show_comments()
    {
        $query = $this->db->get('comments');
        return $query->result();
    }
    public function show_post()
    {
        $query = $this->db->get('posts');
        return $query->result();
    }
}