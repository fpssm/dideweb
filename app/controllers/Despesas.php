<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Despesas extends CI_Controller
{
	public function __construct()
	{
        parent::__construct();
        
        $this->load->model('lojas_model', 'mloj');
        $this->load->model('despesas_model', 'mdes');
        $this->load->model('funcionarios_model', 'mfun');
        $this->lojas = $this->mloj->listar_lojas();
    
        $this->despesas = $this->mdes->listar_despesas();
        $this->tipos_despesas = $this->mdes->listar_tipos_despesas();
        $this->funcionarios = $this->mfun->listar_funcionarios();
    }

	public function listar()
	{
		$dados = [
			'despesas' => $this->despesas,
        	'li_ativo' => 'li_despesas'
		];
		$this->load->view('pdv/template/html-header.php', $dados);
		$this->load->view('pdv/despesas/listar.php', $dados);
		$this->load->view('pdv/template/html-footer.php');
	}
    
    public function add()
	{
        $dados = [
        	'tipos_despesas'	=> $this->tipos_despesas,
        	'funcionarios' 		=> $this->funcionarios,
        	'lojas'				=> $this->lojas,
        	'li_ativo' 			=> 'li_despesas'
        ];
		$this->load->view('pdv/template/html-header.php', $dados);
		$this->load->view('pdv/despesas/add.php',$dados);
		$this->load->view('pdv/template/html-footer.php');
	}

	public function cadastrar()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('valor_despesa', 'Valor da Despesa', 'trim|required');
		$this->form_validation->set_rules('data', 'Data e horário', 'trim|required');
	
		if($this->form_validation->run() == FALSE)
		{
			$this->add();
		}
		else
		{
			if($this->mdes->adicionar_despesa($_POST))
			{
				$this->session->set_flashdata('msg', 'Despesa "' . $_POST['descricao'] . '" adicionada com sucesso.');
			}
			else
			{
				$this->session->set_flashdata('msg_erro', 'Erro ao criar a Despesa "' . $_POST['descricao'] . '".');
			}
			$this->listar();
			//redirect(base_url('despesas/listar'));
		}
	}

	public function cadastrar_tipo()
	{
        $this->load->library('form_validation');
		$this->form_validation->set_rules('descricao', 'Descrição', 'trim|required|is_unique[dw_tipos_despesas.descricao]');
		if($this->form_validation->run() == FALSE)
		{
			$this->add();
		}
		else
		{
			if($this->mdes->adicionar_tipo_despesa($_POST))
			{
				$this->session->set_flashdata('msg', 'Tipo de Despesa "' . $_POST['descricao'] . '" adicionada com sucesso.');
			}
			else
			{
				$this->session->set_flashdata('msg_erro', 'Tipo de Despesa "' . $_POST['descricao'] . '" adicionada com sucesso.');
			}
			$this->add();
			//redirect(base_url('despesas/add'));
		}
	}
}
