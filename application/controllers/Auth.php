<?php

class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['ajax_url'] = [
            [
                'src' => 'assets/js/config.js',
                'type' => 'module'
            ],
            [
                'src' => 'assets/js/auth/cek-login-auth.js',
                'type' => 'module'
            ],
            [
                'src' => 'assets/js/auth/login.js',
                'type' => 'module'
            ],
        ];

        $this->load->view('careers/admin/login', $data);
    }
}
