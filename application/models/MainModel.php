<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MainModel extends CI_Model {
    public function readKantin(){
        $this->db->select('*');
        $this->db->from('kantin');
        $query = $this->db->get();
        if ($query->num_rows()>0){
            return $query->result();
        } else {
            return false;
        }
        
    }
    public function readKantinById($id){
        $query = $this->db->get_where('kantin', array('id' => $id));
        if ($query->num_rows()>0){
            return $query->result();
        } else {
            return false;
        }
    }
    public function readMenu(){
        $this->db->select('menu.*, kantin.nama_kantin');
        $this->db->from('menu');
        $this->db->join('kantin', 'menu.id_kantin = kantin.id_kantin');
        $query = $this->db->get();
        if ($query->num_rows()>0){
            return $query->result();
        } else {
            return false;
        }
    }
    public function insertPesanan($data){
        $this->db->insert('transaksi', array(
            'nama_pemesan'=>$data['nama'],
            'kode_transaksi' => $data['kode']
        ));
        if ($this->db->affected_rows() == 0) return false;
        $insert_id = $this->db->insert_id();
        foreach($data['pesanan'] as $pesan){
            $this->db->insert('transaksi_menu', array(
                'id_transaksi' => $insert_id,
                'id_menu' => $pesan->id_menu,
                'jumlah' => $pesan->jumlah,
                'harga_persatuan' => $pesan->harga_persatuan,
                'tambahan' => $pesan->tambahan
            ));
        }
        if ($this->db->affected_rows() == 0) return false;
        return true;


    }

}