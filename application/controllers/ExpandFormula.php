<?php
class ExpandFormula extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    public function index()
    {
        $this->form_validation->set_rules('a', 'a', 'required');
        $this->form_validation->set_rules('b', 'b', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_view.php');
            $this->load->view('templates/expandFormula.php');
            $this->load->view('templates/footer_view.php');
        } else {

            $a = $this->input->post('a');
            $b = $this->input->post('b');
            $c = ($a * $a) + ($b * $b) + (2 * $a * $b);
            $data['answer'] = $c;
            $this->load->view('templates/header_view.php');
            $this->load->view('templates/expandFormula.php', $data);
            $this->load->view('templates/footer_view.php');
        }
    }
}