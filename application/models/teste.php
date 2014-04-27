<?php

class Teste extends CI_Model{
    public function select()
    {
        $query = $this->db->query('SELECT * FROM teste');
        return $query->result();
    }
}
