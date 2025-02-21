<?php

class MY_Controller extends CI_Controller
{
    public $data = [
        'configuration' => [
            'per_page' => 15,
            'next_link' => '<span class="page-link data-toggle="tooltip" data-placement="left" title="Proximo""><i class="fas fa-angle-right"></i></span>',
            'prev_link' => '<span class="page-link data-toggle="tooltip" data-placement="left" title="Anterior""><i class="fas fa-angle-left"></i></span>',
            'full_tag_open' => '<nav class="container-fluid"><ul class="pagination justify-content-end">',
            'full_tag_close' => '</ul></nav>',
            'num_tag_open' => '<li class="page-link">',
            'num_tag_close' => '</li>',
            'cur_tag_open' => '<li class="page-item active"><a class="page-link"><b>',
            'cur_tag_close' => '</b></a></li>',
            'prev_tag_open' => '<li>',
            'prev_tag_close' => '</li>',
            'next_tag_open' => '<li>',
            'next_tag_close' => '</li>',
            'first_link' => '<span class="page-link bg-info text-white data-toggle="tooltip" data-placement="left" title="Primeira Página""><i class="fas fas fa-angle-double-left"></i></span>',
            'last_link' => '<span class="page-link bg-info text-white data-toggle="tooltip" data-placement="left" title="Ultíma Página""><i class="fas fas fa-angle-double-right"></i></span>',
            'first_tag_open' => '<li>',
            'first_tag_close' => '</li>',
            'last_tag_open' => '<li>',
            'last_tag_close' => '</li>',
            'app_name' => 'SYSTOFI',
            'app_theme' => 'default',
        ],
    ];

    public function __construct()
    {
        parent::__construct();

        if ((!session_id()) || (!$this->session->userdata('logado'))) {
            redirect('login');
        }

        $this->load_configuration();

    }

    private function load_configuration()
    {
        $this->CI = &get_instance();
        $this->CI->load->database();
        $configuracoes = $this->CI->db->get('configuracoes')->result();

        foreach ($configuracoes as $c) {
            $this->data['configuration'][$c->config] = $c->valor;
        }
    }

    public function layout()
    {
        // load views
        $this->load->view('template/header', $this->data);
        $this->load->view('template/menu');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }
}
