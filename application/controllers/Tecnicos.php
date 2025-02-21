<?php if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

class Tecnicos extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('tecnicos_model');
        $this->data['menuTecnicos'] = 'Tecnicos';
    }

    public function index()
    {
        $this->home();
    }

    public function home()
    {
        $this->load->library('pagination');

        $this->data['configuration']['base_url'] = base_url() . 'index.php/tecnicos/home/';
        $this->data['configuration']['total_rows'] = $this->tecnicos_model->count('tecnicos');

        $this->pagination->initialize($this->data['configuration']);

        $this->data['results'] = $this->tecnicos_model->get('tecnicos', '*', '', $this->data['configuration']['per_page'], $this->uri->segment(3));

        $this->data['view'] = 'tecnicos/tecnicos';
        return $this->layout();
    }

    public function adicionar()
    {
        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="alert alert-danger">' . validation_errors() . '</div>' : false);
        } else {
            $data = [
                'nomeTecnico' => set_value('nomeTecnico'),
                'codigo' => set_value('codigo'),
                'dataAdmissao' => set_value('dataAdmissao'),
                'genero' => set_value('telefone'),
                'celular' => set_value('celular'),
                'dataExpiracao' => set_value('dataExpiracao'),
                'situacao' => set_value('situacao'),
                'permissoes_id' => $this->input->post('permissoes_id'),
                'dataCadastro' => date('Y-m-d'),
            ];

            if ($this->usuarios_model->add('usuarios', $data) == true) {
                $this->session->set_flashdata('success', 'Técnico cadastrado com sucesso!');
                log_info('Adicionou um técnico.');
                redirect(site_url('tecnicos/adicionar/'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro.</p></div>';
            }
        }

        $this->data['view'] = 'tecnicos/adicionarTecnico';
        return $this->layout();
    }


}