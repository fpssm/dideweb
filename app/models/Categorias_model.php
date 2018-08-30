<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias_model extends CI_Model
{

	public function __construct()
    {
        parent::__construct();
    }

    public function listar_categorias()
    {
        $this->db->order_by('codigo', 'ASC');
        return $this->db->get('dw_categorias')->result();
    }
    
    public function adicionar_categoria($categoria)
    {
    	$this->db->trans_start();
		$this->db->insert('dw_categorias', $categoria);
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
