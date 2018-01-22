<?php

class M_Category extends CI_Model{

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