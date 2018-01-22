<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->navbar = "partials/navbar";
        $this->footer = "partials/footer";
    }

    public function index()
    {
        $data['title'] = "Admin - Kategori";
        $data['navbar'] = "partials/navbar";
        $data['content'] = 'pages/kategori/index';
        $data['footer'] = "partials/footer";
        $this->load->view('layouts/main', $data);
    }
}
