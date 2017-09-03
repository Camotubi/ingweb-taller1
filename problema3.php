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
				<label>Tipo de Cliente:</label>
<select name ="tipo_cliente">
	<option value ="1"> Tipo 1</option>
	<option value ="2"> Tipo 2</option>
	<option value ="3"> Tipo 3</option>
</select>
				<input type="text" name= "nombre_cliente">
<label>Precio articulo:</label>
				<input type="number" name =precio_articulo>
				<input type="hidden" name ="accion" value ="calcPrecioFinal">
				<input type="submit" value ="Calcular Precio Final">
				</form>';	
			return $form;
		}
		function result_view()
		{
				$tipo_cliente =$_POST["tipo_cliente"];
				$precio_articulo = $_POST["precio_articulo"];
				$nombre_cliente = $_POST["nombre_cliente"];

			switch($tipo_cliente)
			{
			case 1:
				$descuento = descuento1;
					break;
			case 2:
				$descuento = descuento2;
					break;
				case 3:
					$descuento = descuento3;
					break;

			}	
			
				$monto_final = $precio_articulo-($precio_articulo*$descuento);
			
			$result ='<h3>Factura</h3>
				<p>Nombre del Cliente: '.$nombre_cliente.'</p>
				<p>Tipo de Cliente: '.$tipo_cliente.'</p>
				<p>Descuento:'.$descuento.'</p>
				<p>Monto Final:'.$monto_final.'</p>
				<a href="">Atras</a>';
					return $result;
		}
	if(isset($_POST["accion"]))
	{

			if($_POST["accion"] == "calcPrecioFinal")
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
