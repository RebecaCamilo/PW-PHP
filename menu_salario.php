<!DOCTYPE html>
<html>
<head>
	<title>Recebendo dados do Formulário</title>
</head>
<body>
	<form method="get" action="menu_salario.php">
	<br>
	Menu de Opções:
	<br>
	[1] Imposto
	<br>
	[2] Novo salário
	<br>
	[3] Classificação
	<br>
	<br>
	Digite a opção desejada:<br />
	<input type="num" name="op" />
	<br>
	<br>
	Qual o salario:<br />
	<input type="num" name="salario" />
	<br>
	<br>	
	<input type="submit" value="Enviar" />
	</form>
</body>
</html>


<?php

	$op;
	$salario;

	if(!empty($_GET["op"])) {
		$op = $_GET["op"];
	}
		
	if(!empty($_GET["salario"])) {
		$salario = $_GET["salario"];

		switch($op) {
			case 1:
				echo "<br><br>";
				if($salario < 500 && $salario > 0) {
					$imposto = $salario * 0.05;
					echo "Valor do imposto: R$" . $imposto;			
				} elseif($salario >= 500 && $salario <= 850) {
					$imposto = $salario * 0.1;
					echo "Valor do imposto: R$" . $imposto;	
				} elseif($salario > 850) {
					$imposto = $salario * 0.15;
					echo "Valor do imposto: R$" . $imposto;	
				} else {
					echo "Valor inválido!";
				}
				break;			
			case 2:
				echo "<br><br>";
				if($salario < 450 && $salario > 0) {
					$aumento = 100;
					echo "Valor do aumento: R$" . $aumento;			
				} elseif($salario >= 450 && $salario < 750) {
					$aumento = 75;
					echo "Valor do aumento: R$" . $aumento;	
				} elseif($salario >= 750 && $salario <= 1500) {
					$aumento = 50;
					echo "Valor do aumento: R$" . $aumento;	
				} elseif($salario > 1500) {
					$aumento = 25;
					echo "Valor do aumento: R$" . $aumento;	
				} else {
					echo "Valor inválido!";
				}
				break;
			case 3:
				echo "<br><br>";
				if($salario <= 700 && $salario > 0) {
					echo "Mal remunerado";			
				} elseif($salario > 700) {
					echo "Bem remunerado";	
				} else {
					echo "Valor inválido!";
				}
				break;
			default:
				echo "Opção inválida!";

		}

	}

?>
