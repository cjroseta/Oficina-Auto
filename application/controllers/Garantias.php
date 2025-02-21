<?php if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

class Garantias extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('garantias_model');
        $this->data['menuGarantias'] = 'Garantias';
    }

    public function index()
    {
        $this->home();
    }

    public function home()
    {
        $this->data['view'] = 'garantias/garantias';
        return $this->layout();
    }


}