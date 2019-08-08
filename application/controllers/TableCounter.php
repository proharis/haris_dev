<?php
class TableCounter extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    public function index()
    {
        $this->form_validation->set_rules('tableOf', 'tableOf', 'required');
        $this->form_validation->set_rules('tableStart', 'tableStart', 'required');
        $this->form_validation->set_rules('tableEnd', 'tableEnd', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_view.php');
            $this->load->view('templates/table.php');
            $this->load->view('templates/footer_view.php');
        } else {
            $table = array();
            $table_of = $this->input->post('tableOf');
            $table_start = $this->input->post('tableStart');
            $table_end = $this->input->post('tableEnd');
            for ($i = $table_start; $i <=  $table_end; $i++) {
                $table[$i] = $table_of * $i;
            }
            $data['table'] = $table;
            $data['table_of'] = $table_of;
            $this->load->view('templates/header_view.php');
            $this->load->view('templates/table.php', $data);
            $this->load->view('templates/footer_view.php');
        }
    }
}