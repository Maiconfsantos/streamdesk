<?php

	function format_cpf($cpf){
			$retirar = array(".","-");

			return (str_replace($retirar, '', $cpf));
	}

?>