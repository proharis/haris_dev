<?php
class Users_controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Api_Model');
    }
    public function index()
    {
        $data['users'] = $this->Api_Model->show_user();
        $this->load->view('templates/header_view.php');
        $this->load->view('templates/users_view.php', $data);
        $this->load->view('templates/footer_view.php');
    }
}