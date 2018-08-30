<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdv_model extends CI_Model 
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

    public function lancar_produto($produto, $comanda)
    {
    	
    }

    public function remover_produto($id)
    {

    }

    public function setar_cliente($id, $comanda)
    {
                
    }

   
}
