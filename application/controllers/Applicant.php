<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Applicant extends CI_Controller
{

    public function index()
    {
        $this->load->view('templateAdmin/header');
        $this->load->view('careers/admin/pelamar');
        $this->load->view('templateAdmin/footer');
    }

    public function banned() 
    {
        
    }
}
