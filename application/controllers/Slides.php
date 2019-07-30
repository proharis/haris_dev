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
        $data['slider_id'] = $slider_id;
        $slides = $this->Admin_Login_Model->showSlides($slider_id);
        $data['slides'] = $slides;
        $this->load->view('templates/header_view.php');
        $this->load->view('templates/slides.php', $data);
        $this->load->view('templates/footer_view.php');
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
            // Check if image file is a actual image or fake image
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
            // Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["slide_image"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if (
                $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif"
            ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
            } else {

                // echo $target_file . '<br>' . $_FILES["slide_image"]["tmp_name"];
                // die();
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
                'image' => $_FILES["slide_image"]["name"], 'slide_id' => $slide_id
            );
            $this->Admin_Login_Model->slide_edit($slide, $slide_id);

            redirect(base_url('Slides/index/' . $slider_id));
        }
    }
    public function delete($slide_id = 0, $slider_id = 0)
    {

        $this->db->delete('slides', array('slide_id' => $slide_id));

        redirect(base_url('Slides/index/' . $slider_id));
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
            // Check if image file is a actual image or fake image
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
            // Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["slide_image"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if (
                $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif"
            ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
            } else {

                // echo $target_file . '<br>' . $_FILES["slide_image"]["tmp_name"];
                // die();
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
                'image' => $_FILES["slide_image"]["name"], 'slider_id' => $slider_id
            );
            $this->Admin_Login_Model->slide_add($slide);

            redirect(base_url('Slides/index/' . $slider_id));
        }
    }
}