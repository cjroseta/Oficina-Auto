<?php if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

class Produtos extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('produtos_model');
        $this->data['menuProdutos'] = 'Produtos';
    }

    public function index()
    {
        $this->home();
    }

    public function home()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vProduto')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar productos.');
            redirect(base_url());
        }
        $this->load->library('pagination');

        $this->data['configuration']['base_url'] = site_url('produtos/home/');
        $this->data['configuration']['total_rows'] = $this->produtos_model->count('produtos');
        
        $this->pagination->initialize($this->data['configuration']);
        
        $this->data['produtos'] = $this->produtos_model->get('produtos', 'idProdutos,descricao,modelo,localizacao,estoque,precoVenda,codigo', '', $this->data['configuration']['per_page'], $this->uri->segment(3));

        $this->data['view'] = 'produtos/produtos';
        return $this->layout();
    }

    public function adicionar()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'aProduto')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para adicionar productos.');
            redirect(base_url());
        }
        
        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('produtos') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $precoCompra = $this->input->post('precoCompra');
            $precoCompra = str_replace(",", "", $precoCompra);
            $precoVenda = $this->input->post('precoVenda');
            $precoVenda = str_replace(",", "", $precoVenda);
            $data = [
                'codigo' => set_value('codigo'),
                'descricao' => set_value('descricao'),
                'unidade' => set_value('unidade'),
                'grupo' => set_value('grupo'),
                'precoCompra' => $precoCompra,
                'precoVenda' => $precoVenda,                
                'modelo' => set_value('modelo'),            
                'localizacao' => set_value('localizacao'),
                'dataCadastro' => date('Y-m-d'),
                'estoque' => set_value('estoque'),
                'estoqueMinimo' => set_value('estoqueMinimo'),
                'saida' => set_value('saida'),
                'entrada' => set_value('entrada'),
            ];

            if ($this->produtos_model->add('produtos', $data) == true) {
                $this->session->set_flashdata('success', 'Producto adicionado com sucesso!');
                log_info('Adicionou um producto.');
                redirect(site_url('produtos/'));   
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro.</p></div>';
            }
        }

        $this->data['view'] = 'produtos/adicionarProduto';
        return $this->layout();
    }

    public function editar()
    {
        if (!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))) {
            $this->session->set_flashdata('error', 'Item não pode ser encontrado, parâmetro não foi passado corretamente.');
            redirect('systofi');
        }

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'eProduto')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para editar productos.');
            redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';
        $this->form_validation->set_rules('descricao', 'Descrição', 'trim|required');
        $this->form_validation->set_rules('codigo', 'Código', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $precoCompra = $this->input->post('precoCompra');
            $precoCompra = str_replace(",", "", $precoCompra);
            $precoVenda = $this->input->post('precoVenda');
            $precoVenda = str_replace(",", "", $precoVenda);
            $data = [
                'codigo' => set_value('codigo'),
                'descricao' => set_value('descricao'),
                'unidade' => set_value('unidade'),
                'grupo' => set_value('grupo'),
                'precoCompra' => $precoCompra,
                'precoVenda' => $precoVenda,                
                'modelo' => set_value('modelo'),            
                'localizacao' => set_value('localizacao'),
                'ultimaAtualizacao' => date('Y-m-d'),
                'estoque' => set_value('estoque'),
                'estoqueMinimo' => set_value('estoqueMinimo'),
                'saida' => set_value('saida'),
                'entrada' => set_value('entrada'),
            ];

            if ($this->produtos_model->edit('produtos', $data, 'idProdutos', $this->input->post('idProdutos')) == true) {
                $this->session->set_flashdata('success', 'Producto editado com sucesso!');
                redirect(site_url('produtos/visualizar/') . $this->input->post('idProdutos'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro</p></div>';
            }
        }

        $this->data['result'] = $this->produtos_model->getById($this->uri->segment(3));
        $this->data['view'] = 'produtos/editarProduto';
        return $this->layout();
    }

    public function visualizar()
    {
        if (!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))) {
            $this->session->set_flashdata('error', 'Item não pode ser encontrado, parâmetro não foi passado corretamente.');
            redirect('systofi');
        }
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vProduto')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar productos.');
            redirect(base_url());
        }
        $this->data['custom_error'] = '';
        $this->data['result'] = $this->produtos_model->getById($this->uri->segment(3));
        $this->data['view'] = 'produtos/visualizar';
        return $this->layout();
    }

    public function excluir()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'dProduto')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para excluir productos.');
            redirect(base_url());
        }

        $id = $this->input->post('id');
        if ($id == null) {
            $this->session->set_flashdata('error', 'Erro ao tentar excluir producto.');
            redirect(site_url('produtos/home/'));
        }

        $this->produtos_model->delete('produtos', 'idProdutos', $id);
        log_info('Removeu producto ' . $id);

        $this->session->set_flashdata('success', 'Producto excluido com sucesso!');
        redirect(site_url('produtos/home/'));
    }

}