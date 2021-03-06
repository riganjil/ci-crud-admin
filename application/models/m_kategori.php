<?php

class M_Kategori extends CI_Model{

    function select_all(){
        $this->db->select('*');
        $this->db->from('berita_kategori');
        $query = $this->db->get();
        return $query;
    }

    function select_first_by_id($id){
        $this->db->where('id', $id);
        $query = $this->db->get('berita_kategori');
        return $query->row();
    }

    function select_by_kategori_id($id){
        $this->db->select('berita.*, berita_kategori.nama_kategori');
        $this->db->from('berita');
        $this->db->join('berita_kategori', 'berita_kategori.id = berita.kategori_id');
        $this->db->where('berita_kategori.kategori_id', $id);
        $query = $this->db->get();
        return $query;
    }

    function select_by_kategori_seo($id){
        $this->db->select('berita.*, berita_kategori.nama_kategori');
        $this->db->from('berita');
        $this->db->join('berita_kategori', 'berita_kategori.id = berita.kategori_id');
        $this->db->where('berita_kategori.nama_kategori_seo', $id);
        $query = $this->db->get();
        return $query;
    }
}