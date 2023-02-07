<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Applicant extends CI_Controller
{

    public function index($idVacancy)
    {
        $data['ajax_url'] = [                
            [
                'src' => 'assets/js/applicant/list-applicants.js',
                'type' => 'module'
            ],
            [
                'src' => 'assets/js/applicant/delete-applicant.js',
                'type' => 'module'
            ],
            [
                'src' => 'assets/js/config.js',
                'type' => 'module'
            ]
        ];
        $this->load->view('templateAdmin/header');
        $this->load->view('careers/admin/pelamar', ['id_vacancy' => $idVacancy]);
        $this->load->view('templateAdmin/footer', $data);
    }

    public function tambah_kandidat($idVacancy)
    {
        $data['ajax_url'] = [
            [
                'src' => 'assets/js/applicant/main.js',
                'type' => 'module'
            ],
            [
                'src' => 'assets/js/applicant/add-applicant.js',
                'type' => 'module'
            ],
            [
                'src' => 'assets/js/config.js',
                'type' => 'module'
            ]
        ];

        $this->load->view('templateAdmin/header');
        $this->load->view('careers/admin/tambah_pelamar', ['id_vacancy' => $idVacancy]);
        $this->load->view('templateAdmin/footer', $data);
    }

    public function banned()
    {
    }
}
