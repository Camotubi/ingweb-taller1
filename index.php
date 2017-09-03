<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
		function main_view()
		{
			$form='<form action="" method="post">
				<label>Salario Anual:</label>
				<input type="number" name =salario_anual>
				<label>Años en la Empresa:</label>
				<input type="number" name ="anos_en_empresa">
				<input type="hidden" name ="accion" value ="calcSueldo">
				<input type="submit" value ="Calcular Sueldo Final">
				</form>';	
			return $form;
		}
		function result_view()
		{

		
			
					$salario_anual = $_POST["salario_anual"];
					$anos_en_empresa = intval($_POST["anos_en_empresa"]);

					if($anos_en_empresa>= 10)
					{
						$salario_final = 1.10 *$salario_anual;
					}
					elseif($anos_en_empresa< 10 && $anos_en_empresa>=5 )
					{
						$salario_final = 1.07 *$salario_anual;
					}
					elseif($anos_en_empresa< 5 && $anos_en_empresa>=3 )
					{
						
						$salario_final = 1.05 *$salario_anual;
					}
					elseif($anos_en_empresa< 3 && $anos_en_empresa>=0 )
					{
						
						$salario_final = 1.03 *$salario_anual;
					}
			
			$result ='<h3>Salario con bono</h3><p>'.$salario_final.'</p><a href="">Atras</a>';
					return $result;
		}
	if(isset($_POST["accion"]))
	{

			if($_POST["accion"] == "calcSueldo")
			{
				$view = result_view();
			}
	}
	else
	{
		$view = main_view();
	}
include 'template.php';
?>


