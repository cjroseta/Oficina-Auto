<?php if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

class Lancamentos extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('lancamentos_model');
        $this->data['menuLancamentos'] = 'Lancamentos';
    }

    public function index()
    {
        $this->home();
    }

    public function home()
    {
        $this->data['view'] = 'lancamentos/lancamentos';
        return $this->layout();
    }


}