<?php if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

class Products extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('products_model');
        $this->data['menuProducts'] = 'Produtos';
    }

    public function index()
    {
        $this->home();
    }

    public function home()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vProduct')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar productos.');
            redirect(base_url());
        }
        $this->load->library('pagination');

        $this->data['configuration']['base_url'] = site_url('products/home/');
        $this->data['configuration']['total_rows'] = $this->products_model->count('products');
        
        $this->pagination->initialize($this->data['configuration']);
        
        $this->data['products'] = $this->products_model->get('products', 'idProduct, name, stock, price, bar_code', '', $this->data['configuration']['per_page'], $this->uri->segment(3));

        $this->data['view'] = 'products/products';
        return $this->layout();
    }

    public function addProduct()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'aProduct')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para adicionar productos.');
            redirect(base_url());
        }
        
        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('products') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $cost = $this->input->post('cost');
            $cost = str_replace(",", "", $cost);
            $price = $this->input->post('price');
            $price = str_replace(",", "", $price);
            $data = [
                'bar_code'   => set_value('bar_code'),
                'name'       => set_value('name'),
                'unit'       => set_value('unit'),
                'cost'       => $cost,
                'price'      => $price,            
                'created_at' => date('Y-m-d'),
                'stock'      => set_value('stock'),
                'min_stock'  => set_value('min_stock'),
                'saida'      => set_value('saida'),
                'entrada'    => set_value('entrada'),
            ];

            if ($this->products_model->add('products', $data) == true) {
                $this->session->set_flashdata('success', 'Producto adicionado com sucesso!');
                log_info('Adicionou um producto.');
                redirect(site_url('products/addProduct'));   
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro.</p></div>';
            }
        }

        $this->data['view'] = 'products/addProduct';
        return $this->layout();
    }

    public function editProduct()
    {
        if (!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))) {
            $this->session->set_flashdata('error', 'Item não pode ser encontrado, parâmetro não foi passado corretamente.');
            redirect('systofi');
        }

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'eProduct')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para editar productos.');
            redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';
        $this->form_validation->set_rules('name', 'Nome do Producto', 'trim|required');
        $this->form_validation->set_rules('bar_code', 'Código de Barra', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $cost = $this->input->post('cost');
            $cost = str_replace(",", "", $cost);
            $price = $this->input->post('price');
            $price = str_replace(",", "", $price);
            $data = [
                'bar_code'    => set_value('bar_code'),
                'name'        => set_value('name'),
                'unit'        => set_value('unit'),
                'cost'        => $cost,
                'price'       => $price,            
                'updated_at'  => date('Y-m-d'),
                'stock'       => set_value('stock'),
                'min_stock'   => set_value('min_stock'),
                'saida'       => set_value('saida'),
                'entrada'     => set_value('entrada'),
            ];

            if ($this->products_model->edit('products', $data, 'idProduct', $this->input->post('idProduct')) == true) {
                $this->session->set_flashdata('success', 'Producto editado com sucesso!');
                redirect(site_url('products/viewProduct/') . $this->input->post('idProduct'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro</p></div>';
            }
        }

        $this->data['result'] = $this->products_model->getById($this->uri->segment(3));
        $this->data['view'] = 'products/editProduct';
        return $this->layout();
    }

    public function viewProduct()
    {
        if (!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))) {
            $this->session->set_flashdata('error', 'Item não pode ser encontrado, parâmetro não foi passado corretamente.');
            redirect('systofi');
        }
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vProduct')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar productos.');
            redirect(base_url());
        }
        $this->data['custom_error'] = '';
        $this->data['result'] = $this->products_model->getById($this->uri->segment(3));
        $this->data['view'] = 'products/viewProduct';
        return $this->layout();
    }

    public function removeProduct()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'dProduct')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para excluir productos.');
            redirect(base_url());
        }

        $id = $this->input->post('id');
        if ($id == null) {
            $this->session->set_flashdata('error', 'Erro ao tentar excluir producto.');
            redirect(site_url('products/home/'));
        }

        $this->products_model->delete('products', 'idProduct', $id);
        log_info('Removeu producto ' . $id);

        $this->session->set_flashdata('success', 'Producto excluido com sucesso!');
        redirect(site_url('products/home/'));
    }

}