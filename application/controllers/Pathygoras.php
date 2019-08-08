<?php
class Pathygoras extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model("Api_Model");
    }
    public function index()
    {
        // $url = "https://jsonplaceholder.typicode.com/users";
        // $result = file_get_contents($url);
        // $vars = json_decode($result, true);
        // $count_data = count($vars);
        // print_r($vars);
        // for ($i = 0; $i < $count_data; $i++) {
        //     $users = array(
        //         'name' => $vars[$i]['name'],
        //         'username' => $vars[$i]['username'],
        //         'email' => $vars[$i]['email'],
        //         'phone' => $vars[$i]['phone'],
        //         'website' => $vars[$i]['website']
        //     );
        //     $str = serialize($vars[$i]['address']['geo']);
        //     $address = array(
        //         'users_id' => $vars[$i]['id'],
        //         'street' => $vars[$i]['address']['street'],
        //         'suite' => $vars[$i]['address']['suite'],
        //         'city' => $vars[$i]['address']['city'],
        //         'zipcode' => $vars[$i]['address']['zipcode'],
        //         'geo' => $str
        //     );
        //     $company = array(
        //         'users_id' => $vars[$i]['id'],
        //         'name' => $vars[$i]['company']['name'],
        //         'catchPhrase' => $vars[$i]['company']['catchPhrase'],
        //         'bs' => $vars[$i]['company']['bs'],
        //     );
        //     $this->Api_Model->InserPost($users, $address, $company);
        // }

        // die();
        if (isset($_POST['Submit'])) {

            if ($_POST['Submit'] == 'CalculateC') {
                $this->form_validation->set_rules('a', 'a', 'required');
                $this->form_validation->set_rules('b', 'b', 'required');
            } elseif ($_POST['Submit'] == 'CalculateB') {
                $this->form_validation->set_rules('a', 'a', 'required');
                $this->form_validation->set_rules('c', 'c', 'required');
            } else if ($_POST['Submit'] == 'CalculateA') {
                $this->form_validation->set_rules('b', 'b', 'required');
                $this->form_validation->set_rules('c', 'c', 'required');
            }
        }
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_view.php');
            $this->load->view('templates/pathygoras.php');
            $this->load->view('templates/footer_view.php');
        } else {
            if ($_POST['Submit'] == 'CalculateC') {
                $a = $this->input->post('a');
                $b = $this->input->post('b');
                $c = ($a * $a) + ($b * $b);
                $c = sqrt($c);
                $data['c_val'] = $c;
            } else if ($_POST['Submit'] == 'CalculateA') {
                $a = $this->input->post('c');
                $b = $this->input->post('b');
                $c = ($a * $a) - ($b * $b);
                $c = sqrt($c);
                $data['a_val'] = $c;
            } else if ($_POST['Submit'] == 'CalculateB') {
                $a = $this->input->post('c');
                $b = $this->input->post('a');
                $c = ($a * $a) - ($b * $b);
                $c = sqrt($c);
                $data['b_val'] = $c;
            } else { }
            $this->load->view('templates/header_view.php');
            $this->load->view('templates/pathygoras.php', $data);
            $this->load->view('templates/footer_view.php');
        }
    }
}