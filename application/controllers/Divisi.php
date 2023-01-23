<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Divisi extends CI_Controller
{

    public function index()
    {
        $data['ajax_url'] = [
            [
                'type' => "module",
                'src' => 'assets/js/divisi.js'
            ],
            [
                'type' => "module",
                'src' => 'assets/js/config.js'
            ]
        ];

        $this->load->view('templateAdmin/header');
        $this->load->view('careers/admin/divisi');
        $this->load->view('templateAdmin/footer', $data);
    }
}
