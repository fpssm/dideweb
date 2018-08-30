<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionarios_model extends CI_Model
{
	public function __construct()
    {
        parent::__construct();
    }

    public function listar_grupos()
    {
        return $this->db->get('dw_grupos')->result();
    }
    
    public function listar_funcionarios()
    {
        $this->db->select('dw_funcionarios.*, dw_grupos.id as id_grupo, dw_grupos.nome as nome_grupo');
        $this->db->from('dw_funcionarios');
        $this->db->join('dw_grupos', 'dw_grupos.id = dw_funcionarios.id_grupo', 'left');
        $this->db->order_by('dw_funcionarios.nome', 'ASC');
        return $this->db->get()->result();
    }

    public function adicionar_funcionario($funcionario)
    {
        $funcionario = [
            'data_nas' => dntodb($funcionario['data_nas']),
            'data_adm' => dntodb($funcionario['data_adm']),
            'telefone' => unmask($funcionario['telefone'])
        ];
        // var_dump($funcionario);
        // die();
        $this->db->trans_start();
        $this->db->insert('dw_funcionarios', $funcionario);
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
