<?php if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

class Compras extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('compras_model');
        $this->data['menuCompras'] = 'Compras';
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