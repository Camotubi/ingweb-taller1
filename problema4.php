
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
define('descuento1',0.30);
define('descuento2',0.20);
define('descuento3',0.10);
		function main_view()
		{
			$form='<form action="" method="post">
				<input type="number" name= "operand1">
<select name ="operacion">
	<option value ="+">+</option>
	<option value ="-">-</option>
	<option value ="*">*</option>
	<option value ="/">/</option>
</select>
				<input type="number" name =operand2>
				<input type="hidden" name ="accion" value ="calc">
				<input type="submit" value ="Calcular">
				</form>';	
			return $form;
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
				$view = main_view().result_view()["resp"];
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
