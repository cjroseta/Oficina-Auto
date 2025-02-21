<?php if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

class Fornecedores extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('fornecedores_model');
        $this->data['menuFornecedores'] = 'fornecedores';
    }

    public function index()
    {
        $this->home();
    }

    public function home()
    {
        /*Trocar para vFornecedor */
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vCliente')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar fornecedores.');
            redirect(base_url());
        }
        $this->load->library('pagination');

        $this->data['configuration']['base_url'] = site_url('fornecedores/home/');
        $this->data['configuration']['total_rows'] = $this->fornecedores_model->count('fornecedores');
        
        $this->pagination->initialize($this->data['configuration']);
        
        $this->data['results'] = $this->fornecedores_model->get('fornecedores', 'idFornecedores,nomeFornecedor,nuit,contato,email,celular', '', $this->data['configuration']['per_page'], $this->uri->segment(3));

        $this->data['view'] = 'fornecedores/fornecedores';
        return $this->layout();
    }

    public function adicionar()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'aCliente')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para adicionar clientes.');
            redirect(base_url());
        }
        
        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('fornecedores') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $data = [
                'nuit' => set_value('nuit'),
                'nomeFornecedor' => set_value('nomeFornecedor'),
                'contato' => set_value('contato'),
                'telefone' => set_value('telefone'),
                'celular' => set_value('celular1'),
                'celular2' => set_value('celular2'),
                'email' => set_value('email'),
                'endereco' => set_value('endereco'),
                'cidade' => set_value('cidade'),
                'dataCadastro' => date('Y-m-d'),
            ];

            if ($this->fornecedores_model->add('fornecedores', $data) == true) {
                $this->session->set_flashdata('success', 'Fornecedor adicionado com sucesso!');
                log_info('Adicionou um fornecedor.');
                redirect(site_url('fornecedores/'));   
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro.</p></div>';
            }
        }

        $this->data['view'] = 'fornecedores/adicionarFornecedor';
        return $this->layout();
    }

    public function editar()
    {
        if (!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))) {
            $this->session->set_flashdata('error', 'Item não pode ser encontrado, parâmetro não foi passado corretamente.');
            redirect('systofi');
        }

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'eFornecedor')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para editar fornecedores.');
            redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';
        $this->form_validation->set_rules('nuit', 'NUIT', 'trim|required');
        $this->form_validation->set_rules('nomeFornecedor', 'Nome do Fornecedor', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $data = [
                'nuit' => $this->input->post('nuit'),
                'nomeFornecedor' => $this->input->post('nomeFornecedor'),
                'contato' => $this->input->post('contato'),
                'telefone' => $this->input->post('telefone'),
                'celular' => $this->input->post('celular1'),
                'celular2' => $this->input->post('celular2'),
                'cidade' => $this->input->post('cidade'),
                'endereco' => $this->input->post('endereco'),
                'email' => $this->input->post('email'),
                'lastUpdate' => date('Y-m-d'),
            ];

            if ($this->fornecedores_model->edit('fornecedores', $data, 'idFornecedores', $this->input->post('idFornecedores')) == true) {
                $this->session->set_flashdata('success', 'Fornecedor editado com sucesso!');
                redirect(site_url('fornecedores/visualizar/') . $this->input->post('idFornecedores'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro</p></div>';
            }
        }

        $this->data['result'] = $this->fornecedores_model->getById($this->uri->segment(3));
        $this->data['view'] = 'fornecedores/editarFornecedor';
        return $this->layout();
    }

    public function visualizar()
    {
        if (!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))) {
            $this->session->set_flashdata('error', 'Item não pode ser encontrado, parâmetro não foi passado corretamente.');
            redirect('systofi');
        }
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vFornecedor')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar fornecedor.');
            redirect(base_url());
        }
        $this->data['custom_error'] = '';
        $this->data['result'] = $this->fornecedores_model->getById($this->uri->segment(3));
        //$this->data['results'] = $this->clientes_model->getOsByCliente($this->uri->segment(3));
        //$this->data['results'] = $this->clientes_model->getVendasByCliente($this->uri->segment(3));
        //$this->data['results'] = $this->clientes_model->getCotacoesByCliente($this->uri->segment(3));
        $this->data['view'] = 'fornecedores/visualizar';
        return $this->layout();
    }

    public function excluir()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'dFornecedor')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para excluir fornecedor.');
            redirect(base_url());
        }

        $id = $this->input->post('id');
        if ($id == null) {
            $this->session->set_flashdata('error', 'Erro ao tentar excluir fornecedor.');
            redirect(site_url('fornecedores/home/'));
        }

        $this->fornecedores_model->delete('fornecedores', 'idFornecedores', $id);
        log_info('Excluiu fornecedor ' . $id);

        $this->session->set_flashdata('success', 'Fornecedor excluido com sucesso!');
        redirect(site_url('fornecedores/home/'));
    }

}