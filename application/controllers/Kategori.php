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
}
