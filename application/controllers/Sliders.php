<?php
class Sliders extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Admin_Login_Model');
        $this->load->library('session');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('slider_delete_id', 'slider_delete_id', 'required');
        //if delete in post is true
        if ($this->form_validation->run() == false) {
            $sliders = $this->Admin_Login_Model->showSliders();
            $data['CountOfSlides'] =  count($this->Admin_Login_Model->countSlides());;
            $data['sliders'] = $sliders;
            $this->load->view('templates/header_view.php');
            $this->load->view('templates/sliders.php', $data);
            $this->load->view('templates/footer_view.php');
        } else {
            if ($this->input->post('deactivate') == 'deactivate') {
                $status = array('slider_status' => 0);
                $this->Admin_Login_Model->Slider_status($this->input->post('slider_delete_id'),  $status);
                redirect(base_url('sliders'));
            } else if ($this->input->post('activate') == 'activate') {
                $status = array('slider_status' => 1);
                $this->Admin_Login_Model->Slider_status($this->input->post('slider_delete_id'),  $status);
                redirect(base_url('sliders'));
            } else {
                $id = array('slider_id' => $this->input->post('slider_delete_id'));
                $this->Admin_Login_Model->Slider_delete($id);
                redirect(base_url('sliders'));
            }
        }
    }
    public function add()
    {
        $this->form_validation->set_rules('slider_title', 'Slider_title', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_view.php');
            $this->load->view('templates/slider_add.php');
            $this->load->view('templates/footer_view.php');
        } else {
            //handle post
            $slider = array('slider_description' => $this->input->post('slider_description'), 'slider_title' => $this->input->post('slider_title'), 'slider_status' => $this->input->post('slider_status'));
            $this->Admin_Login_Model->slider_add($slider);
            redirect(base_url('sliders'));
        }
    }
    public function edit()
    {
        $this->form_validation->set_rules('slider_title', 'Slider_title', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->helper('form');
            $slider_id = $this->uri->segment('3');
            $query = $this->db->get_where("slider", array("slider_id" => $slider_id));
            $data['records'] = $query->result();
            $this->load->view('templates/header_view.php');
            $this->load->view('templates/updateSlider.php', $data);
            $this->load->view('templates/footer_view.php');
        } else {
            //handle post
            $data = array(
                'slider_description' => $this->input->post('slider_description'),
                'slider_title' => $this->input->post('slider_title'),
                'slider_status' => $this->input->post('slider_status')
            );

            $slider_id = $this->input->post('slider_id');
            $this->Admin_Login_Model->updateSlider($data, $slider_id);
            redirect(base_url('sliders'));
        }
    }

    // public function delete()
    // {
    //     
    // }
}