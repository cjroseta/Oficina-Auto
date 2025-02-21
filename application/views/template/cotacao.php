<?php

public function aprovarCotacao()
{
    if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'eOrcamento')) {
        $this->session->set_flashdata('error', 'Você não tem permissão para aprovar cotações.');
        redirect(base_url());
    }

    $this->load->library('form_validation');
    $this->data['custom_error'] = '';

    $cotacao_id = $this->input->post('cotacao_id');

    $this->db->trans_start(); // Inicia a transação

    // Atualizar a cotação para 'Aprovada'
    $this->db->set('status', 'Aprovada');
    $this->db->where('idCotacao', $cotacao_id);
    $this->db->update('cotacoes');

    // Obter dados da cotação
    $cotacao = $this->cotacoes_model->getById($cotacao_id);

    if (!$cotacao) {
        $this->db->trans_rollback();
        $this->session->set_flashdata('error', 'Cotação não encontrada.');
        redirect(base_url('cotacoes'));
    }

    // Criar Orçamento
    $orcamentoData = [
        'cotacao_id' => $cotacao_id,
        'cliente_id' => $cotacao->cliente_id,
        'descricao' => $cotacao->descricao,
        'valor' => $cotacao->valor_total,
        'status' => 'Aprovado',
        'data_criacao' => date('Y-m-d H:i:s'),
        'usuarios_id' => $this->session->userdata('id_admin')
    ];

    $this->db->insert('orcamentos', $orcamentoData);
    $orcamento_id = $this->db->insert_id();

    if (!$orcamento_id) {
        $this->db->trans_rollback();
        $this->session->set_flashdata('error', 'Erro ao criar orçamento.');
        redirect(base_url('cotacoes'));
    }

    // Criar Ordem de Serviço
    $osData = [
        'orcamento_id' => $orcamento_id,
        'cotacao_id' => $cotacao_id,
        'cliente_id' => $cotacao->cliente_id,
        'descricao' => $cotacao->descricao,
        'status' => 'Pendente',
        'data_criacao' => date('Y-m-d H:i:s'),
        'usuarios_id' => $this->session->userdata('id_admin')
    ];

    $this->db->insert('ordens_servico', $osData);
    $os_id = $this->db->insert_id();

    if (!$os_id) {
        $this->db->trans_rollback();
        $this->session->set_flashdata('error', 'Erro ao criar ordem de serviço.');
        redirect(base_url('cotacoes'));
    }

    $this->db->trans_complete(); // Finaliza a transação

    if ($this->db->trans_status() === FALSE) {
        $this->session->set_flashdata('error', 'Erro ao aprovar cotação e criar orçamento e OS.');
    } else {
        $this->session->set_flashdata('success', 'Cotação aprovada, orçamento e ordem de serviço criados com sucesso.');
    }

    redirect(base_url('cotacoes'));
}
