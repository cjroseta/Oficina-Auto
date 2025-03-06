<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Contacts extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('contacts_model');
        $this->data['menuContacts'] = 'contacts';
    }

    public function index()
    {
        $this->home();
    }

    public function home()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vContact')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar contactos.');
            redirect(base_url());
        }

        $pesquisa = $this->input->get('pesquisa');

        $this->load->library('pagination');

        $this->data['configuration']['base_url'] = site_url('contacts/home');
        $this->data['configuration']['total_rows'] = $this->contacts_model->count('contacts');

        if($pesquisa) {
            $this->data['configuration']['suffix'] = "?pesquisa={$pesquisa}";
            $this->data['configuration']['first_url'] = base_url("index.php/contacts")."\?pesquisa={$pesquisa}";
        }

        $this->pagination->initialize($this->data['configuration']);

        $this->data['results'] = $this->contacts_model->get('contacts', 'idContacts,nuit,contact,email,celular,nameContact,category,type_contact', '', 
        $this->data['configuration']['per_page'], $this->uri->segment(3));

        $this->data['total_fornecedores'] = $this->contacts_model->contar_fornecedores();
        $this->data['total_contacts'] = $this->contacts_model->count_contacts();
        $this->data['empresa_publica'] = $this->contacts_model->contar_empresa_publica();
        $this->data['empresa_privada'] = $this->contacts_model->contar_empresa_privada();

        $this->data['view'] = 'contacts/contacts';
        return $this->layout();
    }

    public function addContact()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'aContact')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para adicionar contactos.');
            redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('contacts') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $data = [
                'nameContact'   => set_value('nameContact'),
                'contact'       => set_value('contact'),
                'nuit'          => set_value('nuit'),
                'telefone'      => set_value('telefone'),
                'celular'       => set_value('celular'),
                'celular2'      => set_value('celular2'),
                'email'         => set_value('email'),
                'address'       => set_value('address'),
                'city'          => set_value('city'),
                'category'      => set_value('category'),
                'type_contact'  => set_value('type_contact'),
                'created_at'    => date('Y-m-d'),
            ];

            if ($this->contacts_model->add('contacts', $data) == true) {
                $this->session->set_flashdata('success', 'Contacto adicionado com sucesso!');
                log_info('Adicionou um contacto.');
                redirect(site_url('contacts/'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro.</p></div>';
            }
        }

        $this->data['view'] = 'contacts/addContact';
        return $this->layout();
    }

    public function addModal()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'aContact')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para adicionar contactos.');
            redirect(base_url());
        }

        $urlAtual = $this->input->post('urlAtual');

        $data = [
            'nuit'          => $this->input->post('nuit'),
            'nameContact'   => $this->input->post('nameContact'),
        ];

        if ($this->contacts_model->add('contacts', $data) == true) {
            $this->session->set_flashdata('success', 'Contacto adicionado com sucesso!');
            redirect($urlAtual);
        } else {
            $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro.</p></div>';
        }
    }

    public function editContact()
    {
        if (!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))) {
            $this->session->set_flashdata('error', 'Item não pode ser encontrado, parâmetro não foi passado corretamente.');
            redirect('systofi');
        }

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'eContact')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para editar contacts.');
            redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';
        $this->form_validation->set_rules('nuit', 'NUIT', 'trim|required');
        $this->form_validation->set_rules('nameContact', 'Nome do Contacto', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $data = [
                'nuit'          => $this->input->post('nuit'),
                'nameContact'   => $this->input->post('nameContact'),
                'contact'       => $this->input->post('contact'),
                'telefone'      => $this->input->post('telefone'),
                'celular'       => $this->input->post('celular1'),
                'celular2'      => $this->input->post('celular2'),
                'city'          => $this->input->post('city'),
                'address'       => $this->input->post('address'),
                'email'         => $this->input->post('email'),
                'category'      => $this->input->post('category'),
                'type_contact'  => $this->input->post('type_contact'),
                'update_at'     => date('Y-m-d'),
            ];

            if ($this->contacts_model->edit('contacts', $data, 'idContacts', $this->input->post('idContacts')) == true) {
                $this->session->set_flashdata('success', 'Contacto editado com sucesso!');
                redirect(site_url('contacts/viewContact/') . $this->input->post('idContacts'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro</p></div>';
            }
        }

        $this->data['result'] = $this->contacts_model->getById($this->uri->segment(3));
        $this->data['view'] = 'contacts/editContact';
        return $this->layout();
    }

    public function viewContact()
    {
        if (!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))) {
            $this->session->set_flashdata('error', 'Item não pode ser encontrado, parâmetro não foi passado corretamente.');
            redirect('systofi');
        }
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vContact')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar contacts.');
            redirect(base_url());
        }
        $this->data['custom_error'] = '';
        $this->data['result'] = $this->contacts_model->getById($this->uri->segment(3));
        //$this->data['results'] = $this->contacts_model->getOsByContact($this->uri->segment(3));
        //$this->data['results'] = $this->contacts_model->getVendasByContact($this->uri->segment(3));
        //$this->data['results'] = $this->contacts_model->getCotacoesByContact($this->uri->segment(3));
        $this->data['view'] = 'contacts/viewContact';
        return $this->layout();
    }

    public function removeContact()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'dContact')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para excluir contactos.');
            redirect(base_url());
        }

        $id = $this->input->post('id');
        if ($id == null) {
            $this->session->set_flashdata('error', 'Erro ao tentar excluir contacto.');
            redirect(site_url('contacts/home/'));
        }

        /*// excluindo OS vinculadas ao contacto
        $os = $this->contacts_model->getAllOsByClient($id);
        if ($os != null) {
            $this->contacts_model->removeClientOs($os);
        }

        // excluindo Cotações vinculadas ao contacto
        $os = $this->contacts_model->getAllOsByClient($id);
        if ($os != null) {
            $this->contacts_model->removeClientOs($os);
        }

        // excluindo Vendas vinculadas ao contacto
        $vendas = $this->contacts_model->getAllVendasByClient($id);
        if ($vendas != null) {
            $this->contacts_model->removeClientVendas($vendas);
        }*/

        $this->contacts_model->delete('contacts', 'idContacts', $id);
        log_info('Removeu um contacto. ID' . $id);

        $this->session->set_flashdata('success', 'Contacto excluido com sucesso!');
        redirect(site_url('contacts/home/'));
    }
}
