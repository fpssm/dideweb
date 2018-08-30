<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fornecedores_model extends CI_Model
{
	public function __construct()
    {
        parent::__construct();
    }

    public function listar_fornecedores()
    {
        $this->db->order_by('id', 'ASC');
        return $this->db->get('dw_fornecedores')->result();
    }

    public function adicionar_fornecedor($fornecedor)
    {
        $fornecedor['telefone'] = unmask($fornecedor['telefone']);
        $fornecedor['telefone_vendedor'] = unmask($fornecedor['telefone_vendedor']);
        $fornecedor['cep'] = unmask($fornecedor['cep']);
        $fornecedor['dias_visita'] = implode(':', $fornecedor['dias_visita']);
        $fornecedor['dias_entrega'] = implode(':', $fornecedor['dias_entrega']);
        // var_dump($fornecedor);
        // die();
        $this->db->trans_start();
        $this->db->insert('dw_fornecedores', $fornecedor);
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
