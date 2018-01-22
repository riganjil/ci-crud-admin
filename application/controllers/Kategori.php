<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_kategori');

        $this->navbar = "partials/navbar";
        $this->footer = "partials/footer";
    }

    public function index()
    {
        $data['title'] = "Admin - Kategori";
        $data['navbar'] = "partials/navbar";
        $data['content'] = 'pages/kategori/index';
        $data['footer'] = "partials/footer";

        $data['data'] = $this->m_kategori->select_all();
        $this->load->view('layouts/main', $data);
    }

    public function add()
    {
        $data['title'] = "Admin - Kategori";
        $data['navbar'] = "partials/navbar";
        $data['content'] = 'pages/kategori/add';
        $data['footer'] = "partials/footer";

        $this->load->view('layouts/main', $data);
    }

    public function detail($id)
    {
        $id = $this->uri->segment(2);
        $data['title'] = "Admin - Kategori Detail";
        $data['navbar'] = "partials/navbar";
        $data['content'] = 'pages/kategori/detail';
        $data['footer'] = "partials/footer";

        $data['data'] = $this->m_kategori->select_first_by_id($id);
        $this->load->view('layouts/main', $data);
    }

    public function update()
    {
        $this->db->set('nama_kategori', $this->input->post('nama_kategori'));
        $this->db->set('nama_kategori_seo', $this->input->post('nama_kategori_seo'));
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('berita_kategori');
        redirect('kategori');
    }

    public function simpan()
    {
        $this->db->set('nama_kategori', $this->input->post('nama_kategori'));
        $this->db->set('nama_kategori_seo', $this->input->post('nama_kategori_seo'));
        $this->db->insert('berita_kategori');
        redirect('kategori');
    }
}
