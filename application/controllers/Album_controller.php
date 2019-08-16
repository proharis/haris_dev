<?php
class Album_controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Api_Model');
    }
    public function index()
    {
        $user_id = $this->input->post('userId');
        $data['users'] = $this->Api_Model->user_albums($user_id);
        $this->load->view('templates/header_view.php');
        $this->load->view('templates/album_view.php', $data);
        $this->load->view('templates/footer_view.php');
    }
}