<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dados_model extends CI_Model
{

	public function __construct()
	{
        parent::__construct();
    }
    
    public function conta_produtos()
    {
        return $this->db->count_all('dw_produtos');
    }

    public function conta_clientes()
    {
        return $this->db->count_all('dw_clientes');
    }
}
