<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lojas_model extends CI_Model
{    
	public function __construct()
    {
        parent::__construct();
    }
    
    public function listar_lojas()
    {
        $this->db->order_by('id', 'ASC');
        return $this->db->get('dw_lojas')->result();
    }
}
