<?php
class User_signUp extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('User_Model');
    }
    public function index()
    {
        $this->form_validation->set_rules('firstName', 'firstName', 'required');
        $this->form_validation->set_rules('lastName', 'lastName', 'required');
        $this->form_validation->set_rules('email', 'email', 'required|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('passconf', 'passconf', 'required|matches[password]');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_view.php');
            $this->load->view('templates/user_signUp.php');
            $this->load->view('templates/footer_view.php');
        } else {
            $record = array("firstName" => $this->input->post('firstName'), "email" => $this->input->post('email'), "lastName" => $this->input->post('lastName'), "password" => $this->input->post('password'));
            $this->User_Model->SignUp($record);
            redirect(base_url('User'));
        }
    }
}