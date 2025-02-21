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

                'aCliente' => $this->input->post('aCliente'),
                'eCliente' => $this->input->post('eCliente'),
                'dCliente' => $this->input->post('dCliente'),
                'vCliente' => $this->input->post('vCliente'),

                'aProduto' => $this->input->post('aProduto'),
                'eProduto' => $this->input->post('eProduto'),
                'dProduto' => $this->input->post('dProduto'),
                'vProduto' => $this->input->post('vProduto'),

                'aFornecedor' => $this->input->post('aFornecedor'),
                'eFornecedor' => $this->input->post('eFornecedor'),
                'dFornecedor' => $this->input->post('dFornecedor'),
                'vFornecedor' => $this->input->post('vFornecedor'),

                'aViatura' => $this->input->post('aViatura'),
                'eViatura' => $this->input->post('eViatura'),
                'dViatura' => $this->input->post('dViatura'),
                'vViatura' => $this->input->post('vViatura'),

                'aTecnico' => $this->input->post('aTecnico'),
                'eTecnico' => $this->input->post('eTecnico'),
                'dTecnico' => $this->input->post('dTecnico'),
                'vTecnico' => $this->input->post('vTecnico'),                

                'aCompra' => $this->input->post('aCompra'),
                'eCompra' => $this->input->post('eCompra'),
                'dCompra' => $this->input->post('dCompra'),
                'vCompra' => $this->input->post('vCompra'),             

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

                'rCliente' => $this->input->post('rCliente'),
                'rProduto' => $this->input->post('rProduto'),
                'rServico' => $this->input->post('rServico'),
                'rJc' => $this->input->post('rJc'),
                'rVenda' => $this->input->post('rVenda'),
                'rFinanceiro' => $this->input->post('rFinanceiro'),
                'rEntrada' => $this->input->post('rEntrada'),
                'rSaida' => $this->input->post('rSaida'),
                'rCompra' => $this->input->post('rCompra'),
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

                'aCliente' => $this->input->post('aCliente'),
                'eCliente' => $this->input->post('eCliente'),
                'dCliente' => $this->input->post('dCliente'),
                'vCliente' => $this->input->post('vCliente'),

                'aProduto' => $this->input->post('aProduto'),
                'eProduto' => $this->input->post('eProduto'),
                'dProduto' => $this->input->post('dProduto'),
                'vProduto' => $this->input->post('vProduto'),

                'aFornecedor' => $this->input->post('aFornecedor'),
                'eFornecedor' => $this->input->post('eFornecedor'),
                'dFornecedor' => $this->input->post('dFornecedor'),
                'vFornecedor' => $this->input->post('vFornecedor'),

                'aViatura' => $this->input->post('aViatura'),
                'eViatura' => $this->input->post('eViatura'),
                'dViatura' => $this->input->post('dViatura'),
                'vViatura' => $this->input->post('vViatura'),

                'aTecnico' => $this->input->post('aTecnico'),
                'eTecnico' => $this->input->post('eTecnico'),
                'dTecnico' => $this->input->post('dTecnico'),
                'vTecnico' => $this->input->post('vTecnico'),                

                'aCompra' => $this->input->post('aCompra'),
                'eCompra' => $this->input->post('eCompra'),
                'dCompra' => $this->input->post('dCompra'),
                'vCompra' => $this->input->post('vCompra'),             

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

                'rCliente' => $this->input->post('rCliente'),
                'rProduto' => $this->input->post('rProduto'),
                'rServico' => $this->input->post('rServico'),
                'rJc' => $this->input->post('rJc'),
                'rVenda' => $this->input->post('rVenda'),
                'rFinanceiro' => $this->input->post('rFinanceiro'),
                'rEntrada' => $this->input->post('rEntrada'),
                'rSaida' => $this->input->post('rSaida'),
                'rCompra' => $this->input->post('rCompra'),
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

