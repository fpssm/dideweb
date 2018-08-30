<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vales_model extends CI_Model 
{

	public function __construct()
    {
        parent::__construct();
    }

    public function buscaCodigo($codigo)
    {
        if ($this->db->where("codigo =", $codigo)->get("dw_vales_presentes")->result() == TRUE)
        {
            return TRUE;
        }
    return FALSE;
    }

    public function listar_vales()
    {
        $this->db->select('dw_vales_presentes.*, dw_lojas.id as id_loja, dw_lojas.codigo as codigo_loja, dw_funcionarios.id as id_funcionario, dw_funcionarios.nome as nome_funcionario, dw_clientes.id as id_cliente, dw_clientes.nome as nome_cliente');
        $this->db->from('dw_vales_presentes');
        $this->db->join('dw_lojas', 'dw_vales_presentes.id_loja = dw_lojas.id', 'left');
        $this->db->join('dw_funcionarios', 'dw_vales_presentes.id_funcionario = dw_funcionarios.id', 'left');
        $this->db->join('dw_clientes', 'dw_vales_presentes.id_cliente = dw_clientes.id', 'left');
        $this->db->order_by('dw_vales_presentes.id', 'ASC');
        return $this->db->get()->result();
    }
    
    public function adicionar_vale($vale){
    	$find = array("R$ ",",");
        $replace = array("",".");

        $vale = [
            'valor'     =>  str_replace($find, $replace, $vale['valor']),
            'expira_em' => dntodb($vale['expira_em'])
        ];
        // var_dump($vale);
        // die();
        $this->db->trans_start();
		$this->db->insert('dw_vales_presentes', $vale);
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
