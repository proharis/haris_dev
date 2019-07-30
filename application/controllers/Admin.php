<?php
class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Admin_Login_Model');
        $this->load->library('session');
    }
    public function index()
    {
        $this->load->view('templates/header_view.php');
        $this->load->view('templates/admin_login.php');
        $this->load->view('templates/footer_view.php');
    }
    public function admin_home()
    {
        $rules = array(
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide a %s.',
                ),
            ),
            array(
                'field' => 'email',
                'label' => 'Email Address',
                'rules' => 'required|valid_email'
            )
        );
        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header_view.php');
            $this->load->view('templates/admin_login.php');
            $this->load->view('templates/footer_view.php');
        } else {
            $record = array('email' => $this->input->post('email'), 'password' => $this->input->post('password'));
            $result = $this->Admin_Login_Model->login($record);
            if (!empty($result)) {
                $newdata = array(
                    'username'  => $result[0]['admin'],
                    'logged_in' => TRUE
                );

                $this->session->set_userdata($newdata);
                $this->load->view('templates/header_view.php');
                $this->load->view('templates/admin_home.php');
                $this->load->view('templates/footer_view.php');
            } else {
                $this->load->view('templates/header_view.php');
                $this->load->view('templates/admin_login.php');
                $this->load->view('templates/footer_view.php');
            }
        }
    }
}