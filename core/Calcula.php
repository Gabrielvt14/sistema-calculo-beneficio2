<?php

class Calcula
{

	public $mes, $dia, $ano, $feriado, $beneficio, $diaSemana, $diasUteis, $result, $totalDiasMes;
	
	function __construct($dados)
	{
		//$date = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));

		$this->mes 		= $dados['mes'];
		$this->ano 		= $dados['ano'];
		$this->feriado 	= $dados['feriado'];
		$this->beneficio  = $dados['beneficio'];
	}

		// Calcula os dias uteis do mes
	public function contaDia()
	{
		$this->diasUteis = 0;
			// cal_days_in_month = (CALENDARIO, MES, ANO);
		$this->totalDiasMes = cal_days_in_month(CAL_GREGORIAN, $this->mes, $this->ano);
			// Pega todos os dias do mes e ano digitados

			// Pega somente os dias uteis (Seg. a Sex.)
		for ($this->dia = 1; $this->dia <= $this->totalDiasMes; $this->dia++) {
			$timeStamp = mktime(0, 0, 0, $this->mes, $this->dia, $this->ano);
			$this->diaSemana = date('N', $timeStamp);
			if ($this->diaSemana < 6) $this->diasUteis++;
		}
		return $this->diasUteis;
	}

		// Realiza os calculos com as informações do POST
	public function calcDia()
	{
		$this->result = $this->diasUteis - $this->feriado;
		$this->result *= $this->beneficio;
	}
}

$calc = new Calcula($_POST);
$calc->contaDia();
$calc->calcDia();

$feriado = $calc->feriado;
$result = $calc->result;
$beneficio = $calc->beneficio;
$diasUteis = $calc->diasUteis;

header('Location: ../mostraResultado.php?feriado='.$feriado.'&result='.$result.'&beneficio='.$beneficio.'&diasUteis='.$diasUteis);