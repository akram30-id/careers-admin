<?php


class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['ajax_url'] = [
            [
                'src' => 'assets/js/latest_vacancy.js',
                'type' => 'module'
            ],
            [
                'src' => 'assets/js/close_vacancy.js',
                'type' => 'module'
            ],
            [
                'src' => 'assets/js/open_vacancy.js',
                'type' => 'module'
            ],
            [
                'src' => 'assets/js/delete_vacancy.js',
                'type' => 'module'
            ],
            [
                'src' => 'assets/js/sortby_divisi_vacancy.js',
                'type' => 'module'
            ],
            [
                'src' => 'assets/js/search_vacancy.js',
                'type' => 'module'
            ],
        ];

        $this->load->view('templateAdmin/header');
        $this->load->view('careers/admin/index');
        $this->load->view('templateAdmin/footer', $data);
    }

    public function add_vacancy($idDivisi = NULL)
    {
        $data['ajax_url'] = [
            [
                'src' => 'assets/js/add_vacancy.js',
                'type' => 'module'
            ],
        ];

        $nama_divisi = NULL;

        if ($idDivisi != NULL) {
            $nama_divisi = str_replace("NPI_DIV_", "", $idDivisi);
            $nama_divisi = str_replace("-", " ", $nama_divisi);
        }
        $this->load->view('templateAdmin/header');
        $this->load->view('careers/admin/add_vacancy', ['id_divisi' => $idDivisi, 'nama_divisi' => $nama_divisi]);
        $this->load->view('templateAdmin/footer', $data);
    }

    public function update_vacancy($idVacancy)
    {
        $data['ajax_url'] = [
            [
                'src' => 'assets/js/update_vacancy.js',
                'type' => 'module'
            ],
        ];

        $this->load->view('templateAdmin/header');
        $this->load->view('careers/admin/add_vacancy', ['id_vacancy' => $idVacancy]);
        $this->load->view('templateAdmin/footer', $data);
    }

    public function detail($idDivisi, $idVacancy)
    {
        $data['ajax_url'] = [
            [
                'src' => 'assets/js/vacancy-detail.js',
                'type' => 'module'
            ],
            [
                'src' => 'assets/js/skeleton-loader/jquery.skeleton.js',
                'type' => ''
            ],
        ];

        $this->load->view('templateAdmin/header');
        $this->load->view('careers/admin/detail', ['id_vacancy' => $idVacancy, 'id_divisi' => $idDivisi]);
        $this->load->view('templateAdmin/footer', $data);
    }

    public function divisi($idDivisi)
    {
        $data['ajax_url'] = [
            [
                'src' => 'assets/js/vacancy-divisi/main.js',
                'type' => 'module'
            ],
            [
                'src' => 'assets/js/vacancy-divisi/close_vacancy.js',
                'type' => 'module'
            ],
            [
                'src' => 'assets/js/vacancy-divisi/open_vacancy.js',
                'type' => 'module'
            ],
            [
                'src' => 'assets/js/vacancy-divisi/delete_vacancy.js',
                'type' => 'module'
            ],
            [
                'src' => 'assets/js/vacancy-divisi/search_by_divisi.js',
                'type' => 'module'
            ],
            [
                'src' => 'assets/js/vacancy-divisi/filter_vacancy.js',
                'type' => 'module'
            ],
        ];

        $this->load->view('templateAdmin/header');
        $this->load->view('careers/admin/vacancy_divisi', ['id_divisi' => $idDivisi]);
        $this->load->view('templateAdmin/footer', $data);
    }

    public function tambah_divisi()
    {
        $data['ajax_url'] = [
        ];

        $this->load->view('templateAdmin/header');
        $this->load->view('careers/admin/tambah_divisi');
        $this->load->view('templateAdmin/footer', $data);
    }

    public function tambah_kandidat()
    {
        $data['ajax_url'] = [
        ];

        $this->load->view('templateAdmin/header');
        $this->load->view('careers/admin/tambah_pelamar');
        $this->load->view('templateAdmin/footer', $data);
    }
}
