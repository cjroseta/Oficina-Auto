<?php if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

class Jobcards extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('form');
        $this->load->model('jobcards_model');
        $this->load->model('clientes_model');
        $this->data['menuJc'] = 'Job Cards';
    }

    public function index()
    {
        $this->home();
    }

    public function home()
    {
        // Por colocar a verificação das permissões
        
        $this->load->library('pagination');

        $this->data['configuration']['base_url'] = site_url('jobCards/home/');
        $this->data['configuration']['total_rows'] = $this->jobcards_model->count('jobcard');

        $this->pagination->initialize($this->data['configuration']);

        $this->data['results'] = $this->jobcards_model->get('jobcard', '*', '', $this->data['configuration']['per_page'], $this->uri->segment(3));

        $this->data['view'] = 'jobcards/jobcards';
        return $this->layout();
    }

    public function novos()
    {   
        $this->load->library('pagination');

        $this->data['configuration']['base_url'] = site_url('jobCards/novos/');
        $this->data['configuration']['total_rows'] = $this->clientes_model->count('clientes');

        $this->pagination->initialize($this->data['configuration']);

        $this->data['results'] = $this->clientes_model->get('clientes', '*', '', $this->data['configuration']['per_page'], $this->uri->segment(3));

        $this->data['view'] = 'jobcards/novos';
        return $this->layout();
    }

    public function r22()
    {
        $this->data['view'] = 'jobcards/r22';
        return $this->layout();
    }

    public function e22()
    {
        $this->data['view'] = 'jobcards/e22';
        return $this->layout();
    }


}