<?php
class Pages extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Pages_Model');
        $this->load->library('session');
    }

    public function index()
    {
        $this->form_validation->set_rules('id', 'id', 'required');
        if ($this->form_validation->run() == FALSE) {
            $result = $this->Pages_Model->show_pages();
            $data['pages'] = $result;
            $this->load->view('templates/header_view.php');
            $this->load->view('templates/pages.php', $data);
            $this->load->view('templates/footer_view.php');
        } else {
            if ($this->input->post('activate') == 'activate') {
                $status = array('status' => 1);
                $this->Pages_Model->Page_status($this->input->post('id'),  $status);
                redirect(base_url('Pages/index'));
            } else if ($this->input->post('deactivate') == 'deactivate') {
                $status = array('status' => 0);
                $this->Pages_Model->Page_status($this->input->post('id'),  $status);
                redirect(base_url('Pages/index'));
            } else {
                $this->db->delete('pages', array('id' => $this->input->post('id')));
                redirect(base_url('Pages/index'));
            }
        }
    }

    public function add()
    {
        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('slug', 'slug', 'required|is_unique[pages.slug]', array(
            'required'      => 'You have not provided %s.',
            'is_unique'     => 'This %s already exists.'
        ));

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header_view.php');
            $this->load->view('templates/pages_add.php');
            $this->load->view('templates/footer_view.php');
        } else {
            $page_add = array('title' => $this->input->post('title'), 'slug' => $this->input->post('slug'), 'content' => $this->input->post('content'), 'status' => $this->input->post('status'), 'meta_copyright' => $this->input->post('meta_copyright'), 'meta_dc_title' => $this->input->post('meta_dc_title'), 'meta_description' => $this->input->post('meta_description'), 'meta_keywords' => $this->input->post('meta_keywords'), 'mata_robots' => $this->input->post('mata_robots'),);
            $this->Pages_Model->add($page_add);
        }
    }

    public function edit($id = 0)
    {
        if ($this->input->post('slug') == $this->input->post('oldSlug')) {
            $this->form_validation->set_rules('slug', 'slug', 'required');
        } else {
            $this->form_validation->set_rules('slug', 'slug', 'required|is_unique[pages.slug]');
        }
        $this->form_validation->set_rules('title', 'title', 'required');
        if ($this->form_validation->run() == FALSE) {
            $query = $this->db->get_where("pages", array("id" => $id));
            $data['records'] = $query->result();
            $this->load->view('templates/header_view.php');
            $this->load->view('templates/pages_edit.php', $data);
            $this->load->view('templates/footer_view.php');
        } else {
            $updated_page = array('title' => $this->input->post('title'), 'slug' => $this->input->post('slug'), 'content' => $this->input->post('content'), 'status' => $this->input->post('status'), 'meta_copyright' => $this->input->post('meta_copyright'), 'meta_dc_title' => $this->input->post('meta_dc_title'), 'meta_description' => $this->input->post('meta_description'), 'meta_keywords' => $this->input->post('meta_keywords'), 'mata_robots' => $this->input->post('mata_robots'),);
            $this->Pages_Model->update_page($updated_page, $id);
            redirect('pages/index');
        }
    }
}