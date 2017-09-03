
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
		function main_view()
		{
			$form='<form action="" method="post">
				<label>Horas Trabajadas:</label>
				<input type="number" name =horas_trabajadas>
				<input type="hidden" name ="accion" value ="calcSalario">
				<input type="submit" value ="Calcular Sueldo Semanal">
				</form>';	
			return $form;
		}
		function result_view()
		{

		
			
					$horas_trabajadas = $_POST["horas_trabajadas"];

					if($horas_trabajadas> 35)
					{
						$sueldo_semanal = $horas_trabajadas *22;
					}
					else
					{
						$sueldo_semanal = $horas_trabajadas *15;
					
					}
			
			$result ='<h3>Salario semanal</h3><p>'.$sueldo_semanal.'</p><a href="">Atras</a>';
					return $result;
		}
	if(isset($_POST["accion"]))
	{

			if($_POST["accion"] == "calcSalario")
			{
				$view = result_view();
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
