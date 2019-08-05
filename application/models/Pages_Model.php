<?php
class Pages_Model extends CI_Model
{
    public function add($page)
    {
        if ($page['status'] == "") {
            $page['status'] = '0';
            $this->db->insert('pages', $page);
            die();
        } else {
            $this->db->insert('pages', $page);
            die();
        }
        return;
    }
    public function show_pages()
    {
        $query = $this->db->get('pages');
        return $query->result();
    }
    public function update_page($page, $id)
    {
        if ($page['status'] == "") {

            $page['status'] = '0';
            $this->db->where('id', $id);
            $this->db->update('pages', $page);
        } else {
            $this->db->where('id', $id);
            $this->db->update('pages', $page);
        }
        return;
    }
    public function Page_status($id, $status)
    {
        $this->db->where('id', $id);
        $this->db->update('pages', $status);
    }
    public function showPagesForEdit($id)
    {
        $query = $this->db->get_where("pages", array("id" => $id));
        return $query->result();
    }
}