<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ibexstore extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ibexstore_model');
    }

    public function index()
	{
        $this->load->view('ibexstore/index.html');
	}
}
?>