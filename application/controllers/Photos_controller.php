<?php
class Photos_controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Api_Model');
    }
    public function index()
    {
        $data['albumId'] = $this->input->post('albumId');
        $albumId = $this->input->post('albumId');
        $data['users'] = $this->Api_Model->album_photos($albumId);
        $this->load->view('templates/header_view.php');
        $this->load->view('templates/photos_view.php', $data);
        $this->load->view('templates/footer_view.php');
    }
}