<?php
	function calculaIdade($dtanasc) {
		$diaMes = date('md');
		$ano = date('Y');

		$diaMesN = date('md', strtotime($dtanasc));
		$anoN = date('Y', strtotime($dtanasc));
		
		if($diaMes >= $diaMesN)
			$idade = $ano - $anoN;
		else
			$idade = $ano - $anoN - 1;

		return $idade;
	}
?>