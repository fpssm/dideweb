<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Relatorios extends CI_Controller
{
	public function caixa()
	{
        $dados = [
        	'li_ativo' => 'li_relatorios'
        ];
		$this->load->view('pdv/template/html-header.php', $dados);
		$this->load->view('pdv/relatorios/caixa.php');
		$this->load->view('pdv/template/html-footer.php');
	}
    
    public function vendas()
	{
        $dados = [
        	'li_ativo' => 'li_relatorios'
        ];
		$this->load->view('pdv/template/html-header.php', $dados);
		$this->load->view('pdv/relatorios/vendas.php');
		$this->load->view('pdv/template/html-footer.php');
	}
    
    public function maisvendidos()
	{
        $dados = [
        	'li_ativo' => 'li_relatorios'
        ];
		$this->load->view('pdv/template/html-header.php', $dados);
		$this->load->view('pdv/relatorios/maisvendidos.php');
		$this->load->view('pdv/template/html-footer.php');
	}
}
