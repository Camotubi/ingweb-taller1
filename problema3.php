<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
define('descuento1',0.30);
define('descuento2',0.20);
define('descuento3',0.10);
		function main_view()
		{
			$problema='

	<h3>Problema 3</h3>
<p>En una librería se venden artículos con las siguientes condiciones:</p>
			      <ol>
<li>Sí el cliente es de tipo 1 se le descuenta 30% </li>
<li>Sí el cliente es de tipo 2 se le descuenta 20% </li>
<li>Sí el cliente es de tipo 3se le descuenta 10%</li>
</lo>';
			$form='<div class="form-box"><form action="" method="post">
				<div class="form-group">
<label>Tipo de Cliente:</label>
<select name ="tipo_cliente" class="form-control">
	<option value ="1"> Tipo 1</option>
	<option value ="2"> Tipo 2</option>
	<option value ="3"> Tipo 3</option>
</select>
</div>
<div class="form-group">
<label for="nombre_cliente">Nombre de Cliente: </label>
				<input type="text" class="form-control" name= "nombre_cliente">
</div>
<div class="form-group">
<label for="precio_articulo">Precio articulo:</label>
				<input class="form-control" type="number" name =precio_articulo>
</div>		
		<input type="hidden" name ="accion" value ="calcPrecioFinal">
				<input type="submit" class ="btn btn-primary" value ="Calcular Precio Final">
				</form>
</div>';
			return $problema.$form;
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
				<p>Precio Producto: '.$precio_articulo.'$</p>
				<p>Descuento: '.($descuento*100).'$</p>
				<p>Monto Final: '.$monto_final.'$</p>
				<a href="">Atras</a>';
					return $result;
		}
	if(isset($_POST["accion"]))
	{

			if($_POST["accion"] == "calcPrecioFinal")
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
