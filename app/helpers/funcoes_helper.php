<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function int2date($dataInt)
{
	$datestring = '%d/%m/%Y - %H:%i';
	return mdate($datestring, $dataInt);
}

function dntodb($data)
{
	$data = str_replace("/", "-", $data);
    return date('Y-m-d', strtotime($data));
}

function detodb($data)
{
	$data = str_replace("/", "-", $data);
    return date('Y-m-d H:i', strtotime($data));
}

function hora($data)
{
	return date('H:i', $data);
}

function datacurta($data)
{
	return nice_date($data, 'd/m/Y');
}

function datahoracurta($data)
{
	return nice_date($data, 'd/m/Y - H:i');
}

function mask($val, $mask)
{
	$maskared = '';
	$k = 0;
	if ($val == '')
	{
		$maskared = '-';
	}
	else
	{
		for($i = 0; $i<=strlen($mask)-1; $i++)
		{
			if($mask[$i] == '#') 
			{
				if(isset($val[$k]))
					$maskared .= $val[$k++];
			}
			else
			{
				if(isset($mask[$i]))
					$maskared .= $mask[$i];
			}
		}
	}
	return $maskared;
}

function unmask($val)
{
	$unmaskared = '';
	$find = array("(",")"," ","-");
	$unmaskared = str_replace($find, "", $val);
	return $unmaskared;
}

function dinheiro($valor)
{
	$formatado = '';
	$formatado = "R$ " . number_format($valor, 2, ',', '.');
	return $formatado;
}

function semanalize($dias)
{
	$pronto ='';
	if(!empty($dias))
	{
		$dias = explode(':', $dias);
		foreach($dias as $dia)
		{
			$pronto .= $dia . 'a. ';
		}
	}
	return $pronto;
}

function modal_deletar($item)
{
	echo '
	<div class="modal fade" id="deletaModal" tabindex="-1" role="dialog" aria-labelledby="alertaModalLabel" aria-hidden="true">
	    <div class="modal-dialog modal-sm" role="document">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h4 class="modal-title" id="tsModalLabel">Deletar - ' . $item . '</h4>
	            </div>
	            <div class="modal-body">
	                <p class="modal-text"></p>
	                <input type="hidden" id="codigo">
	                <input type="hidden" id="item">
	            </div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-default btn-sm pull-left" data-dismiss="modal">Não</button>
	                <button type="button" id="botao_deleta" class="btn btn-primary btn-sm" data-dismiss="modal">Sim</button>
	            </div>
	        </div>
	    </div>
	</div>
	';
}