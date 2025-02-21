<?php if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

class Viaturas extends MY_Controller
{
    public function __construct()
    {        
        parent::__construct();if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vViatura')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar viaturas.');
            redirect(base_url());
        }
        
        $this->load->helper('form');
        $this->load->model('viaturas_model');
        $this->data['menuViaturas'] = 'Viaturas';
    }

    public function index()
    {
        $this->home();
    }

    public function home()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vViatura')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar viaturas.');
            redirect(base_url());
        }
        $this->load->library('pagination');

        $this->data['configuration']['base_url'] = site_url('viaturas/home/');
        $this->data['configuration']['total_rows'] = $this->viaturas_model->count('viaturas');
        
        $this->pagination->initialize($this->data['configuration']);
        
        $this->data['results'] = $this->viaturas_model->get('viaturas', 'idViatura,marca,matricula,modelo,clientes_id,num_chassis', '', $this->data['configuration']['per_page'], $this->uri->segment(3));

        $this->data['view'] = 'viaturas/viaturas';
        return $this->layout();
    }

    public function adicionar()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'aViatura')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para adicionar viaturas.');
            redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('viaturas') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $data = [
                'matricula'         => set_value('matricula'),
                'modelo'            => set_value('modelo'),
                'marca'             => set_value('marca'),
                'ano'               => set_value('ano'),
                'tipo_viatura'      => set_value('tipo_viatura'),
                'num_chassis'       => set_value('num_chassis'),
                'capacidade_tanque' => set_value('capacidade_tanque'),
                'tipo_combustivel'  => set_value('tipo_combustivel'),
                'clientes_id'      => set_value('proprietario'),
                'status_viatura'    => set_value('status_viatura'),
                'fotos'             => set_value('fotos'),
                'notas'             => set_value('notas'),
                'dataCadastro'      => date('Y-m-d'),
            ];

            if ($this->viaturas_model->add('viaturas', $data) == true) {
                $this->session->set_flashdata('success', 'Viatura cadastrada com sucesso!');
                log_info('Adicionou uma Viatura.');
                redirect(site_url('viaturas/adicionar/'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro.</p></div>';
            }
        }

        $this->data['view'] = 'viaturas/adicionarViatura';
        return $this->layout();
    }

    public function visualizar()
    {
        if (!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))) {
            $this->session->set_flashdata('error', 'Item não pode ser encontrado, parâmetro não foi passado corretamente.');
            redirect('systofi');
        }
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vViatura')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar viatura.');
            redirect(base_url());
        }
        $this->data['custom_error'] = '';
        $this->data['result'] = $this->viaturas_model->getById($this->uri->segment(3));
        //$this->data['results'] = $this->clientes_model->getOsByCliente($this->uri->segment(3));
        //$this->data['results'] = $this->clientes_model->getVendasByCliente($this->uri->segment(3));
        //$this->data['results'] = $this->clientes_model->getCotacoesByCliente($this->uri->segment(3));
        $this->data['view'] = 'viaturas/visualizar';
        return $this->layout();
    }

    public function editar()
    {

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'eViatura')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para editar viaturas.');
            redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';
        $this->form_validation->set_rules('clientes_id', 'Proprietario', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $data = [
                'marca'      => $this->input->post('marca'),
                'modelo'     => $this->input->post('modelo'),
                'num_chassis'        => $this->input->post('num_chassis'),
                'matricula'  => $this->input->post('matricula'),
                'clientes_id'   => $this->input->post('clientes_id'),
                'lastUpdate'    => date('Y-m-d'),
            ];

            if ($this->viaturas_model->edit('viaturas', $data, 'idViatura', $this->input->post('idViatura')) == true) {
                $this->session->set_flashdata('success', 'Viatura editada com sucesso!');
                redirect(site_url('viaturas/visualizar/') . $this->input->post('idViatura'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro</p></div>';
            }
        }

        $this->data['result'] = $this->viaturas_model->getById($this->uri->segment(3));
        $this->data['view'] = 'viaturas/editarViatura';
        return $this->layout();
    }

    public function excluir()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'dViatura')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para excluir viaturas.');
            redirect(base_url());
        }

        $id = $this->input->post('id');
        if ($id == null) {
            $this->session->set_flashdata('error', 'Erro ao tentar excluir viatura.');
            redirect(site_url('viaturas/home/'));
        }

        $this->viaturas_model->delete('viaturas', 'idViatura', $id);
        log_info('Removeu uma viatura. ID' . $id);

        $this->session->set_flashdata('success', 'Viatura excluida com sucesso!');
        redirect(site_url('viaturas/home/'));
    }

    public function autoCompleteCliente()
    {
        if (isset($_GET['term'])) {
            $q = strtolower($_GET['term']);
            $this->viaturas_model->autoCompleteCliente($q);
        }
    }

}