<?php if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

class Services extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('form');
        $this->load->model('services_model');
        $this->data['menuServices'] = 'Serviços';
    }

    public function index()
    {
        $this->home();
    }

    public function home()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vServico')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar serviços.');
            redirect(base_url());
        }
        $this->load->library('pagination');

        $this->data['configuration']['base_url'] = site_url('services/home/');
        $this->data['configuration']['total_rows'] = $this->services_model->count('services');

        $this->pagination->initialize($this->data['configuration']);

        $this->data['results'] = $this->services_model->get('services', '*', '', $this->data['configuration']['per_page'], $this->uri->segment(3));

        $this->data['view'] = 'services/services';
        return $this->layout();
    }

    public function addService()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'aServico')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para adicionar serviços.');
            redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('services') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $price = $this->input->post('unit_price');
            $price = str_replace(",", "", $price);

            $data = [
                'name_service' => set_value('name_service'),
                'description'  => set_value('description'),
                'unit_price'   => $price,
            ];

            if ($this->services_model->add('services', $data) == true) {
                $this->session->set_flashdata('success', 'Serviço adicionado com sucesso!');
                log_info('Adicionou um serviço');
                redirect(site_url('services/addService/'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro.</p></div>';
            }
        }
        $this->data['view'] = 'services/addService';
        return $this->layout();
    }

    public function editService()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'eServico')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para editar serviços.');
            redirect(base_url());
        }
        $this->load->library('form_validation');
        $this->data['custom_error'] = '';
        $this->form_validation->set_rules('name_service', 'Nome do Serviço', 'trim|required');
        $this->form_validation->set_rules('unit_price', 'Código de Barra', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $price = $this->input->post('unit_price');
            $price = str_replace(",", "", $price);
            $data = [
                'name_service' => $this->input->post('name_service'),
                'description'  => $this->input->post('description'),
                'unit_price'   => $price,
                'updated_at'  => date('Y-m-d'),
            ];

            if ($this->services_model->edit('services', $data, 'idService', $this->input->post('idService')) == true) {
                $this->session->set_flashdata('success', 'Serviço editado com sucesso!');
                log_info('Alterou um serviço. ID: ' . $this->input->post('idService'));
                redirect(site_url('services/editService/') . $this->input->post('idService'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um errro.</p></div>';
            }
        }

        $this->data['result'] = $this->services_model->getById($this->uri->segment(3));

        $this->data['view'] = 'services/editService';
        return $this->layout();
    }

    public function viewService()
    {
        echo "Hello service.";

        $this->data['view'] = 'services/viewService';
        return $this->layout();
    }

    public function removeService()
    {
        echo "Hello service.";

    }

}