/*
a:53:{
    s:8:"aCliente";N;
    s:8:"eCliente";N;
    s:8:"dCliente";N;
    s:8:"vCliente";s:1:"1";

    s:8:"aProduto";N;
    s:8:"eProduto";N;
    s:8:"dProduto";N;
    s:8:"vProduto";s:1:"1";

    s:8:"aServico";N;
    s:8:"eServico";N;
    s:8:"dServico";N;
    s:8:"vServico";s:1:"1";

    s:3:"aOs";N;
    s:3:"eOs";N;
    s:3:"dOs";N;
    s:3:"vOs";N;

    s:6:"aVenda";N;
    s:6:"eVenda";N;
    s:6:"dVenda";N;
    s:6:"vVenda";N;

    s:9:"aGarantia";N;
    s:9:"eGarantia";N;
    s:9:"dGarantia";N;
    s:9:"vGarantia";N;
    
    s:8:"aArquivo";N;
    s:8:"eArquivo";N;
    s:8:"dArquivo";N;
    s:8:"vArquivo";N;
    
    s:10:"aPagamento";N;
    s:10:"ePagamento";N;
    s:10:"dPagamento";N;
    s:10:"vPagamento";N;
    
    s:11:"aLancamento";N;
    s:11:"eLancamento";N;
    s:11:"dLancamento";N;
    s:11:"vLancamento";N;

    s:8:"cUsuario";
    N;
    s:9:"cEmitente";
    N;
    s:10:"cPermissao";
    N;
    s:7:"cBackup";
    N;
    s:10:"cAuditoria";
    N;
    s:6:"cEmail";
    N;
    s:8:"cSistema";
    N;

    s:8:"rCliente";
    N;
    s:8:"rProduto";
    N;
    s:8:"rServico";
    N;
    s:3:"rOs";
    N;
    s:6:"rVenda";
    N;
    s:11:"rFinanceiro";
    N;
    
    s:9:"aCobranca";
    N;
    s:9:"eCobranca";
    N;
    s:9:"dCobranca";
    N;
    s:9:"vCobranca";
    N;
}
*/

/*
a:53:{
    s:8:"aCliente";s:1:"1";
    s:8:"eCliente";s:1:"1";
    s:8:"dCliente";s:1:"1";
    s:8:"vCliente";s:1:"1";
    
    s:8:"aProduto";s:1:"1";
    s:8:"eProduto";s:1:"1";
    s:8:"dProduto";s:1:"1";
    s:8:"vProduto";s:1:"1";

    s:8:"aServico";s:1:"1";
    s:8:"eServico";s:1:"1";
    s:8:"dServico";s:1:"1";
    s:8:"vServico";s:1:"1";

    s:3:"aOs";s:1:"1";
    s:3:"eOs";s:1:"1";
    s:3:"dOs";s:1:"1";
    s:3:"vOs";s:1:"1";
    
    s:6:"aVenda";s:1:"1";
    s:6:"eVenda";s:1:"1";
    s:6:"dVenda";s:1:"1";
    s:6:"vVenda";s:1:"1";
    
    s:9:"aGarantia";s:1:"1";
    s:9:"eGarantia";s:1:"1";
    s:9:"dGarantia";s:1:"1";
    s:9:"vGarantia";s:1:"1";
    
    s:8:"aArquivo";s:1:"1";
    s:8:"eArquivo";s:1:"1";
    s:8:"dArquivo";s:1:"1";
    s:8:"vArquivo";s:1:"1";
    
    s:10:"aPagamento";N;
    s:10:"ePagamento";N;
    s:10:"dPagamento";N;
    s:10:"vPagamento";N;
    
    s:11:"aLancamento";s:1:"1";
    s:11:"eLancamento";s:1:"1";
    s:11:"dLancamento";s:1:"1";
    s:11:"vLancamento";s:1:"1";
    
    s:8:"cUsuario";s:1:"1";
    s:9:"cEmitente";s:1:"1";
    s:10:"cPermissao";s:1:"1";
    s:7:"cBackup";s:1:"1";
    s:10:"cAuditoria";s:1:"1";
    s:6:"cEmail";s:1:"1";
    s:8:"cSistema";s:1:"1";

    s:8:"rCliente";s:1:"1";
    s:8:"rProduto";s:1:"1";
    s:8:"rServico";s:1:"1";
    s:3:"rOs";s:1:"1";
    s:6:"rVenda";s:1:"1";
    s:11:"rFinanceiro";s:1:"1";
    
    s:9:"aCobranca";s:1:"1";
    s:9:"eCobranca";s:1:"1";
    s:9:"dCobranca";s:1:"1";
    s:9:"vCobranca";s:1:"1";
}
*/