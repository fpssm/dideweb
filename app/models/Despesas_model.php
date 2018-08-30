<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Despesas_model extends CI_Model
{
	public function __construct()
    {
        parent::__construct();
    }

    public function listar_despesas()
    {
        $this->db->select('dw_despesas.*, dw_lojas.id as id_loja, dw_lojas.codigo as codigo_loja, dw_funcionarios.id as id_funcionario, dw_funcionarios.nome as nome_funcionario, dw_tipos_despesas.id as id_tipo_despesa, dw_tipos_despesas.descricao as descricao_despesa');
        $this->db->from('dw_despesas');
        $this->db->join('dw_lojas', 'dw_despesas.id_loja = dw_lojas.id', 'left');
        $this->db->join('dw_funcionarios', 'dw_despesas.id_funcionario = dw_funcionarios.id', 'left');
        $this->db->join('dw_tipos_despesas', 'dw_despesas.id_tipo_despesa = dw_tipos_despesas.id', 'left');
        $this->db->order_by('dw_despesas.id', 'ASC');
        return $this->db->get()->result();
    }

    public function listar_tipos_despesas()
    {
        $this->db->order_by('descricao', 'ASC');
        return $this->db->get('dw_tipos_despesas')->result();
    }

    public function adicionar_despesa($despesa)
    {
        $despesa['data'] = detodb($despesa['data']);
        // var_dump($despesa);
        // die();
        $this->db->trans_start();
        $this->db->insert('dw_despesas', $despesa);
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

    public function adicionar_tipo_despesa($tipo_despesa)
    {
        $this->db->trans_start();
        $this->db->insert('dw_tipos_despesas', $tipo_despesa);
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
