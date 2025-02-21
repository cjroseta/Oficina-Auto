<?php if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

class Email extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('clientes_model');
        $this->data['menuClientes'] = 'Clientes';
    }

    public function index()
    {
        $this->home();
    }

    public function home()
    {
        $this->data['view'] = 'clientes/clientes';
        return $this->layout();
    }


}