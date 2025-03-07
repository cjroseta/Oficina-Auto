<?php if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

class Quotations extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('quotations_model');
        $this->data['menuQuotations'] = 'Cotacoes';
    }

    public function index()
    {
        $this->home();
    }

    public function home()
    {
        $this->data['view'] = 'quotations/quotations';
        return $this->layout();
    }


}