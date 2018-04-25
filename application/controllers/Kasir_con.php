<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Kasir_con extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('url', 'language'));
        $this->load->model('kasir');
        $this->load->library('form_validation');
    }
    public function login(){
        $this->load->view('kasir/login');
    }
    public function index(){
        if (!isset($_SESSION)){
            redirect('kasir/login', 'refresh');
        }
    }
}