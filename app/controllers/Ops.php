<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ops extends CI_Controller
{
	public function index()
	{
		$dados = [
			'li_ativo' => 'li_404'
		];
        $this->load->view('pdv/template/html-header.php', $dados);
		$this->load->view('pdv/template/404.php');
		$this->load->view('pdv/template/html-footer.php');
	}
}
