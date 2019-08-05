<?php
class Slides extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Admin_Login_Model');
        $this->load->library('session');
    }
    public function index($slider_id = 0)
    {
        $this->form_validation->set_rules('slider_delete_id', 'slider_delete_id', 'required');
        $this->form_validation->set_rules('slide_delete_id', 'slide_delete_id', 'required');
        if ($this->form_validation->run() == false) {
            $data['slider_id'] = $slider_id;
            $slides = $this->Admin_Login_Model->showSlides($slider_id);
            $data['slides'] = $slides;
            $this->load->view('templates/header_view.php');
            $this->load->view('templates/slides.php', $data);
            $this->load->view('templates/footer_view.php');
        } else {
            if ($this->input->post('activate') == 'activate') {
                $status = array('status' => 1);
                $this->Admin_Login_Model->Slide_status($this->input->post('slide_delete_id'),  $status);
                redirect(base_url('Slides/index/' . $this->input->post('slider_delete_id')));
            } else if ($this->input->post('deactivate') == 'deactivate') {
                $status = array('status' => 0);
                $this->Admin_Login_Model->Slide_status($this->input->post('slide_delete_id'),  $status);
                redirect(base_url('Slides/index/' . $this->input->post('slider_delete_id')));
            } else {
                $this->db->delete('slides', array('slide_id' => $this->input->post('slide_delete_id')));
                redirect(base_url('Slides/index/' . $this->input->post('slider_delete_id')));
            }
        }
    }
    public function edit($slider_id = 0, $slide_id = 0)
    {
        $this->form_validation->set_rules('slide_title', 'Slide_title', 'required');
        if ($this->form_validation->run() == false) {
            $slides = $this->Admin_Login_Model->showSlidesForEdit($slide_id);
            $data['slides'] = $slides;
            $this->load->view('templates/header_view.php');
            $this->load->view('templates/slide_edit_view.php', $data);
            $this->load->view('templates/footer_view.php');
        } else {
            $target_dir = "C:/xampp/htdocs/haris/assets/image/";
            $target_file = $target_dir . basename($_FILES["slide_image"]["name"]);

            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["slide_image"]["tmp_name"]);
                if ($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }
            if ($_FILES["slide_image"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            if (
                $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif"
            ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";

                $uploadOk = 0;
            }
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            } else {

                if (move_uploaded_file($_FILES["slide_image"]["tmp_name"], $target_file)) {
                    echo "The file " . basename($_FILES["slide_image"]["name"]) . " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
            if ($_FILES["slide_image"]["name"]) {
                $slide_description = $this->input->post('slide_description');
                $slide_video = $this->input->post('slide_video');
                $slide_status = $this->input->post('slide_status');
                $slide_content = $this->input->post('slide_content');
                $slide_title = $this->input->post('slide_title');
                $slide = array(
                    'description' => $slide_description,
                    'video' => $slide_video,
                    'status' => $slide_status,
                    'title' => $slide_title,
                    'image' => $_FILES["slide_image"]["name"],
                    'content' => $slide_content, 'slide_id' => $slide_id,
                    'slide_type' => $this->input->post('optradio')
                );
                $this->Admin_Login_Model->slide_edit($slide, $slide_id);
            } else {
                $slide_description = $this->input->post('slide_description');
                $slide_video = $this->input->post('slide_video');
                $slide_status = $this->input->post('slide_status');
                $slide_content = $this->input->post('slide_content');
                $slide_title = $this->input->post('slide_title');
                $slide = array(
                    'description' => $slide_description,
                    'video' => $slide_video,
                    'status' => $slide_status,
                    'title' => $slide_title,
                    'content' => $slide_content, 'slide_id' => $slide_id,
                    'slide_type' => $this->input->post('optradio')
                );
                $this->Admin_Login_Model->slide_edit($slide, $slide_id);
            }


            redirect(base_url('Slides/index/' . $slider_id));
        }
    }
    public function add($slider_id = 0)
    {
        $this->form_validation->set_rules('slide_title', 'Slide_title', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_view.php');
            $this->load->view('templates/slide_add_view.php');
            $this->load->view('templates/footer_view.php');
        } else {
            $target_dir = "C:/xampp/htdocs/haris/assets/image/";
            $target_file = $target_dir . basename($_FILES["slide_image"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["slide_image"]["tmp_name"]);
                if ($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            if ($_FILES["slide_image"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            if (
                $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif"
            ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            } else {
                if (move_uploaded_file($_FILES["slide_image"]["tmp_name"], $target_file)) {
                    echo "The file " . basename($_FILES["slide_image"]["name"]) . " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
            $slide_description = $this->input->post('slide_description');
            $slide_video = $this->input->post('slide_video');
            $slide_status = $this->input->post('slide_status');
            $slide_content = $this->input->post('slide_content');
            $slide_title = $this->input->post('slide_title');
            $slide = array(
                'description' => $slide_description,
                'video' => $slide_video,
                'status' => $slide_status,
                'title' => $slide_title,
                'content' => $slide_content,
                'image' => $_FILES["slide_image"]["name"], 'slider_id' => $slider_id,
                'slide_type' => $this->input->post('optradio')
            );
            $this->Admin_Login_Model->slide_add($slide);
            redirect(base_url('Slides/index/' . $slider_id));
        }
    }
}