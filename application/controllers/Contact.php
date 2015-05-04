<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('form');

    $this->load->library('form_validation');
    $this->form_validation->set_error_delimiters('<div class="form-error">', '</div>');
  }

  public function index() {
    // Set validation rules for view filters
    $this->form_validation->set_rules('name',
      'Name', 'required|min_length[4]|max_length[80]');

    $this->form_validation->set_rules('email',
      'Email', 'required|valid_email|min_length[5]|max_length[125]');

    $this->form_validation->set_rules('message',
      'Message', 'required|min_length[4]|max_length[1000]');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('common/header');
      $this->load->view('contact');
      $this->load->view('common/footer');
    } else {
      $this->load->view('common/header');
      $this->load->view('contact_success');
    }
  }
}
