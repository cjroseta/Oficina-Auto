<?php
class Jobcards_model extends CI_Model
{
        
    public function __construct()
    {
        parent::__construct();
    }

    public function get($table, $fields, $where = '', $perpage = 0, $start = 0, $one = false, $array = 'array')
    {
        $this->db->select($fields);
        $this->db->from($table);
        $this->db->order_by('idJc', 'desc');
        $this->db->limit($perpage, $start);
        if ($where) {
            $this->db->where($where);
        }
        
        $query = $this->db->get();
        
        $result =  !$one  ? $query->result() : $query->row();
        return $result;
    }

    public function getById($id)
    {
        $this->db->where('idJc', $id);
        $this->db->limit(1);
        return $this->db->get('jobcard')->row();
    }

    public function count($table)
    {
        return $this->db->count_all($table);
    }
    

}