<?php if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

class Modelos extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('form');
        $this->load->model('modelos_model');
    }

    public function index()
    {
        $this->home();        
    }

    public function home()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vViatura')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar Modelos de Viatura.');
            redirect(base_url());
        }
        $this->load->library('pagination');

        $this->data['configuration']['base_url'] = site_url('modelos/home/');
        $this->data['configuration']['total_rows'] = $this->modelos_model->count('modelos');

        $this->pagination->initialize($this->data['configuration']);

        $this->data['results'] = $this->modelos_model->get('modelos', '*', '', $this->data['configuration']['per_page'], $this->uri->segment(3));

        $this->data['view'] = 'modelos/modelos';
        return $this->layout();
    }
}