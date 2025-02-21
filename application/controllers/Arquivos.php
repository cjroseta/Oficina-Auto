<?php if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

class Arquivos extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('arquivos_model');
        $this->data['menuArquivos'] = 'Arquivos';
    }

    public function index()
    {
        $this->home();
    }

    public function home()
    {
        $this->data['view'] = 'arquivos/arquivos';
        return $this->layout();
    }


}