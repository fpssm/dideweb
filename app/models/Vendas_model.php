<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendas_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function listar_fechadas()
    {
        $this->db->where("status=", 0);
        $this->db->order_by('id', 'ASC');
        return $this->db->get('dw_vendas')->result();
    }

    public function listar_abertas()
    {
        $this->db->where("status=", 1);
        $this->db->order_by('id', 'ASC');
        return $this->db->get('dw_vendas')->result();
    }
    
    public function listar_canceladas()
    {
        $this->db->where("status=", 2);
        $this->db->order_by('id', 'ASC');
        return $this->db->get('dw_vendas')->result();
    }
}
