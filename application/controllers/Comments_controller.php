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
        $data['post_id'] = $this->input->post('postId');
        $user_id = $this->input->post('postId');
        $data['users'] = $this->Api_Model->post_comments($user_id);
        $this->load->view('templates/header_view.php');
        $this->load->view('templates/comment_view.php', $data);
        $this->load->view('templates/footer_view.php');
    }
}