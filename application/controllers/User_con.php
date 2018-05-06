<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class User_con extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('url', 'language'));
        $this->load->model('MainModel');
        $this->load->library('form_validation');
    }
    public function index(){
        $kantin = $this->MainModel->readKantin();
        $menu = $this->MainModel->readMenu();
        $newKantin = array();
        foreach($kantin as $kan){
            $id_kantin = $kan->id_kantin;
            $temp = array();
            foreach($menu as $m ){
                if ($m->id_kantin == $id_kantin){
                    $temp[] = $m;
                }
            }
            $kan = (array) $kan;
            $kan['menu'] = $temp;
            unset($kan['username']);
            unset($kan['password']);
            $newKantin[] = (object) $kan;
        }
        $data = array('kantin' => $newKantin, 'menu'=>json_encode($menu));
        //echo "<pre>";
        //print_r($newKantin);
        //echo "</pre>";
        $this->load->view('home', $data);
    }
    public function pesan(){
        $nama = $this->input->post('nama');
        $pesanan = json_decode($this->input->post('data'));
        $kode = strtoupper(substr(uniqid(),3, 6));
        $data = array('nama' =>$nama, 'kode'=>$kode, 'pesanan'=>$pesanan);
        if ($this->MainModel->insertPesanan($data)) {
            $this->load->view('pesanan.php', $data);
        } else {
            redirect('', 'refresh');
        }

    }
}