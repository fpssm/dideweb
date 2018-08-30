<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionarios extends CI_Controller
{
	public function __construct()
	{
        parent::__construct();
        $this->load->model('funcionarios_model', 'mfun');
    }

	public function listar()
	{
		$this->funcionarios = $this->mfun->listar_funcionarios();

        $dados = [
        	'funcionarios' 	=> $this->funcionarios,
        	'li_ativo' 		=> 'li_pessoas'
        ];
		$this->load->view('pdv/template/html-header.php', $dados);
		$this->load->view('pdv/funcionarios/listar.php');
		$this->load->view('pdv/template/html-footer.php');
	}
    
    public function add()
	{
		$this->load->model('lojas_model', 'mloj');
        $this->lojas = $this->mloj->listar_lojas();
        $this->grupos = $this->mfun->listar_grupos();

        $dados = [
        	'lojas'		=> $this->lojas,
        	'grupos'	=> $this->grupos,
        	'li_ativo' 	=> 'li_pessoas'
        ];
		$this->load->view('pdv/template/html-header.php', $dados);
		$this->load->view('pdv/funcionarios/add.php', $dados);
		$this->load->view('pdv/template/html-footer.php');
	}

	public function cadastrar()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('codigo', 'Código', 'trim|required|alpha_numeric|exact_length[4]|is_unique[dw_funcionarios.codigo]', 
			array('exact_length' => 'O campo %s deve ter exatamente 4 caracteres.')
		);
		$this->form_validation->set_rules('nome', 'Nome', 'trim|required|min_length[3]|callback_alpha_dash_space');
		$this->form_validation->set_rules('sobrenome', 'Sobrenome', 'trim|required|min_length[3]|callback_alpha_dash_space');
		$this->form_validation->set_rules('data_nas', 'Data de Nascimento', 'trim|required');
		$this->form_validation->set_rules('data_adm', 'Data de Admissão', 'trim|required');
		$this->form_validation->set_rules('endereco1', 'Endereço', 'trim|required');
		$this->form_validation->set_rules('cidade', 'Cidade', 'trim|required');
		$this->form_validation->set_rules('telefone', 'Telefone', 'trim|required');
		
		if($this->form_validation->run() == FALSE)
		{
			$this->add();
		}
		else
		{
			if($this->mfun->adicionar_funcionario($_POST))
			{
				$this->session->set_flashdata('msg', 'Funcionário "' . $_POST['nome'] . '" adicionado com sucesso.');
			}
			else
			{
				$this->session->set_flashdata('msg_erro', 'Não foi possível criar o Funcionário "' . $_POST['nome'] . '".');
			}
			$this->listar();
			//redirect(base_url('funcionarios/listar'));
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
