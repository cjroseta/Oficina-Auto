<?php if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

class Relatorios extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('relatorios_model');
        $this->data['menuRelatorios'] = 'Relatorios';
    }

    public function index()
    {
        $this->home();
    }

    public function home()
    {
        $this->data['view'] = 'relatorios/relatorios';
        return $this->layout();
    }


}