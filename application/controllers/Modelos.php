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

    public function adicionar()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'aViatura')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para as Viaturas.');
            redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('modelos') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $data = [
            'nome'      => set_value('nome'),
            'descricao' => set_value('descricao'),
            ];

            if ($this->modelos_model->add('modelos', $data) == true) {
                $this->session->set_flashdata('success', 'Modelo adicionada com sucesso!');
                redirect(site_url('modelos'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro.</p></div>';
            }            
        }

        $this->data['view'] = 'modelos/adicionarModelo';
        return $this->layout();
    }
}