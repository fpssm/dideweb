<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lojas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('lojas_model', 'mloj');
        $this->lojas = $this->mloj->listar_lojas();
    }

    public function listar()
    {
        $dados = [
            'lojas'     =>   $this->lojas,
            'li_ativo'  => 'li_config'
        ];
        $this->load->view('pdv/template/html-header.php', $dados);
        $this->load->view('pdv/configuracoes/loja_listar.php', $dados);
        $this->load->view('pdv/template/html-footer.php');
    }
    
    public function add()
    {
        $dados = [
            'li_ativo' => 'li_config'
        ];
        $this->load->view('pdv/template/html-header.php', $dados);
        $this->load->view('pdv/configuracoes/loja_add.php');
        $this->load->view('pdv/template/html-footer.php');
    }
}
