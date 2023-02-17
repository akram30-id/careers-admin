<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Divisi extends CI_Controller
{

    public function index()
    {
        $data['ajax_url'] = [
            [
                'src' => 'assets/js/auth/cek-login.js',
                'type' => 'module'
            ],
            [
                'type' => "module",
                'src' => 'assets/js/divisi.js'
            ],
            [
                'type' => "module",
                'src' => 'assets/js/config.js'
            ],
            [
                'src' => 'assets/js/auth/logout.js',
                'type' => 'module'
            ],
        ];

        $this->load->view('templateAdmin/header');
        $this->load->view('careers/admin/divisi');
        $this->load->view('templateAdmin/footer', $data);
    }
}
