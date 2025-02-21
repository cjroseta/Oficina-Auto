<?php if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

class Cobrancas extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('cobrancas_model');
        $this->data['menuCobrancas'] = 'Cobrancas';
    }

    public function index()
    {
        $this->home();
    }

    public function home()
    {
        $this->data['view'] = 'cobrancas/cobrancas';
        return $this->layout();
    }


}