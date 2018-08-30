<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Impressoras extends CI_Controller
{

	public function listar()
	{
        $dados = [
        	'li_ativo' => 'li_config'
        ];
		$this->load->view('pdv/template/html-header.php', $dados);
		$this->load->view('pdv/configuracoes/imp_listar.php');
		$this->load->view('pdv/template/html-footer.php');
	}

	public function add()
	{
        $dados = [
        	'li_ativo' => 'li_config'
        ];
		$this->load->view('pdv/template/html-header.php', $dados);
		$this->load->view('pdv/configuracoes/imp_add.php');
		$this->load->view('pdv/template/html-footer.php');
	}
}
