<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajustes extends CI_Controller
{
	public function index()
	{
        $dados = [
        	'li_ativo' => 'li_config'
        ];
		$this->load->view('pdv/template/html-header.php', $dados);
		$this->load->view('pdv/configuracoes/ajustes.php');
		$this->load->view('pdv/template/html-footer.php');
	}
}
