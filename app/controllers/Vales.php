<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vales extends CI_Controller
{
	public function __construct()
	{
        parent::__construct();
        $this->load->model('vales_model', 'mval');
        $this->vales = $this->mval->listar_vales();
    }

	public function listar()
	{
		$dados = [
			'vales'    => $this->vales,
        	'li_ativo' => 'li_vales'
        ];
		$this->load->view('pdv/template/html-header.php', $dados);
		$this->load->view('pdv/vales/listar.php');
		$this->load->view('pdv/template/html-footer.php');
	}
    
    public function add()
	{
		$this->load->model('funcionarios_model', 'mfun');
        $this->load->model('clientes_model', 'mcli');

        $this->funcionarios = $this->mfun->listar_funcionarios();
        $this->clientes = $this->mcli->listar_clientes();

        $dados = [
        	'li_ativo' 		=> 'li_vales',
        	'funcionarios'  => $this->funcionarios,
        	'clientes' 		=> $this->clientes
    	];
		$this->load->view('pdv/template/html-header.php', $dados);
		$this->load->view('pdv/vales/add.php', $dados);
		$this->load->view('pdv/template/html-footer.php');
	}

	public function buscar()
	{
		if ($this->mval->buscaCodigo('6995-1728-5103-4478') == TRUE)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function cadastrar()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('codigo', 'Código', 'trim|required|is_unique[dw_vales_presentes.codigo]');
		$this->form_validation->set_rules('valor', 'Valor', 'trim|required|greater_than[5]');
		$this->form_validation->set_rules('expira_em', 'Valido até', 'trim|required');
				
		if($this->form_validation->run() == FALSE)
		{
			$this->add();
		}
		else
		{
			if($this->mval->adicionar_vale($_POST))
			{
				$this->session->set_flashdata('msg', 'Vale-presente "' . $_POST['codigo'] . '" criado com sucesso.');
			}
			else
			{
				$this->session->set_flashdata('msg_erro', ' Não foi possível criar o Vale-presente "' . $_POST['codigo'] . '".');
			}
			$this->listar();
			//redirect(base_url('vales/listar'));
		}
	}

	public function gerar()
	{
		//fazer consulta no bd pra ver se ja tem o codigo, caso tenha this>gerar()
		$this->load->helper('string');
		// echo mask(random_string('alnum',16),'####-####-####-####');
		// echo mask(random_string('alpha',16),'####-####-####-####');
		echo mask(random_string('numeric',16),'####-####-####-####');
		// echo mask(random_string('nozero',16),'####-####-####-####');
		// echo mask(random_string('md5'),'####-####-####-####');
		// echo mask(random_string('sha1'),'####-####-####-####');
	}
}
