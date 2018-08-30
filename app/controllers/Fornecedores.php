<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fornecedores extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
        $this->load->model('fornecedores_model', 'mfor');
    }

	public function listar()
	{
		$this->fornecedores = $this->mfor->listar_fornecedores();
		$dados = [
			'fornecedores'	=> $this->fornecedores,
        	'li_ativo'		=> 'li_pessoas'
        ];
		$this->load->view('pdv/template/html-header.php', $dados);
		$this->load->view('pdv/fornecedores/listar.php', $dados);
		$this->load->view('pdv/template/html-footer.php');
	}
    
    public function add()
	{
		$this->load->model('lojas_model', 'mloj');
        $this->lojas = $this->mloj->listar_lojas();

        $dados = [
        	'lojas'		=> $this->lojas,
        	'li_ativo'	=> 'li_pessoas'
        ];
		$this->load->view('pdv/template/html-header.php', $dados);
		$this->load->view('pdv/fornecedores/add.php', $dados);
		$this->load->view('pdv/template/html-footer.php');
	}

	public function cadastrar()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nome', 'Descrição do Fornecedor', 'trim|required|min_length[3]|is_unique[dw_fornecedores.nome]|callback_alpha_dash_space');
		$this->form_validation->set_rules('vendedor', 'Nome do Vendedor', 'trim|required|min_length[3]|callback_alpha_dash_space');
		$this->form_validation->set_rules('telefone_vendedor', 'Telefone do Vendedor', 'trim|required|is_unique[dw_fornecedores.telefone_vendedor]');
		$this->form_validation->set_rules('telefone', 'Telefone da Empresa', 'trim|is_unique[dw_fornecedores.telefone]');
		
		if($this->form_validation->run() == FALSE)
		{
			$this->add();
		}
		else
		{
			if($this->mfor->adicionar_fornecedor($_POST))
			{
				$this->session->set_flashdata('msg', 'Fornecedor "' . $_POST['nome'] . '" adicionado com sucesso.');
			}
			else
			{
				$this->session->set_flashdata('msg_erro', 'Não foi possível criar o Fornecedor "' . $_POST['nome'] . '".');
			}
			$this->listar();
			//redirect(base_url('fornecedores/listar'));
		}
	}

	function alpha_dash_space($campo)
	{
		if (! preg_match('/^([-a-z_ ])+$/i', $campo))
		{
			$this->form_validation->set_message('alpha_dash_space', 'O campo %s deve conter somente letras e espaços.');
        	return FALSE;
        }
        else
        {
        	return TRUE;
    	}
	}
}
