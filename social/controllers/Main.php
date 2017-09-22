<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

  public function layout($data = null, $content_view = null) {
    $this->load->view('/layout/header', $data);
    $this->load->view('/layout/footer');
  }

  public function __construct() {
    parent::__construct();
    date_default_timezone_set('America/Chicago');
    $this->load->model('auth_model');
  }


  public function logout() {
    unset($_SESSION);
    session_destroy();
    redirect("main/login", "refresh");
  }

  public function login() {
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

    if($this->form_validation->run() == TRUE) {
      $username = $_POST['username'];
      $password = $_POST['password'];
      if($this->auth_model->can_login($username, $password)){
        $_SESSION['user_logged'] = TRUE;
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        redirect("user/profile", "refresh");
      }else{
      $this->session->set_flashdata("error", "NO such account exists in database");
      redirect("main/login");
      }
    }
    $content_view['view'] = $this->load->view('login');
    $data['stylesheets'] = 'social/assets/css/main.css';
    $this->layout($data, $content_view);
  }

  public function register() {
    if (isset($_POST['register'])) {
      $this->form_validation->set_rules('username', 'Username', 'required');
      $this->form_validation->set_rules('email', 'Email', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
      $this->form_validation->set_rules('re_password', 'Confirm Password', 'required|min_length[6]|matches[password]');
      
      // IF FORM VALIDATION TRUE
      if($this->form_validation->run() == TRUE) {
        // echo 'form validated';

        $data = array(
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'first_name' => $_POST['first_name'],
            'last_name' => $_POST['last_name'],
            'created_date' => date('Y-m-d')
          );
        $this->db->insert('users', $data);

        $this->session->set_flashdata("success", "Your account has been registered");
        $this->session->set_flashdata("error", 'messsage');
        redirect("main/login", "refresh");
      } 
    }

    $content_view['view'] = $this->load->view('register');
    $data['stylesheets'] = 'social/assets/css/main.css';
    $this->layout($data, $content_view);
  }

}
