<?php if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

class Vendas extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('vendas_model');
        $this->data['menuVendas'] = 'Vendas';
    }

    public function index()
    {
        $this->home();
    }

    public function home()
    {
        $this->data['view'] = 'vendas/vendas';
        return $this->layout();
    }

    public function adicionar()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'aVenda')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para adicionar clientes.');
            redirect(base_url());
        }
        
        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('clientes') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $data = [
                'nuit'          => set_value('nuit'),
                'nomeCliente'   => set_value('nomeCliente'),
                'contato'       => set_value('contato'),
                'telefone'      => set_value('telefone'),
                'celular'       => set_value('celular1'),
                'celular2'      => set_value('celular2'),
                'email'         => set_value('email'),
                'endereco'      => set_value('endereco'),
                'cidade'        => set_value('cidade'),
                'dataCadastro'  => date('Y-m-d'),
            ];

            if ($this->clientes_model->add('clientes', $data) == true) {
                $this->session->set_flashdata('success', 'Cliente adicionado com sucesso!');
                log_info('Adicionou um cliente.');
                redirect(site_url('vendas/'));   
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro.</p></div>';
            }
        }

        $this->data['view'] = 'vendas/adicionarVenda';
        return $this->layout();
    }
}