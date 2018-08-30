<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }
    
    public function listar_clientes()
    {
        $this->db->select('dw_clientes.*, dw_lojas.id as id_loja, dw_lojas.nome_fantasia as nome_fantasia');
        $this->db->from('dw_clientes');
        $this->db->join('dw_lojas', 'dw_lojas.id = dw_clientes.id_loja', 'left');
        $this->db->order_by('dw_clientes.id', 'ASC');
        return $this->db->get()->result();
    }

    public function adicionar_cliente($cliente)
    {
        $cliente['data_nas'] = dntodb($cliente['data_nas']);
        $this->db->trans_start();
        $this->db->insert('dw_clientes', $cliente);
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE)
        {
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
}
