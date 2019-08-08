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
        foreach ($data as $key => $value) {
            $findme = "enable";
            $pos = strpos($key, $findme);
            if ($pos === false) { } else {
                if ($value == '') {
                    $data[$key] = 0;
                }
            }
        }

        $this->db->where('id', $id);
        $this->db->update('pageicon', $data);
    }
    public function enable()
    {
        $this->db->select('facebook_enable, instagram_enable, snapchat_enable, skype_enable, linkedin_enable, slack_enable, whatsapp_enable, gmail_enable');
        $query = $this->db->get('pageIcon');
        return $query->result();
    }
}