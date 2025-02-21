<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Clientes extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('clientes_model');
        $this->data['menuClientes'] = 'clientes';
    }

    public function index()
    {
        $this->home();
    }

    public function home()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vCliente')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar clientes.');
            redirect(base_url());
        }

        $pesquisa = $this->input->get('pesquisa');

        $this->load->library('pagination');

        $this->data['configuration']['base_url'] = site_url('clientes/home');
        $this->data['configuration']['total_rows'] = $this->clientes_model->count('clientes');

        if($pesquisa) {
            $this->data['configuration']['suffix'] = "?pesquisa={$pesquisa}";
            $this->data['configuration']['first_url'] = base_url("index.php/clientes")."\?pesquisa={$pesquisa}";
        }

        $this->pagination->initialize($this->data['configuration']);

        $this->data['results'] = $this->clientes_model->get('clientes', 'idClientes,nuit,contato,email,celular,nomeCliente,categoria,tipo_cliente', '', 
        $this->data['configuration']['per_page'], $this->uri->segment(3));

        $this->data['total_fornecedores'] = $this->clientes_model->contar_fornecedores();
        $this->data['total_clientes'] = $this->clientes_model->contar_clientes();
        $this->data['empresa_publica'] = $this->clientes_model->contar_empresa_publica();
        $this->data['empresa_privada'] = $this->clientes_model->contar_empresa_privada();

        $this->data['view'] = 'clientes/clientes';
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

        if ($this->form_validation->run('clientes') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $data = [
                'nomeCliente'   => set_value('nomeCliente'),
                'contato'       => set_value('contato'),
                'nuit'          => set_value('nuit'),
                'telefone'      => set_value('telefone'),
                'celular'       => set_value('celular'),
                'celular2'      => set_value('celular2'),
                'email'         => set_value('email'),
                'endereco'      => set_value('endereco'),
                'cidade'        => set_value('cidade'),
                'categoria'     => set_value('categoria'),
                'tipo_cliente'  => set_value('tipo_cliente'),
                'created_at'    => date('Y-m-d'),
            ];

            if ($this->clientes_model->add('clientes', $data) == true) {
                $this->session->set_flashdata('success', 'Cliente adicionado com sucesso!');
                log_info('Adicionou um cliente.');
                redirect(site_url('clientes/'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro.</p></div>';
            }
        }

        $this->data['view'] = 'clientes/adicionarCliente';
        return $this->layout();
    }

    public function adicionarModal()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'aCliente')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para adicionar clientes.');
            redirect(base_url());
        }

        $urlAtual = $this->input->post('urlAtual');

        $data = [
            'nuit'          => $this->input->post('nuit'),
            'nomeCliente'   => $this->input->post('nomeCliente'),
        ];

        if ($this->clientes_model->add('clientes', $data) == true) {
            $this->session->set_flashdata('success', 'Cliente adicionado com sucesso!');
            redirect($urlAtual);
        } else {
            $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro.</p></div>';
        }
    }

    public function editar()
    {
        if (!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))) {
            $this->session->set_flashdata('error', 'Item não pode ser encontrado, parâmetro não foi passado corretamente.');
            redirect('systofi');
        }

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'eCliente')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para editar clientes.');
            redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';
        $this->form_validation->set_rules('nuit', 'NUIT', 'trim|required');
        $this->form_validation->set_rules('nomeCliente', 'Nome do Cliente', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $data = [
                'nuit'          => $this->input->post('nuit'),
                'nomeCliente'   => $this->input->post('nomeCliente'),
                'contato'       => $this->input->post('contato'),
                'telefone'      => $this->input->post('telefone'),
                'celular'       => $this->input->post('celular1'),
                'celular2'      => $this->input->post('celular2'),
                'cidade'        => $this->input->post('cidade'),
                'endereco'      => $this->input->post('endereco'),
                'email'         => $this->input->post('email'),
                'categoria'     => $this->input->post('categoria'),
                'tipo_cliente'  => $this->input->post('tipo_cliente'),
                'update_at'     => date('Y-m-d'),
            ];

            if ($this->clientes_model->edit('clientes', $data, 'idClientes', $this->input->post('idClientes')) == true) {
                $this->session->set_flashdata('success', 'Cliente editado com sucesso!');
                redirect(site_url('clientes/visualizar/') . $this->input->post('idClientes'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro</p></div>';
            }
        }

        $this->data['result'] = $this->clientes_model->getById($this->uri->segment(3));
        $this->data['view'] = 'clientes/editarCliente';
        return $this->layout();
    }

    public function visualizar()
    {
        if (!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))) {
            $this->session->set_flashdata('error', 'Item não pode ser encontrado, parâmetro não foi passado corretamente.');
            redirect('systofi');
        }
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vCliente')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar clientes.');
            redirect(base_url());
        }
        $this->data['custom_error'] = '';
        $this->data['result'] = $this->clientes_model->getById($this->uri->segment(3));
        //$this->data['results'] = $this->clientes_model->getOsByCliente($this->uri->segment(3));
        //$this->data['results'] = $this->clientes_model->getVendasByCliente($this->uri->segment(3));
        //$this->data['results'] = $this->clientes_model->getCotacoesByCliente($this->uri->segment(3));
        $this->data['view'] = 'clientes/visualizar';
        return $this->layout();
    }

    public function excluir()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'dCliente')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para excluir clientes.');
            redirect(base_url());
        }

        $id = $this->input->post('id');
        if ($id == null) {
            $this->session->set_flashdata('error', 'Erro ao tentar excluir cliente.');
            redirect(site_url('clientes/home/'));
        }

        /*// excluindo OS vinculadas ao cliente
        $os = $this->clientes_model->getAllOsByClient($id);
        if ($os != null) {
            $this->clientes_model->removeClientOs($os);
        }

        // excluindo Cotações vinculadas ao cliente
        $os = $this->clientes_model->getAllOsByClient($id);
        if ($os != null) {
            $this->clientes_model->removeClientOs($os);
        }

        // excluindo Vendas vinculadas ao cliente
        $vendas = $this->clientes_model->getAllVendasByClient($id);
        if ($vendas != null) {
            $this->clientes_model->removeClientVendas($vendas);
        }*/

        $this->clientes_model->delete('clientes', 'idClientes', $id);
        log_info('Removeu um cliente. ID' . $id);

        $this->session->set_flashdata('success', 'Cliente excluido com sucesso!');
        redirect(site_url('clientes/home/'));
    }
}
