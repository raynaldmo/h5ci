<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->helper('url');
  }

  public function index() {
    $this->load->view('common/header');
    $this->load->view('home');
    $this->load->view('common/footer');
  }
}
