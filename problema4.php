
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
define('descuento1',0.30);
define('descuento2',0.20);
define('descuento3',0.10);
		function main_view()
		{
			$problema = '
	<h3>Problema 4</h3>
<p>Realizar un programa que almacene en variables dos números reales y un operador (+, -, *, /), y que muestre en pantalla el resultado de la operación introducida.</p>';
			$form='
			

<form class="form-inline" action="" method="post">
<div class="form-group">
				<input type="number" class="form-control" step="0.01" name= "operand1">
</div>
<div class="form-group">
<select name ="operacion" class="form-control" >
	<option value ="+">+</option>
	<option value ="-">-</option>
	<option value ="*">*</option>
	<option value ="/">/</option>
</select>
</div>
<div class="form-group">
				<input type="number" class="form-control" step="0.01" name =operand2>
</div>
				<input type="hidden" name ="accion" value ="calc">
				<input type="submit" class="btn btn-primary" value ="Calcular">
				</form>';	
			return $problema.$form;
		}
		function result_view()
		{
				$operacion =$_POST["operacion"];
				$operando1 = $_POST["operand1"];
				$operando2 = $_POST["operand2"];

			switch($operacion)
			{
			case "+":
				$resp = $operando1 + $operando2;
					break;
			case "-":

				$resp = $operando1 - $operando2;
					break;
				case "*":
				
				$resp = $operando1 * $operando2;
			break;
				case "/":
					if($operando2 !=0)
					{

				$resp = $operando1 / $operando2;
					}
					else
					{
						$resp = "???";
						$error = "No se puede dividir entre 0";
					}
					break;
			}	
			
			
			$result["resp"] ='<h3>Resultado</h3>
				<p>'.$resp.'</p>
				<a href="">Atras</a>';
			if(isset($error))
			{
			
			$result["error"] = $error;
			}
					return $result;
		}
	if(isset($_POST["accion"]))
	{

			if($_POST["accion"] == "calc")
			{
				$view = main_view().'<br>'.result_view()["resp"];
			}
			
		else
		{
			$view = main_view();
		}
	}
	else{
		$view =main_view();
	}
include 'template.php';
?>
