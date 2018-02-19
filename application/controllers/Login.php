<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->helper('form');
    }

    public function index()
    {
        $data = array('title' => 'Login');

        $this->load->view('templates/header', $data);
        $this->load->view('login_page');
        $this->load->view('templates/footer');
    }
    public function loginAuth()
    {
        
    }
}
