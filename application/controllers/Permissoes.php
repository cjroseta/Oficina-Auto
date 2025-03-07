<?php if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

class Permissoes extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'cPermissao')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para configurar as permissões no sistema.');
            redirect(base_url());
        }

        $this->load->helper(['form', 'codegen_helper']);
        $this->load->model('permissoes_model');
        $this->data['menuConfiguracoes'] = 'Permissões';
    }

    public function index()
    {
        $this->home();
    }

    public function home()
    {
        $this->load->library('pagination');

        $this->data['configuration']['base_url'] = site_url('permissoes/home/');
        $this->data['configuration']['total_rows'] = $this->permissoes_model->count('permissoes');

        $this->pagination->initialize($this->data['configuration']);

        $this->data['results'] = $this->permissoes_model->get('permissoes', 'idPermissao,nome,data,situacao', '', $this->data['configuration']['per_page'], $this->uri->segment(3));

        $this->data['view'] = 'permissoes/permissoes';
        return $this->layout();
    }

    public function adicionar()
    {
        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        $this->form_validation->set_rules('nome', 'Nome', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $nomePermissao = $this->input->post('nome');
            $cadastro = date('Y-m-d');
            $situacao = 1;

            $permissoes = [

                'aContact' => $this->input->post('aContact'),
                'eContact' => $this->input->post('eContact'),
                'dContact' => $this->input->post('dContact'),
                'vContact' => $this->input->post('vContact'),

                'aProduct' => $this->input->post('aProduct'),
                'eProduct' => $this->input->post('eProduct'),
                'dProduct' => $this->input->post('dProduct'),
                'vProduct' => $this->input->post('vProduct'),

                'aViatura' => $this->input->post('aViatura'),
                'eViatura' => $this->input->post('eViatura'),
                'dViatura' => $this->input->post('dViatura'),
                'vViatura' => $this->input->post('vViatura'),

                'aTecnico' => $this->input->post('aTecnico'),
                'eTecnico' => $this->input->post('eTecnico'),
                'dTecnico' => $this->input->post('dTecnico'),
                'vTecnico' => $this->input->post('vTecnico'),                

                'aPurchase' => $this->input->post('aPurchase'),
                'ePurchase' => $this->input->post('ePurchase'),
                'dPurchase' => $this->input->post('dPurchase'),
                'vPurchase' => $this->input->post('vPurchase'),     
                
                'aPO' => $this->input->post('aPO'),
                'ePO' => $this->input->post('ePO'),
                'dPO' => $this->input->post('dPO'),
                'vPO' => $this->input->post('vPO'), 

                'aCotacao' => $this->input->post('aCotacao'),
                'eCotacao' => $this->input->post('eCotacao'),
                'dCotacao' => $this->input->post('dCotacao'),
                'vCotacao' => $this->input->post('vCotacao'),

                'aServico' => $this->input->post('aServico'),
                'eServico' => $this->input->post('eServico'),
                'dServico' => $this->input->post('dServico'),
                'vServico' => $this->input->post('vServico'),                

                'aJc' => $this->input->post('aJc'),
                'eJc' => $this->input->post('eJc'),
                'dJc' => $this->input->post('dJc'),
                'vJc' => $this->input->post('vJc'),

                'aVenda' => $this->input->post('aVenda'),
                'eVenda' => $this->input->post('eVenda'),
                'dVenda' => $this->input->post('dVenda'),
                'vVenda' => $this->input->post('vVenda'),

                'aGarantia' => $this->input->post('aGarantia'),
                'eGarantia' => $this->input->post('eGarantia'),
                'dGarantia' => $this->input->post('dGarantia'),
                'vGarantia' => $this->input->post('vGarantia'),

                'aArquivo' => $this->input->post('aArquivo'),
                'eArquivo' => $this->input->post('eArquivo'),
                'dArquivo' => $this->input->post('dArquivo'),
                'vArquivo' => $this->input->post('vArquivo'),

                'aPagamento' => $this->input->post('aPagamento'),
                'ePagamento' => $this->input->post('ePagamento'),
                'dPagamento' => $this->input->post('dPagamento'),
                'vPagamento' => $this->input->post('vPagamento'),

                'aLancamento' => $this->input->post('aLancamento'),
                'eLancamento' => $this->input->post('eLancamento'),
                'dLancamento' => $this->input->post('dLancamento'),
                'vLancamento' => $this->input->post('vLancamento'),

                'cUsuario' => $this->input->post('cUsuario'),
                'cEmpresa' => $this->input->post('cEmpresa'),
                'cPermissao' => $this->input->post('cPermissao'),
                'cBackup' => $this->input->post('cBackup'),
                'cAuditoria' => $this->input->post('cAuditoria'),
                'cEmail' => $this->input->post('cEmail'),
                'cSistema' => $this->input->post('cSistema'),
                'eRelatorio' => $this->input->post('eRelatorio'),
                'cConfiguracoes' => $this->input->post('cConfiguracoes'),

                'rContact' => $this->input->post('rContact'),
                'rProduct' => $this->input->post('rProduct'),
                'rServico' => $this->input->post('rServico'),
                'rJc' => $this->input->post('rJc'),
                'rVenda' => $this->input->post('rVenda'),
                'rFinanceiro' => $this->input->post('rFinanceiro'),
                'rEntrada' => $this->input->post('rEntrada'),
                'rSaida' => $this->input->post('rSaida'),
                'rPurchase' => $this->input->post('rPurchase'),
                'rCotacao' => $this->input->post('rCotacao'),
                'rViatura' => $this->input->post('rViatura'),
                'rTecnico' => $this->input->post('rTecnico'),
                'rFornecedor' => $this->input->post('rFornecedor'),

                'aCobranca' => $this->input->post('aCobranca'),
                'eCobranca' => $this->input->post('eCobranca'),
                'dCobranca' => $this->input->post('dCobranca'),
                'vCobranca' => $this->input->post('vCobranca'),
            ];
            $permissoes = serialize($permissoes);

            $data = [
                'nome' => $nomePermissao,
                'data' => $cadastro,
                'permissoes' => $permissoes,
                'situacao' => $situacao,
            ];

            if ($this->permissoes_model->add('permissoes', $data) == true) {
                $this->session->set_flashdata('success', 'Permissão adicionada com sucesso!');
                log_info('Adicionou uma permissão');
                redirect(site_url('permissoes/adicionar/'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro.</p></div>';
            }
        }

        $this->data['view'] = 'permissoes/adicionarPermissao';
        return $this->layout();
    }

    public function editar()
    {
        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        $this->form_validation->set_rules('nome', 'Nome', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $nomePermissao = $this->input->post('nome');
            $situacao = $this->input->post('situacao');
            $permissoes = [

                'aContact' => $this->input->post('aContact'),
                'eContact' => $this->input->post('eContact'),
                'dContact' => $this->input->post('dContact'),
                'vContact' => $this->input->post('vContact'),

                'aProduct' => $this->input->post('aProduct'),
                'eProduct' => $this->input->post('eProduct'),
                'dProduct' => $this->input->post('dProduct'),
                'vProduct' => $this->input->post('vProduct'),

                'aViatura' => $this->input->post('aViatura'),
                'eViatura' => $this->input->post('eViatura'),
                'dViatura' => $this->input->post('dViatura'),
                'vViatura' => $this->input->post('vViatura'),

                'aTecnico' => $this->input->post('aTecnico'),
                'eTecnico' => $this->input->post('eTecnico'),
                'dTecnico' => $this->input->post('dTecnico'),
                'vTecnico' => $this->input->post('vTecnico'),                

                'aPurchase' => $this->input->post('aPurchase'),
                'ePurchase' => $this->input->post('ePurchase'),
                'dPurchase' => $this->input->post('dPurchase'),
                'vPurchase' => $this->input->post('vPurchase'),                   

                'aPO' => $this->input->post('PO'),
                'ePO' => $this->input->post('ePO'),
                'dPO' => $this->input->post('dPO'),
                'vPO' => $this->input->post('vPO'),        

                'aCotacao' => $this->input->post('aCotacao'),
                'eCotacao' => $this->input->post('eCotacao'),
                'dCotacao' => $this->input->post('dCotacao'),
                'vCotacao' => $this->input->post('vCotacao'),

                'aServico' => $this->input->post('aServico'),
                'eServico' => $this->input->post('eServico'),
                'dServico' => $this->input->post('dServico'),
                'vServico' => $this->input->post('vServico'),

                'aJc' => $this->input->post('aJc'),
                'eJc' => $this->input->post('eJc'),
                'dJc' => $this->input->post('dJc'),
                'vJc' => $this->input->post('vJc'),

                'aVenda' => $this->input->post('aVenda'),
                'eVenda' => $this->input->post('eVenda'),
                'dVenda' => $this->input->post('dVenda'),
                'vVenda' => $this->input->post('vVenda'),

                'aGarantia' => $this->input->post('aGarantia'),
                'eGarantia' => $this->input->post('eGarantia'),
                'dGarantia' => $this->input->post('dGarantia'),
                'vGarantia' => $this->input->post('vGarantia'),

                'aArquivo' => $this->input->post('aArquivo'),
                'eArquivo' => $this->input->post('eArquivo'),
                'dArquivo' => $this->input->post('dArquivo'),
                'vArquivo' => $this->input->post('vArquivo'),

                'aPagamento' => $this->input->post('aPagamento'),
                'ePagamento' => $this->input->post('ePagamento'),
                'dPagamento' => $this->input->post('dPagamento'),
                'vPagamento' => $this->input->post('vPagamento'),

                'aLancamento' => $this->input->post('aLancamento'),
                'eLancamento' => $this->input->post('eLancamento'),
                'dLancamento' => $this->input->post('dLancamento'),
                'vLancamento' => $this->input->post('vLancamento'),

                'cUsuario' => $this->input->post('cUsuario'),
                'cEmpresa' => $this->input->post('cEmpresa'),
                'cPermissao' => $this->input->post('cPermissao'),
                'cBackup' => $this->input->post('cBackup'),
                'cAuditoria' => $this->input->post('cAuditoria'),
                'cEmail' => $this->input->post('cEmail'),
                'cSistema' => $this->input->post('cSistema'),
                'eRelatorio' => $this->input->post('eRelatorio'),
                'cConfiguracoes' => $this->input->post('cConfiguracoes'),

                'rContact' => $this->input->post('rContact'),
                'rProduct' => $this->input->post('rProduct'),
                'rServico' => $this->input->post('rServico'),
                'rJc' => $this->input->post('rJc'),
                'rVenda' => $this->input->post('rVenda'),
                'rFinanceiro' => $this->input->post('rFinanceiro'),
                'rEntrada' => $this->input->post('rEntrada'),
                'rSaida' => $this->input->post('rSaida'),
                'rPurchase' => $this->input->post('rPurchase'),
                'rCotacao' => $this->input->post('rCotacao'),
                'rViatura' => $this->input->post('rViatura'),
                'rTecnico' => $this->input->post('rTecnico'),
                'rFornecedor' => $this->input->post('rFornecedor'),

                'aCobranca' => $this->input->post('aCobranca'),
                'eCobranca' => $this->input->post('eCobranca'),
                'dCobranca' => $this->input->post('dCobranca'),
                'vCobranca' => $this->input->post('vCobranca'),

            ];
            $permissoes = serialize($permissoes);

            $data = [
                'nome' => $nomePermissao,
                'permissoes' => $permissoes,
                'situacao' => $situacao,
            ];

            if ($this->permissoes_model->edit('permissoes', $data, 'idPermissao', $this->input->post('idPermissao')) == true) {
                $this->session->set_flashdata('success', 'Permissão editada com sucesso!');
                log_info('Alterou uma permissão. ID: ' . $this->input->post('idPermissao'));
                redirect(site_url('permissoes/editar/') . $this->input->post('idPermissao'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um errro.</p></div>';
            }
        }

        $this->data['result'] = $this->permissoes_model->getById($this->uri->segment(3));

        $this->data['view'] = 'permissoes/editarPermissao';
        return $this->layout();
    }

}