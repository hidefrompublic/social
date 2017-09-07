<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

  public $layout;

  public function layout($data = null, $content_view = null) {
    $this->load->view('/layout/header', $data);
    // $this->load->view($content_view);
    $this->load->view('/layout/footer');
  }

  public function __construct() {
    parent::__construct();
    date_default_timezone_set('America/Chicago');
  }


  public function logout() {
    unset($_SESSION);
    session_destroy();
    redirect("auth/login", "refresh");
  }

  public function login() {
    // if(isset($_POST['login'])) {
      $this->form_validation->set_rules('username', 'Username', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

      if($this->form_validation->run() == TRUE) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where(array('username' => $username, 'password' => $password));
        $query = $this->db->get();

        
        $user = $query->row();
        
        if($user) {
          if($user->username && $user->password ) {
            $this->session->set_flashdata("success", "You are logged in");
            $_SESSION['user_logged'] = TRUE;
            $_SESSION['username'] = $user->username;
            $_SESSION['password'] = $user->password;

            // redirect
            redirect("user/profile", "refresh");
          } 
        }
        else {
          $this->session->set_flashdata("error", "NO such account exists in database");
          // var_dump($user->email);
          redirect("auth/login", "refresh");
        }
      }
    // }

    $content_view['view'] = $this->load->view('login');
    $data['stylesheets'] = 'social/assets/css/signin.css';
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
        redirect("auth/login", "refresh");
      } 
    }

    $content_view['view'] = $this->load->view('register');
    $data['stylesheets'] = 'social/assets/css/register.css';
    $this->layout($data, $content_view);
  }

}
