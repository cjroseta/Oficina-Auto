<?php if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

class Marcas extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('form');
        $this->load->model('marcas_model');
    }

    public function index()
    {
        $this->home();        
    }

    public function home()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vViatura')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar Marcas de Viatura.');
            redirect(base_url());
        }
        $this->load->library('pagination');

        $this->data['configuration']['base_url'] = site_url('marcas/home/');
        $this->data['configuration']['total_rows'] = $this->marcas_model->count('modelos');

        $this->pagination->initialize($this->data['configuration']);

        $this->data['results'] = $this->marcas_model->get('marcas', '*', '', $this->data['configuration']['per_page'], $this->uri->segment(3));

        $this->data['view'] = 'marcas/marcas';
        return $this->layout();
    }
}