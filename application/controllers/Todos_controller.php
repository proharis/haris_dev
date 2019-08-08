<?php
class Todos_controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Api_Model');
    }
    public function index()
    {
        $data['users'] = $this->Api_Model->show_todos();
        $this->load->view('templates/header_view.php');
        $this->load->view('templates/todos_view.php', $data);
        $this->load->view('templates/footer_view.php');
    }
}