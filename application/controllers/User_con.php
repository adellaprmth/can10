<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class User_con extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('url', 'language'));
        $this->load->model('user');
        $this->load->library('form_validation');
    }
    public function index(){
        $this->load->view('home');
    }
}