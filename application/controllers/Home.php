<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    function __construct()
    {
        parent::__construct();
        $this->navbar = "partials/navbar";
        $this->footer = "partials/footer";
    }

    public function index()
    {
        $data['title'] = "Admin Berita.co.id";
        $data['navbar'] = "partials/navbar";
        $data['content'] = 'home';
        $data['footer'] = "partials/footer";
        $this->load->view('layouts/main', $data);
    }
}
