<?php if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

class Purchases extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('purchases_model');
        $this->data['menuPurchases'] = 'Compras';
    }

    public function index()
    {
        $this->home();
    }

    public function home()
    {
        $this->data['view'] = 'compras/compras';
        return $this->layout();
    }


}