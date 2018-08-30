<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdv extends CI_Controller
{
	public function __construct()
	{
        parent::__construct();
        $this->load->model('pdv_model', 'mpdv');
    }

	public function index()
	{
		$this->produtos = $this->mpdv->listar_produtos();

        $dados = [
        	'hidemenu' => 's', //passa parâmetro para carregar a view com o menu mini
        	'li_ativo' => 'li_pdv',
        	'produtos' => $this->produtos
        ];
		$this->load->view('pdv/template/html-header.php', $dados);
		$this->load->view('pdv/pdv.php', $dados);
		$this->load->view('pdv/template/html-footer.php');
	}
}
