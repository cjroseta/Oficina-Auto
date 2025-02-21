<?php if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

class Cotacoes extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('cotacoes_model');
        $this->data['menuCotacoes'] = 'Cotacoes';
    }

    public function index()
    {
        $this->home();
    }

    public function home()
    {
        $this->data['view'] = 'cotacoes/cotacoes';
        return $this->layout();
    }


}