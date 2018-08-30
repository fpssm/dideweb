<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller
{
	public function __construct()
	{
        parent::__construct();
        $this->load->model('clientes_model', 'mcli');
    }

	public function listar()
	{
		$this->clientes = $this->mcli->listar_clientes();

        $dados = [
        	'clientes' => $this->clientes,
        	'li_ativo' => 'li_pessoas'
        ];
		$this->load->view('pdv/template/html-header.php', $dados);
		$this->load->view('pdv/clientes/listar.php');
		$this->load->view('pdv/template/html-footer.php');
	}
    
    public function add()
	{
		$this->load->model('lojas_model', 'mloj');
        $this->lojas = $this->mloj->listar_lojas();

        $dados = [
        	'lojas' 	=> $this->lojas,
        	'li_ativo' 	=> 'li_pessoas'
        ];
		$this->load->view('pdv/template/html-header.php', $dados);
		$this->load->view('pdv/clientes/add.php');
		$this->load->view('pdv/template/html-footer.php');
	}

	public function cadastrar()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nome', 'Nome', 'trim|required|min_length[3]|callback_alpha_dash_space');
		$this->form_validation->set_rules('sobrenome', 'Sobrenome', 'trim|required|min_length[3]|callback_alpha_dash_space');
		$this->form_validation->set_rules('cpf', 'CPF', 'trim|callback_validaCPF');
		$this->form_validation->set_rules('data_nas', 'Data de Nascimento', 'trim|required');
		$this->form_validation->set_rules('estado', 'Estado', 'trim|alpha|max_length[2]');
		$this->form_validation->set_rules('cep', 'CEP', 'trim|numeric|max_length[8]');
		$this->form_validation->set_rules('email', 'E-mail', 'trim|valid_email');
		$this->form_validation->set_rules('celular', 'Celular', 'trim|required');
		
		if($this->form_validation->run() == FALSE)
		{
			$this->add();
		}
		else
		{
			if($this->mcli->adicionar_cliente($_POST))
			{
				$this->session->set_flashdata('msg', 'Cliente "' . $_POST['nome'] . '" adicionado com sucesso.');
			}
			else
			{
				$this->session->set_flashdata('msg_erro', 'Erro ao criar o Cliente "' . $_POST['nome'] . '".');
			}
			$this->listar();
			//redirect(base_url('clientes/listar'));
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

	function validaCPF($cpf = null)
	{
		// Verifica se um número foi informado
		if(empty($cpf))
		{
			return true; //mudar para false se na validação for required
		}

		// Elimina possivel mascara
		$cpf = preg_replace("/[^0-9]/", "", $cpf);
		$cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
		
		// Verifica se o numero de digitos informados é igual a 11 
		if (strlen($cpf) != 11)
		{
			$this->form_validation->set_message('validaCPF', 'O campo %s deve conter 11 caracteres.');
			return false; //nunca vai ser false pois o campo contém máscara que obriga formato correto.
		}

		// Verifica se nenhuma das sequências invalidas abaixo 
		// foi digitada. Caso afirmativo, retorna falso
		else if ($cpf == '00000000000' || 
			$cpf == '11111111111' || 
			$cpf == '22222222222' || 
			$cpf == '33333333333' || 
			$cpf == '44444444444' || 
			$cpf == '55555555555' || 
			$cpf == '66666666666' || 
			$cpf == '77777777777' || 
			$cpf == '88888888888' || 
			$cpf == '99999999999' ||
			$cpf == '12345678910') 
		{
			$this->form_validation->set_message('validaCPF', 'Este CPF não pode ser usado.');
			return false;

		 // Calcula os digitos verificadores para verificar se o
		 // CPF é válido
		 } 
		 else 
		 {   
			for ($t = 9; $t < 11; $t++)
			{
				for ($d = 0, $c = 0; $c < $t; $c++) 
				{
					$d += $cpf{$c} * (($t + 1) - $c);
				}
				$d = ((10 * $d) % 11) % 10;
				if ($cpf{$c} != $d) 
				{
					$this->form_validation->set_message('validaCPF', 'Verifique se você digitou o CPF corretamente.');
					return false;
				}
			}
			return true;
		}
	}
}
