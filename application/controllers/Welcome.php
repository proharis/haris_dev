<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
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

		$this->load->view('welcome_message');

		$this->load->view('templates/footer_view.php');
	}
	public function email()
	{
		$this->load->helper('form');
		$this->load->view('templates/header_view.php');
		$this->load->view('templates/contact_information');

		$this->load->view('templates/footer_view.php');
	}
	public function about()
	{
		$this->load->helper('form');
		$this->load->view('templates/header_view.php');
		$this->load->view('templates/about_us');

		$this->load->view('templates/footer_view.php');
	}
	public function send_mail()
	{
		$whitelist = array(
			'127.0.0.2',
			'::1'
		);

		if (!in_array($_SERVER['REMOTE_ADDR'], $whitelist)) {
			$this->session->set_flashdata("email_sent", "localhost");
			$this->load->view('templates/header_view.php');
			$this->load->view('templates/contact_information');
			$this->load->view('templates/footer_view.php');
		} else {
			$from_email = $this->input->post('email_address');
			$to_email = "harischaudhery12@gmail.com";
			//Load email library
			$this->load->library('email');
			$this->email->from($from_email, 'Identification');
			$this->email->to($to_email);
			$this->email->subject('Send Email Codeigniter');
			$this->email->message('The email send using codeigniter library' . 'My name' . $this->input->post('first_name') . ' ' . $this->input->post('last_name') . 'company: ' . $this->input->post('company'));
			//Send mail
			if ($this->email->send())
				$this->session->set_flashdata("email_sent", "Congragulation Email Send Successfully.");
			else
				$this->session->set_flashdata("email_sent", "You have encountered an error");
			$this->load->view('templates/header_view.php');
			$this->load->view('templates/contact_information');
			$this->load->view('templates/footer_view.php');
		}
	}
}