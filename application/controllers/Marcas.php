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
        $this->data['configuration']['total_rows'] = $this->marcas_model->count('marcas');

        $this->pagination->initialize($this->data['configuration']);

        $this->data['results'] = $this->marcas_model->get('marcas', '*', '', $this->data['configuration']['per_page'], $this->uri->segment(3));

        $this->data['view'] = 'marcas/marcas';
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

        if ($this->form_validation->run('marcas') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $data = [
            'nome'      => set_value('nome'),
            'descricao' => set_value('descricao'),
            ];

            if ($this->marcas_model->add('marcas', $data) == true) {
                $this->session->set_flashdata('success', 'Marca adicionada com sucesso!');
                redirect(site_url('marcas/adicionar/'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro.</p></div>';
            }            
        }

        $this->data['view'] = 'marcas/adicionarMarca';
        return $this->layout();
    }

    public function editar()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'eViatura')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para editar.');
            redirect(base_url());
        }
        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('marcas') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $data = [
                'nome'      => $this->input->post('nome'),
                'descricao' => $this->input->post('descricao'),
            ];

            if ($this->marcas_model->edit('marcas', $data, 'idMarca', $this->input->post('idMarca')) == true) {
                $this->session->set_flashdata('success', 'Marca editada com sucesso!');
                redirect(site_url('marcas/'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um errro.</p></div>';
            }
        }

        $this->data['result'] = $this->marcas_model->getById($this->uri->segment(3));

        $this->data['view'] = 'marcas/editarMarca';
        return $this->layout();
    }
}