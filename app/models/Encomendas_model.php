<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Encomendas_model extends CI_Model
{
	public function __construct()
    {
        parent::__construct();
    }
    
    public function listar_encomendas()
    {
        $this->db->order_by('id', 'ASC');
        return $this->db->get('dw_encomendas')->result();
    }
    
    public function listar_calendario($start, $end)
    {
        return $this->db->where("paradiahora >=", $start)->where("paradiahora <=", $end)->get("dw_encomendas");
    }
}
