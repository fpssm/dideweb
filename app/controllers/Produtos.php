<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller
{
	public function __construct()
	{
        parent::__construct();
        $this->load->model('produtos_model', 'mpro');
        $this->produtos = $this->mpro->listar_produtos();
        $this->load->model('categorias_model', 'mcat');
        $this->categorias = $this->mcat->listar_categorias();
    }

	public function listar()
	{
        $dados = [
        	'produtos' => $this->mpro->listar_produtos(),
        	'li_ativo' => 'li_produtos'
    	];
		$this->load->view('pdv/template/html-header.php', $dados);
		$this->load->view('pdv/produtos/listar.php');
		$this->load->view('pdv/template/html-footer.php');
	}
    
    public function add()
	{
        $dados = [
        	'li_ativo' 	 => 'li_produtos',
        	'categorias' => $this->categorias
        ];
		$this->load->view('pdv/template/html-header.php', $dados);
		$this->load->view('pdv/produtos/add.php', $dados);
		$this->load->view('pdv/template/html-footer.php');
	}

	public function deletar()
	{
		$id = $_POST['id'];
		$item = $_POST['item'];
        if($this->mpro->deletar_produto($id))
        {
			$this->session->set_flashdata('msg', 'Produto "' . $item  . '" deletado com sucesso.');
		}
		else
		{
			$this->session->set_flashdata('msg_erro', 'Não foi possível deletar o produto "' . $item  . '".');
		}
		$this->listar();
	}

	public function cadastrar()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('codigo', 'Código', 'trim|required|is_unique[dw_produtos.codigo]');
		$this->form_validation->set_rules('nome', 'Nome', 'trim|required|is_unique[dw_produtos.nome]');
		$this->form_validation->set_rules('preco', 'Preço de Venda', 'trim|required|numeric|is_unique[dw_produtos.nome]');
		$this->form_validation->set_rules('custo', 'Valor de Custo', 'trim|numeric');
		$this->form_validation->set_rules('qtd', 'Quantidade', 'trim|numeric');
		$this->form_validation->set_rules('alerta_quantidade', 'Alerta de Quantidade', 'trim|numeric');
		if($this->form_validation->run() == FALSE)
		{
			$this->add();
		
		}else
		{
			$produto = [
				'codigo' => $_POST['codigo'],
				'nome' => $_POST['nome'],
				'id_categoria' => $_POST['id_categoria'],
				'tipo' => $_POST['tipo'],
				'preco' => $_POST['preco'],
				'custo' => $_POST['custo'],
				'detalhes' => $_POST['detalhes'],
				'alerta_quantidade' => $_POST['alerta_quantidade'],
				'encomendavel' => isset($_POST['encomendavel']) ? $_POST['encomendavel'] : NULL
			];
			$produto_loja = [
				'id_loja' => 1,
				'qtd' => $_POST['qtd']
			];
			$nome= $produto['nome'];
			if($this->mpro->adicionar_produto($produto, $produto_loja))
			{
				$this->session->set_flashdata('msg', 'Produto "' . $nome . '" adicionado com sucesso.');
			}
			else
			{
				$this->session->set_flashdata('msg_erro', 'Não foi possível adicionar o Produto "' . $nome . '".');
			}
			$this->listar();
			//redirect(base_url('produtos/add'));
		}
	}
}
