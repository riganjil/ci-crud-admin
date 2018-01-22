<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_kategori');
        $this->load->model('m_berita');

        $this->navbar = "partials/navbar";
        $this->footer = "partials/footer";
    }

    public function index()
    {
        $data['title'] = "Admin - Berita";
        $data['navbar'] = "partials/navbar";
        $data['content'] = 'pages/berita/index';
        $data['footer'] = "partials/footer";

        $data['data'] = $this->m_berita->select_all();
        $this->load->view('layouts/main', $data);
    }

    public function add()
    {
        $data['title'] = "Admin - Berita";
        $data['navbar'] = "partials/navbar";
        $data['content'] = 'pages/berita/add';
        $data['footer'] = "partials/footer";

        $data['data_kategori'] = $this->m_kategori->select_all();

        $this->load->view('layouts/main', $data);
    }

    public function detail($id)
    {
        $id = $this->uri->segment(2);
        $data['title'] = "Admin - Berita Detail";
        $data['navbar'] = "partials/navbar";
        $data['content'] = 'pages/berita/detail';
        $data['footer'] = "partials/footer";

        $data['data'] = $this->m_berita->select_by_id($id);
        $data['data_kategori'] = $this->m_kategori->select_all();
        $this->load->view('layouts/main', $data);
    }

    public function update()
    {
        $this->db->set('kategori_id', $this->input->post('kategori_id'));
        $this->db->set('judul', $this->input->post('judul_berita'));
        $this->db->set('isi', $this->input->post('isi_berita'));
        $this->db->set('gambar', $this->input->post('gambar_berita'));
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('berita');
        redirect('berita');
    }

    public function simpan()
    {
        $this->db->set('kategori_id', $this->input->post('kategori_id'));
        $this->db->set('judul', $this->input->post('judul_berita'));
        $this->db->set('isi', $this->input->post('isi_berita'));
        $this->db->set('gambar', $this->input->post('gambar_berita'));
        $this->db->insert('berita');
        redirect('berita');
    }
}
