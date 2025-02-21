<?php
class Clientes_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function add($table, $data)
    {
        $this->db->insert($table, $data);
        if ($this->db->affected_rows() == '1') {
            return $this->db->insert_id($table);
        }
        return false;
    }

    public function edit($table, $data, $fieldID, $ID)
    {
        $this->db->where($fieldID, $ID);
        $this->db->update($table, $data);

        if ($this->db->affected_rows() >= 0) {
            return true;
        }

        return false;
    }

    public function count($table)
    {
        return $this->db->count_all($table);
    }

    public function contar_fornecedores() {
        // Contar os registros onde valor da coluna tipo_cliente é 1
        $this->db->where('tipo_cliente', 1);
        $this->db->from('clientes');        
        return $this->db->count_all_results(); // Retorna o total
    }

    public function contar_clientes() {
        // Contar os registros onde valor da coluna tipo_cliente é 0
        $this->db->where('tipo_cliente', 0);
        $this->db->from('clientes');        
        return $this->db->count_all_results(); // Retorna o total
    }

    public function contar_empresa_publica() {
        // Contar os registros onde valor da coluna tipo_cliente é 0
        $this->db->where('categoria', 'Empresa Pública');
        $this->db->from('clientes');        
        return $this->db->count_all_results(); // Retorna o total
    }

    public function contar_empresa_privada() {
        // Contar os registros onde valor da coluna tipo_cliente é 0
        $this->db->where('categoria', 'Empresa Privada');
        $this->db->from('clientes');        
        return $this->db->count_all_results(); // Retorna o total
    }

    public function get($table, $fields, $where = '', $perpage = 0, $start = 0, $one = false, $array = 'array')
    {
        $this->db->select($fields);
        $this->db->from($table);
        $this->db->order_by('idClientes', 'desc');
        $this->db->limit($perpage, $start);
        if ($where) {
            $this->db->where($where);
        }

        $query = $this->db->get();

        $result = !$one ? $query->result() : $query->row();
        return $result;
    }

    public function getById($id)
    {
        $this->db->where('idClientes', $id);
        $this->db->limit(1);
        return $this->db->get('clientes')->row();
    }

    public function delete($table, $fieldID, $ID)
    {
        $this->db->where($fieldID, $ID);
        $this->db->delete($table);
        if ($this->db->affected_rows() == '1') {
            return true;
        }

        return false;
    }

}