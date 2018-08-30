<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendas extends CI_Controller
{
	public function fechadas()
	{
		$this->load->model('vendas_model', 'mfec');
        $this->fechadas = $this->mfec->listar_fechadas();

        $dados = [
        	'fechadas' => $this->fechadas,
        	'li_ativo' => 'li_vendas'
    	];
        $this->load->view('pdv/template/html-header.php', $dados);
		$this->load->view('pdv/vendas/fechadas.php', $dados);
		$this->load->view('pdv/template/html-footer.php');
	}

	public function abertas()
	{
		$this->load->model('vendas_model', 'mabe');
        $this->abertas = $this->mabe->listar_abertas();

        $dados = [
        	'abertas'  => $this->abertas,
        	'li_ativo' => 'li_vendas'
        ];
        $this->load->view('pdv/template/html-header.php', $dados);
		$this->load->view('pdv/vendas/abertas.php', $dados);
		$this->load->view('pdv/template/html-footer.php');
	}

	public function canceladas()
	{
		$this->load->model('vendas_model', 'mcan');
        $this->canceladas = $this->mcan->listar_canceladas();

        $dados = [
        	'canceladas' => $this->canceladas,
        	'li_ativo' 	 => 'li_vendas'
    	];
        $this->load->view('pdv/template/html-header.php', $dados);
		$this->load->view('pdv/vendas/canceladas.php',$dados);
		$this->load->view('pdv/template/html-footer.php');
	}
}
