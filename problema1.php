<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
		function main_view()
		{
			$problema='
	<h3>Problema 1</h3>
<p>ealice un programa que calcule el sueldo que le corresponde al trabajador de una empresa que cobra $40.000 anuales, el programa debe realizar los cálculos en función de los siguientes criterios:</p>
<ol>
<li>Si lleva más de 10 años en la empresa se le aplica un aumento del 10%.
</li>
<li>Si lleva menos de 10 años pero más que 5 se le aplica un aumento del 7%.
</li>
<li>Si lleva menos de 5 años pero más que 3 se le aplica un aumento del 5%.
</li>
<li>d.Si lleva menos de 3 años se le aplica un aumento del 3%.
</li>
</ol>
';
			$form='
				<form action="" method="post">
<div class ="form-group">
				<label for="salario_anual">Salario Anual:</label>
				<input type="number" class="form-control" name =salario_anual>
	</div>
			<div class ="form-group">
<label for="anos_en_empresa">Años en la Empresa:</label>
				<input type="number" class="form-control" name ="anos_en_empresa">
	</div>			
<input type="hidden" name ="accion" value ="calcSueldo">
				<input type="submit" class="btn btn-primary" value ="Calcular Sueldo Final">
				</form>
					';	
			return $problema.'<br>'.$form;
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
			
			$result ='<h3>Salario con bono</h3><p>'.$salario_final.'$</p><a href="">Atras</a>';
					return $result;
		}
	if(isset($_POST["accion"]))
	{

			if($_POST["accion"] == "calcSueldo")
			{
				$view = main_view().'<br>'.result_view();
			}
	}
	else
	{
		$view = main_view();
	}
include 'template.php';
?>


