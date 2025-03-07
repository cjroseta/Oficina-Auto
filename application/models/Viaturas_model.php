<?php
class Viaturas_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get($table, $fields, $where = '', $perpage = 0, $start = 0, $one = false, $array = 'array')
    {
        $this->db->select($fields . ',contacts.nameContact');
        $this->db->from($table);
        $this->db->join('contacts', 'contacts.idContacts = viaturas.clientes_id');
        $this->db->order_by('idViatura', 'desc');
        $this->db->limit($perpage, $start);
        if ($where) {
            $this->db->where($where);
        }

        $query = $this->db->get();

        $result = !$one ? $query->result() : $query->row();
        return $result;
    }

    public function add($table, $data)
    {
        $this->db->insert($table, $data);
        if ($this->db->affected_rows() == '1') {
            return true;
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

    public function getById($id)
    {
        $this->db->where('idViatura', $id);
        $this->db->limit(1);
        return $this->db->get('viaturas')->row();
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

    public function autoCompleteCliente($q)
    {
        $this->db->select('*');
        $this->db->limit(25);
        $this->db->like('nameContact', $q);
        $this->db->or_like('telefone', $q);
        $this->db->or_like('celular', $q);
        $this->db->or_like('nuit', $q);
        $query = $this->db->get('contacts');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) 
            {
                $row_set[] = [
                    'label' => $row['nameContact'] . 
                    ' | Telefone: ' . $row['telefone'] . 
                    ' | Celular: ' . $row['celular'] . 
                    ' | NUIT: ' . $row['nuit'], 
                    'id' => $row['idContacts']
                ];
            }
            echo json_encode($row_set);
        }
    }

}