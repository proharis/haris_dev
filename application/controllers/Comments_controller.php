<?php
class Comments_controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Api_Model');
    }
    public function index()
    {
        $data['users'] = $this->Api_Model->show_comments();
        $this->load->view('templates/header_view.php');
        $this->load->view('templates/comment_view.php', $data);
        $this->load->view('templates/footer_view.php');
    }
}