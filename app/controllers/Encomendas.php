<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Encomendas extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('encomendas_model', 'menc');
    }

	public function listar()
    {
        $dados = [
            'li_ativo' => 'li_encomendas',
            'msg'      => $this->session->flashdata('msg')
        ];
		$this->load->view('pdv/template/html-header.php', $dados);
		$this->load->view('pdv/encomendas/listar.php', array());
		$this->load->view('pdv/template/html-footer.php');
	}
    
    public function add($dia = null)
    {
        $this->load->model('lojas_model', 'mloj');
        $this->lojas = $this->mloj->listar_lojas();

        $dados = [
            'lojas'    => $this->lojas,
            'li_ativo' => 'li_encomendas',
            'dia'      => $dia 
        ];
		$this->load->view('pdv/template/html-header.php', $dados);
		$this->load->view('pdv/encomendas/add.php', $dados);
		$this->load->view('pdv/template/html-footer.php');
	}

    public function cadastrar(){
        $this->load->library('encomenda'); 
        
        $enc = new Encomenda();
        
        $enc->setCliente($_POST['cliente']);
        $enc->setComplemento($_POST['complemento']);
        $enc->setDetalhes($_POST['detalhes']);
        $enc->setEndereco($_POST['endereco']);
        $enc->setFuncionario($_POST['funcionario']);
        $enc->setLoja($_POST['loja']);
        $enc->setOrigem($_POST['origem']);
        $enc->setParadiahora($_POST['paradiahora']);
        
        echo $enc->getCliente().br();
        echo $enc->getParadiahora().br();
        echo $enc->getEndereco().br();
        echo $enc->getComplemento().br();
        echo $enc->getDetalhes().br();
    }
    
    public function relacao()
    {
        // Our Start and End Dates
        $start = $this->input->get("start");
        $end = $this->input->get("end");

        $startdt = new DateTime('now'); // setup a local datetime
        $startdt->setTimestamp($start); // Set the date based on timestamp
        $start_format = $startdt->format('Y-m-d H:i:s');

        $enddt = new DateTime('now'); // setup a local datetime
        $enddt->setTimestamp($end); // Set the date based on timestamp
        $end_format = $enddt->format('Y-m-d H:i:s');

        $events = $this->menc->listar_calendario($start_format, $end_format);

        $data_events = array();

        foreach($events->result() as $r)
        {
            $data_events[] = array(
                "title" => $r->detalhes,
                "start" => $r->paradiahora
            );
        }
        echo json_encode(array("events" => $data_events));
        exit();
    }
}
