<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');

    }
    function index( $page = 'home')
    {

        $this->load->helper('url');

        if (! file_exists('application/views/pages/'.$page.'.php')) {
            show_404();

        }

        $data['sql'] = "";

        $this->load->view('pages/'.$page, $data);




    }
}