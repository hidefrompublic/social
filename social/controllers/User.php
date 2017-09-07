<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

  public $layout;

  public function layout($data = null, $content_view = null) {
    $this->load->view('/layout/header', $data);
    // $this->load->view($content_view);
    $this->load->view('/layout/footer');
  }

  public function __construct() {
    parent::__construct();
    date_default_timezone_set('America/Chicago');

    if($_SESSION['user_logged'] == FALSE) {
      $this->session->set_flashdata("errror", "Please Login to view this page");
      redirect("auth/login");
    }

    //$this->layout();
  }

  public function profile()
  {
    if($_SESSION['user_logged'] == FALSE) {
      $this->session->set_flashdata("errror", "Please Login to view this page");
      redirect("auth/login");
    }

    $content_view['view'] = $this->load->view('user');
    // $data['stylesheets'] = 'social/assets/css/signin.css';
    $this->layout($content_view);
  }
}
