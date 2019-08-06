<?php
class PageIcon extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Icons_Model');
    }
    public function index()
    {
        $res =  $this->Icons_Model->icons();
        $result['data'] = $res;
        if (empty($res)) {
            // $this->form_validation->set_rules('favicon', 'favicon', 'required');
            $this->form_validation->set_rules('Title', 'Title', 'required');
            // $this->form_validation->set_rules('logo', 'logo', 'required');
            $this->form_validation->set_rules('gmail', 'gmail', 'required');
            $this->form_validation->set_rules('facebook', 'facebook', 'required');
            $this->form_validation->set_rules('instagram', 'instagram', 'required');
            $this->form_validation->set_rules('snapchat', 'snapchat', 'required');
            $this->form_validation->set_rules('skype', 'skype', 'required');
            $this->form_validation->set_rules('slack', 'slack', 'required');
            $this->form_validation->set_rules('linkedin', 'linkedin', 'required');
            $this->form_validation->set_rules('whatsapp', 'whatsapp', 'required');
            if ($this->form_validation->run() == false) {
                $this->load->view('templates/header_view.php');
                $this->load->view('templates/pageIconAdd.php');
                $this->load->view('templates/footer_view.php');
            } else {
                if ($_FILES["favicon"]["name"]) {
                    $target_dir = "C:/xampp/htdocs/haris/assets/image/";
                    $target_file = $target_dir . basename($_FILES["favicon"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                    if (isset($_POST["submit"])) {
                        $check = getimagesize($_FILES["favicon"]["tmp_name"]);
                        if ($check !== false) {
                            echo "File is an image - " . $check["mime"] . ".";
                            $uploadOk = 1;
                        } else {
                            echo "File is not an image.";
                            $uploadOk = 0;
                        }
                    }
                    if ($_FILES["favicon"]["size"] > 500000) {
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

                        if (move_uploaded_file($_FILES["favicon"]["tmp_name"], $target_file)) {
                            echo "The file " . basename($_FILES["favicon"]["name"]) . " has been uploaded.";
                        } else {
                            echo "Sorry, there was an error uploading your file.";
                        }
                    }
                }
                if ($_FILES["logo"]["name"]) {
                    $target_dir = "C:/xampp/htdocs/haris/assets/image/";
                    $target_file = $target_dir . basename($_FILES["logo"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                    if (isset($_POST["submit"])) {
                        $check = getimagesize($_FILES["logo"]["tmp_name"]);
                        if ($check !== false) {
                            echo "File is an image - " . $check["mime"] . ".";
                            $uploadOk = 1;
                        } else {
                            echo "File is not an image.";
                            $uploadOk = 0;
                        }
                    }
                    if ($_FILES["logo"]["size"] > 500000) {
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

                        if (move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file)) {
                            echo "The file " . basename($_FILES["logo"]["name"]) . " has been uploaded.";
                        } else {
                            echo "Sorry, there was an error uploading your file.";
                        }
                    }
                }

                $Title = $this->input->post('Title');
                $gmail = "mailto:" . $this->input->post('gmail');
                $facebook = $this->input->post('facebook');
                $instagram = " http://www.instagram.com/" . $this->input->post('instagram');
                $snapchat = "https://www.snapchat.com/add/" . $this->input->post('snapchat');
                $skype = "skype:" . $this->input->post('skype') . "?chat";
                $slack = $this->input->post('slack');
                $linkedin = "http://ca.linkedin.com/in/linkedin" . $this->input->post('linkedin');
                $whatsapp = "https://wa.me/92" . $this->input->post('whatsapp');
                $data = array(
                    'title' => $Title,
                    'gmail' => $gmail,
                    'facebook' => $facebook,
                    'instagram' => $instagram,
                    'favicon' => $_FILES["favicon"]["name"],
                    'logo' => $_FILES["logo"]["name"],
                    'skype' => $skype,
                    'snapchat' => $snapchat,
                    'slack' => $slack,
                    'linkedin' => $linkedin,
                    'whatsapp' => $whatsapp
                );
                $this->Icons_Model->addData($data);
                redirect(base_url('PageIcon'));
            }
        } else {
            // $this->form_validation->set_rules('favicon', 'favicon', 'required');
            $this->form_validation->set_rules('Title', 'Title', 'required');
            // $this->form_validation->set_rules('logo', 'logo', 'required');
            $this->form_validation->set_rules('gmail', 'gmail', 'required');
            $this->form_validation->set_rules('facebook', 'facebook', 'required');
            $this->form_validation->set_rules('instagram', 'instagram', 'required');
            $this->form_validation->set_rules('snapchat', 'snapchat', 'required');
            $this->form_validation->set_rules('skype', 'skype', 'required');
            $this->form_validation->set_rules('slack', 'slack', 'required');
            $this->form_validation->set_rules('linkedin', 'linkedin', 'required');
            $this->form_validation->set_rules('whatsapp', 'whatsapp', 'required');
            if ($this->form_validation->run() == false) {
                $this->load->view('templates/header_view.php');
                $this->load->view('templates/pageIconAdd.php', $result);
                $this->load->view('templates/footer_view.php');
            } else {
                $Title = $this->input->post('Title');
                $gmail = $this->input->post('gmail');
                $facebook = $this->input->post('facebook');
                $instagram = $this->input->post('instagram');
                $snapchat = $this->input->post('snapchat');
                $skype = $this->input->post('skype');
                $slack = $this->input->post('slack');
                $linkedin = $this->input->post('linkedin');
                $whatsapp = $this->input->post('whatsapp');
                $data = array(
                    'title' => $Title,
                    'gmail' => $gmail,
                    'facebook' => $facebook,
                    'instagram' => $instagram,
                    'skype' => $skype,
                    'snapchat' => $snapchat,
                    'slack' => $slack,
                    'linkedin' => $linkedin,
                    'whatsapp' => $whatsapp
                );
                if ($_FILES["favicon"]["name"]) {
                    $target_dir = "C:/xampp/htdocs/haris/assets/image/";
                    $target_file = $target_dir . basename($_FILES["favicon"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                    if (isset($_POST["submit"])) {
                        $check = getimagesize($_FILES["favicon"]["tmp_name"]);
                        if ($check !== false) {
                            echo "File is an image - " . $check["mime"] . ".";
                            $uploadOk = 1;
                        } else {
                            echo "File is not an image.";
                            $uploadOk = 0;
                        }
                    }
                    if ($_FILES["favicon"]["size"] > 500000) {
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

                        if (move_uploaded_file($_FILES["favicon"]["tmp_name"], $target_file)) {
                            echo "The file " . basename($_FILES["favicon"]["name"]) . " has been uploaded.";
                        } else {
                            echo "Sorry, there was an error uploading your file.";
                        }
                    }
                    array_push($data, ['favicon' => $_FILES["favicon"]["name"]]);
                }
                if ($_FILES["logo"]["name"]) {
                    $target_dir = "C:/xampp/htdocs/haris/assets/image/";
                    $target_file = $target_dir . basename($_FILES["logo"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                    if (isset($_POST["submit"])) {
                        $check = getimagesize($_FILES["logo"]["tmp_name"]);
                        if ($check !== false) {
                            echo "File is an image - " . $check["mime"] . ".";
                            $uploadOk = 1;
                        } else {
                            echo "File is not an image.";
                            $uploadOk = 0;
                        }
                    }
                    if ($_FILES["logo"]["size"] > 500000) {
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

                        if (move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file)) {
                            echo "The file " . basename($_FILES["logo"]["name"]) . " has been uploaded.";
                        } else {
                            echo "Sorry, there was an error uploading your file.";
                        }
                    }
                    array_push($data, ['logo' => $_FILES["logo"]["name"]]);
                }
                $this->Icons_Model->editData($data, $res[0]->id);
                redirect(base_url('PageIcon'));
            }
        }
    }
}