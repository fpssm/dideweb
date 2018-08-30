<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dash extends CI_Controller
{
	public function index()
	{
		$dados = [
			'li_ativo' => 'li_dash'
		];
		$this->load->view('pdv/template/html-header.php', $dados);
		$this->load->view('pdv/dash.php');
		$this->load->view('pdv/template/html-footer.php');
	}
}
