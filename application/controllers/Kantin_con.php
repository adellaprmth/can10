<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Kantin_con extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('url', 'language'));
        $this->load->model('kantin');
        $this->load->library('form_validation');
    }
    public function login(){
        $this->load->view('kantin/login');
    }
    public function index(){
        if (!isset($_SESSION)){
            redirect('kantin/login', 'refresh');
        }
    }
}