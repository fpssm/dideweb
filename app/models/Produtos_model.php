<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos_model extends CI_Model 
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function listar_produtos()
    {
        $this->db->select('dw_produtos.*, dw_categorias.id as id_categoria, dw_categorias.nome as nome_categoria');
        $this->db->from('dw_produtos');
        $this->db->join('dw_categorias', 'dw_categorias.id = dw_produtos.id_categoria', 'left');
        $this->db->order_by('dw_produtos.id', 'ASC');
        return $this->db->get()->result();
    }

    public function adicionar_produto($produto, $produto_loja)
    {
    	$this->db->trans_start();
		$this->db->insert('dw_produtos', $produto);
		$produto_loja['id_produto'] = $this->db->insert_id();
		$this->db->insert('dw_produtos_loja_qtd', $produto_loja);
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

    public function deletar_produto($id)
    {
        if($this->deletar_produto_loja($id))
        {
            $this->db->where('id', $id);
            return $this->db->delete('dw_produtos');
        }
        else
        {
            return FALSE;
        }
        
    }

    public function deletar_produto_loja($id)
    {
        $this->db->where('id_produto', $id);
        return $this->db->delete('dw_produtos_loja_qtd');
    }

}
