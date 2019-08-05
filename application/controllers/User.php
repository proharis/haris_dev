<?php
class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('User_Model');
        $this->load->library('session');
    }
    public function index()
    {
        $this->form_validation->set_rules('id', 'id', 'required');
        if ($this->form_validation->run() == false) {
            $data['users'] = $this->User_Model->Users();
            $this->load->view('templates/header_view.php');
            $this->load->view('templates/users.php', $data);
            $this->load->view('templates/footer_view.php');
        } else {
            $this->db->delete('user', array('id' => $this->input->post('id')));
            redirect(base_url('User'));
        }
    }
    public function edit($userId = 0)
    {
        $this->form_validation->set_rules('firstName', 'firstName', 'required');
        $this->form_validation->set_rules('lastName', 'lastName', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('passconf', 'passconf', 'required|matches[password]');
        if ($this->form_validation->run() == false) {
            $query = $this->db->get_where("user", array("id" => $userId));
            $data['users'] = $query->result();
            $this->load->view('templates/header_view.php');
            $this->load->view('templates/userEdit.php', $data);
            $this->load->view('templates/footer_view.php');
        } else {
            $data = array(
                'firstName' => $this->input->post('firstName'),
                'lastName' => $this->input->post('lastName'),
                'password' => $this->input->post('password')
            );
            $this->User_Model->updateUser($data, $userId);
            redirect(base_url('User'));
        }
    }
}