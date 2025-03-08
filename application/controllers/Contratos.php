<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contratos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Carregar modelos, bibliotecas, etc.
        $this->load->model('contratos_model');
    }

    public function index() {
        // Carregar dados do modelo
        $data['contratos'] = $this->contratos_model->get_all_contratos();
        
        // Carregar a view e passar os dados
        $this->load->view('contratos/index', $data);
    }

    public function view($id) {
        // Carregar dados do modelo
        $data['contrato'] = $this->contratos_model->get_contrato($id);
        
        if (empty($data['contrato'])) {
            show_404();
        }

        // Carregar a view e passar os dados
        $this->load->view('contratos/view', $data);
    }

    public function create() {
        // Lógica para criar um novo contrato
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('contratos/create');
        } else {
            $this->contratos_model->set_contrato();
            $this->load->view('contratos/success');
        }
    }
}
?>