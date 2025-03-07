<?php if (!defined('BASEPATH')) { exit('No direct script access allowed');}

class Systofi extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('systofi_model');
    }

    //Dashbord - Financeiro e Despesas
    public function index()
    {
        //$this->data['products'] = $this->systofi_model->vendasInternasExternas();
        //$this->data['products'] = $this->systofi_model->getItens();
        //$this->data['productsSir'] = $this->systofi_model->getItensSir();
        //$this->data['productsIndigena'] = $this->systofi_model->getItensIndigena();
        $this->data['estatisticas_financeiro'] = $this->systofi_model->getEstatisticasFinanceiro();
        $this->data['financeiro_mes'] = $this->systofi_model->getEstatisticasFinanceiroMes($this->input->get('year'));
        $this->data['financeiro_mes_dia'] = $this->systofi_model->getEstatisticasFinanceiroDia($this->input->get('year'));
        $this->data['financeiro_mes_ano'] = $this->systofi_model->getEstatisticasFinanceiroAno($this->input->get('year'));
        $this->data['despesa_mes_grupo'] = $this->systofi_model->getEstatisticasDespesaMesGrupo($this->input->get('year'));
        $this->data['despesa_ano_grupo'] = $this->systofi_model->getEstatisticasDespesaAnoGrupo($this->input->get('year'));

        $this->data['menuPainel'] = 'Painel';
        $this->data['view'] = 'systofi/painel';
        return $this->layout();
    }

    //Dashbord vendas realizadas
    public function painelVendas()
    {
        $this->data['products'] = $this->systofi_model->getItens();
        $this->data['productsSir'] = $this->systofi_model->getItensSir();
        $this->data['productsIndigena'] = $this->systofi_model->getItensIndigena();
        $this->data['estatisticas_financeiro'] = $this->systofi_model->getEstatisticasFinanceiro();
        $this->data['financeiro_mes'] = $this->systofi_model->getEstatisticasFinanceiroMes($this->input->get('year'));
        $this->data['financeiro_mes_dia'] = $this->systofi_model->getEstatisticasFinanceiroDia($this->input->get('year'));
        $this->data['financeiro_mes_ano'] = $this->systofi_model->getEstatisticasFinanceiroAno($this->input->get('year'));
        $this->data['despesa_mes_grupo'] = $this->systofi_model->getEstatisticasDespesaMesGrupo($this->input->get('year'));
        $this->data['despesa_ano_grupo'] = $this->systofi_model->getEstatisticasDespesaAnoGrupo($this->input->get('year'));

        $this->data['menuPainel'] = 'Painel';
        $this->data['view'] = 'systofi/painelVendas';
        return $this->layout();
    }

    //Dashboard job cards
    public function painelJobCard()
    {
        $this->data['financeiro_mes_dia'] = $this->systofi_model->getEstatisticasFinanceiroDia($this->input->get('year'));
        $this->data['financeiro_mes_ano'] = $this->systofi_model->getEstatisticasFinanceiroAno($this->input->get('year'));
        $this->data['jobcard_mes'] = $this->systofi_model->getEstatisticasMesJobCard($this->input->get('year'));
        $this->data['estatisticas_jobcard'] = $this->systofi_model->getEstatisticasJobCard();

        $this->data['menuPainel'] = 'Painel';
        $this->data['view'] = 'systofi/painelJobcard';
        return $this->layout();
    }

    public function minhaConta()
    {
        $this->data['view'] = 'systofi/minhaConta';
        return $this->layout();
    }

    public function configurar()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'cSistema')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para configurar o sistema');
            redirect(base_url());
        }

        $this->data['menuConfiguracoes'] = 'Sistema';

        $this->load->library('form_validation');
        $this->load->model('systofi_model');

        $this->data['custom_error'] = '';

        $this->form_validation->set_rules('app_theme', 'Tema do Sistema', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="alert">' . validation_errors() . '</div>' : false);
        } else {
            $data = [
                'app_theme' => $this->input->post('app_theme'),
            ];
            if ($this->systofi_model->saveConfiguracao($data) == true) {
                $this->session->set_flashdata('success', 'Configurações do sistema actualizadas com sucesso!');
                redirect(site_url('systofi/configurar'));
            } else {
                $this->data['custom_error'] = '<div class="alert">Ocorreu um errro.</div>';
            }
        }
        $this->data['view'] = 'systofi/configurar';
        return $this->layout();
    }
    
    public function calendar()
    {
        
    }
}
