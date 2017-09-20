<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

  public function layout($data = null, $content_view = null) {
    $this->load->view('/layout/header', $data);
    // $this->load->view($content_view);
    $this->load->view('/layout/footer');
  }

  public function profile()
  {
    if(!isset($_SESSION['user_logged'])) {
      $this->session->set_flashdata("error", "Please Login to view this page");
      redirect("auth/login");
    }

    $content_view['view'] = $this->load->view('user');
    // $data['stylesheets'] = 'social/assets/css/signin.css';
    $this->layout($content_view);
  }
}
