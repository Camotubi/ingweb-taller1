
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
		function main_view()
		{
			$problema = '
<h3>Problema 2</h3>
<p>Cree un programa que permita calcular el salario semanal de unos empleados a los que se les paga $15 por hora si éstas no superan las 35 horas. Cada hora por encima de 35 se considerará extra y se paga a $22. El programa debe pedir las horas trabajadas por el trabajador y devolver el salario que se le debe pagar </p>';		
	$form='<div class="form-box"><form  action="" method="post">
<div class="form-group">				
<label>Horas Trabajadas:</label>
				<input class="form-control" type="number" name =horas_trabajadas>
</div>
				<input type="hidden" name ="accion" value ="calcSalario">
				<input class="btn - btn-principal" type="submit" value ="Calcular Sueldo Semanal">
				</form>
</div>';	
			return $problema.$form;
		}
		function result_view()
		{

		
			
					$horas_trabajadas = $_POST["horas_trabajadas"];

					if($horas_trabajadas> 35)
					{
						$sueldo_semanal = ($horas_trabajadas-35)*22+$horas_trabajadas*15 ;
					}
					else
					{
						$sueldo_semanal = $horas_trabajadas *15;
					
					}
			
			$result ='<h3>Salario semanal</h3><p>'.$sueldo_semanal.'$</p><a href="">Atras</a>';
					return $result;
		}
	if(isset($_POST["accion"]))
	{

			if($_POST["accion"] == "calcSalario")
			{
				$view = main_view().'<br>'.result_view();
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
