<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    	$this->load->model('categorias_model', 'mcat');
        $this->categorias = $this->mcat->listar_categorias();
    }

	public function listar()
	{
        $dados = [
        	'categorias' => $this->categorias,
        	'li_ativo'	 => 'li_categorias'
        ];
		$this->load->view('pdv/template/html-header.php', $dados);
		$this->load->view('pdv/categorias/listar.php', $dados);
		$this->load->view('pdv/template/html-footer.php');
	}
    
    public function add()
	{
        $dados = [
        	'li_ativo' => 'li_categorias'
        ];
		$this->load->view('pdv/template/html-header.php', $dados);
		$this->load->view('pdv/categorias/add.php');
		$this->load->view('pdv/template/html-footer.php');
	}

	public function deletar()
	{
		$id = $_POST['id'];
		$item = $_POST['item'];
        if($this->mcat->deletar_categoria($id))
        {
			$this->session->set_flashdata('msg', 'Categoria "' . $item  . '" deletada com sucesso.');
		}
		else
		{
			$this->session->set_flashdata('msg_erro', 'Não foi possível deletar a categoria "' . $item  . '".');
		}
		$this->listar();
	}


	public function cadastrar()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('codigo', 'Código', 'trim|required|is_unique[dw_categorias.codigo]');
		$this->form_validation->set_rules('nome', 'Nome', 'trim|required|is_unique[dw_categorias.nome]');
		if($this->form_validation->run() == FALSE)
		{
			$this->add();
		}
		else
		{
			if($this->mcat->adicionar_categoria($_POST))
			{
				$this->session->set_flashdata('msg', 'Categoria "' . $_POST['nome'] . '" adicionada com sucesso.');
			}
			else
			{
				$this->session->set_flashdata('msg_erro', 'Erro ao criar a categoria "' . $_POST['nome'] . '".');
			}
			$this->listar();
			//redirect(base_url('categorias/listar'));
		}
	}
}
